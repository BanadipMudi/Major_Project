@extends('user.index')

@section('content-section')
<div class="border rounded p-4">
            <h3 class="text-secondary mt-2 fs-3">Ask a Question</h3>
            <hr class="mt-0">
            <form enctype="multipart/form-data" id="create-post-form">
                @csrf
              <div class="d-flex mt-2 mb-4">
                <!--------------------------------------------------- this is for catagory only -->
                        <select class="form-select me-2 bg-secondary text-light" name="catagory" aria-label="Default select example" id="catagory">
                          <option selected>Select Catagory</option>
                          
                          @if(count($catagory)>0)
                            @foreach($catagory as $catagory)
                              <option value="{{ $catagory['id'] }}">{{ strtoupper($catagory['catagory_name']) }}</option>
                            @endforeach
                          @endif
  
                        </select>
              <!-- -------------------------------------------------this is for sub catagory only --------------->
                        <select class="form-select ms-2 bg-secondary text-light" name="subcatagory" aria-label="Default select example" id="subcatagory">
                          <option selected>Select Sub-Catagory</option>
                        </select>
              </div>
              <textarea name="summernote" class="summernote" id="summernote" cols="30" rows="10"></textarea>
              <div class="mt-3 mb-2 d-flex justify-content-end">
                <a href="{{route('user.cancel')}}" id="cancel-summernote" class="btn btn-danger ps-4 pe-4 me-2">Cancel</a>
                <input type="submit" value="Add Question" class="ms-2 btn btn-success post-submit ps-4 pe-4">
              </div>
             </form>
          </div>

          
              <div class="alert alert-danger fw-bold text-center error-alert w-50" style="display:none;">
               
              </div>
              <div class="alert alert-success fw-bold text-center success-alert w-50" style="display:none;">
                  
              </div>
       

@endsection

@section('content-scripts')
<link rel="stylesheet" href="{{ asset('css/view_single_page.css') }}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script>
  $('.summernote').summernote({
        placeholder: 'please select catagory & sub-catagory before adding a question.',
        tabsize: 2,
        height: 240,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['fontname'],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture']],
          ['view', ['fullscreen', 'codeview']]
        ],
        callbacks: {
        onImageUpload: function(files) {
            var formData = new FormData();

            for (var i = 0; i < files.length; i++) {
                formData.append('file[]', files[i]);
            }
            formData.append('_token', '{{ csrf_token() }}');
            //console.log(formData);
            $.ajax({
                url: "{{route('image.upload')}}",
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var urls = response.urls;
                    console.log(urls);
                    for (var i = 0; i < urls.length; i++) {
                        $('.summernote').summernote('insertImage', urls[i]);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + ' ' + errorThrown);
                }
            });
        },
        
        onMediaDelete: function(element) {
            var src = $(element).attr('src');
            var filename = src.split('/').pop();
            $.ajax({
                data: {filename: filename, _token: "{{ csrf_token() }}"},
                type: "POST",
                url: '{{ route("image.delete") }}',
                cache: false,
                success: function(response) {
                    console.log(response);
                }
            });
        }
    }
      });

  </script>
@endsection

@section('ajaxfor')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
  $('#catagory').on('change',function(){
 var id=$(this).val();
  $.ajax({
    url:"{{route('user.create')}}",
    type:'GET',
    data:{id:id},
    success:function(data){
      //console.log(data.subcatagory);
      let html='';
      if(data.subcatagory.length > 0){
          for (let index = 0; index < data.subcatagory.length; index++) {
          const element = data.subcatagory[index];
          html=html+`<option value="${element.subcatagorys_id}">${element.name.toUpperCase()}</option>`;
        }
        //console.log(html);
      }else{
        html=html+`<option value="No data found">No data found</option>`;
      }
      $('#subcatagory').html(html);
    }
  });
 //alert(id);
});

$('#cancel-summernote').on('click', function(event) {
    // Prevent the default behavior of the button
    event.preventDefault();

    // Go back to the previous page
    window.history.back();
  });

 $('.post-submit').on('click', function(event) {
    // Prevent the default behavior of the button
    event.preventDefault();
    var catagory=$('#catagory').val();
    var subcatagory=$('#subcatagory').val();
    var content=$('#summernote').val();
    var catagory_check=$.isNumeric(catagory);
    var subcatagory_check=$.isNumeric(subcatagory);
    //alert(catagory+"  "+subcatagory+"  "+content+"  "+catagory_check+"  "+subcatagory_check);
    if(catagory_check==false || content==""){
      $('.error-alert').html('').html('please select catagory or write something.').fadeIn();
      setTimeout(() => {
        $('.error-alert').fadeOut();
      }, 3000);
    }else if(subcatagory_check==false){
      $('.error-alert').html('').html('please select subcatagory !').fadeIn();
      setTimeout(() => {
        $('.error-alert').fadeOut();
      }, 3000);
    }else{
      $.ajax({
          url:"{{ route('all.submit') }}",
          method:"POST",
          data:{catagory:catagory,subcatagory:subcatagory,content:content,_token:"{{ csrf_token() }}"},
          success:function(responce){
            if(responce.success_status==true){
              console.log(responce.data);
              $('.success-alert').html('').html('Your question has been submitted successfully.').fadeIn();
              setTimeout(() => {
                $('.success-alert').fadeOut();
              }, 3000);
              setTimeout(() => {
                window.history.back();
              }, 500);
            }
            
          }
        });
    }
   



  });

});
</script>
@endsection