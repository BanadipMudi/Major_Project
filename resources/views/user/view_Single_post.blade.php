@extends('user.index')

@section('content-section')
<!-- -----------------------------------------------------------------------------------this is 2 ----------------------------------------------->
<div class="post p-2 rounded mt-3 mb-3 " style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">

<div class="part1 d-flex justify-content-between">
  <!-- //profile portion -->
  <div class="d-flex justify-content-start align-items-center p-3">
    <div class="profile2">
      <img src="https://api.dicebear.com/6.x/initials/svg?seed={{ $alldata_question->newuser->name}}&radius=50&size=32" alt="" style="height: 40px;width: 40px;border-radius: 50%;" class="border border-2 border-light">
    </div>
    <div class="name-tag ps-2 d-flex align-items-start justify-content-center flex-column">
        <h6 class="fw-bolder pb-0 mb-1 mt-0 text-dark align-items-center" style="font-size: 12px;">Posted by {{ $alldata_question->newuser->name}}
          <i class="fa-solid fa-circle pe-1 ps-1 text-success" style="font-size: 8px;""></i>{{ $alldata_question->created_at}}
        </h6>
      
        <h6 class="fw-bolder pb-0 mb-1 pt-0 mt-0  d-flex" style="font-size: 12px;">
          <a href="" class="tag d-flex pe-3"><span class="material-symbols-outlined" style="font-size: 14px;">local_offer</span> {{ $alldata_question->catagory_id}}</a>
          <a href="" class="tag d-flex"><span class="material-symbols-outlined" style="font-size: 14px;">local_offer</span> {{ $alldata_question->subcatagory_id}}</a>
        </h6>
    </div>
  </div>
    <span class="material-symbols-outlined pt-1 text-dark" style="cursor:pointer;">
      bookmark
      </span>
</div>
<div class="part2 p-3 border-top" style="overflow:auto;">
   <!-- questions portion -->
    <!-- <h5 class="fw-bolder text-dark h-100" > -->
    {!! $alldata_question->question!!}
    <!-- </h5> -->
    <!-- <span class="material-symbols-outlined pt-1 text-secondary" style="cursor:pointer;">
      bookmark
      </span> -->
  
</div>
<div class="part3 border-top">
<!-- expression portion -->
        <div class="d-flex justify-content-between p-2 align-items-center">
          <h6 class="pe-4 text-success border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;"><span class="material-symbols-outlined" >thumb_up</span>{{ $alldata_question->like}} </h5>
          <h6 class="pe-4 text-danger border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;"><span class="material-symbols-outlined" >thumb_down</span>{{ $alldata_question->dislike}} </h5>
          <h6 class="pe-4 text-secondary comment-button flex-center w-100" style="cursor:pointer;font-size: 12px;"><span class="material-symbols-outlined">forum</span>{{ $Total_numberOf_Answers}} </h5>
        </div>
</div>
  <!-- ------------------------------------------------------------answers portion -------------------------------->
  <div class="mt-3 border rounded p-3 extra-comment-class">
    <div class="border p-2 rounded">
         <h4 class="bg-info p-2 fw-bolder text-light rounded">Leave a comment</h4>
         <form id="CommentBox">
           <!-- @csrf action="{{route('all.submit')}}" method="POST" enctype="multipart/form-data" -->
             <textarea name="summernote" id="summernote" class="summernote" cols="30" rows="10" placeholder="write your comment."></textarea>
             <input type="hidden" name="question_id" value="{{ $alldata_question->id}}">
             <div class="mt-3 mb-2 d-flex justify-content-end">
               <input type="reset" value="Cancel" class="btn btn-danger ps-4 pe-4 me-2">
               <input type="submit" value="Add Comment" id="Add_Comment" class="ms-2 btn btn-success ps-4 pe-4">
             </div>
       </form>
    </div>
    
     <div class="comment-box-content">
      @if($answers->count())
               
              @foreach($answers as $answer)
               <div class="border-start border-info border-3 p-2 mt-2 d-flex">
                 <a href="/user/profile/{{ $answer->user_id }}"><img class="flex-shrink-0" src="https://api.dicebear.com/6.x/initials/svg?seed={{ $answer->user->name}}&radius=50&size=32" alt="" style="height: 40px;width: 40px;border-radius: 50%;"></a>
                 <div class="flex-grow-1 ms-3 ps-3 pt-0 comment">
                 <p class="text-uppercase fw-bold text-dark pt-2">{{ $answer->user->name}}<i class="fa-solid fa-circle ms-3 me-3 text-success" style="font-size: 10px;"></i>{{ $answer->created_at}}</p>
                 <p class="text-dark p-2 border-top" style="overflow: auto;font-size:16px;">
                   {!!$answer->answer !!}
                 </p>
                    <div class="d-flex justify-content-between p-2 align-items-center border-top found_like_dislike">
                              @php
                                    $jsonarray=$answer->records;
                                    $userid=session('id');
                                    if (is_null($jsonarray)) {
                                            $jsonarray = array(); 
                                    }
                                @endphp
                        <h6 data-like_id="{{ $answer->id }}_{{$userid}}_like" class="pe-4 like text-success border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
                              @if(array_key_exists($userid, $jsonarray))
                                  @if($jsonarray[$userid]=="like")
                                    <span class="material-symbols-outlined thumbs_up fw-bold" >thumb_up</span>
                                  @else
                                    <span class="material-symbols-outlined thumbs_up" >thumb_up</span>
                                  @endif
                              @else
                                    <span class="material-symbols-outlined thumbs_up" >thumb_up</span>
                              @endif
                        <!-- <span class="material-symbols-outlined" >thumb_up</span> -->
                              <span class="likecount" >{{ $answer->like}}</span>  
                        </h6>
                      <h6 data-dislike_id="{{ $answer->id }}_{{$userid}}_dislike" class="pe-4 dislike text-danger border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
                      <!-- <span class="material-symbols-outlined" >thumb_down</span> -->
                            @if(array_key_exists($userid, $jsonarray))
                                  @if($jsonarray[$userid]=="dislike")
                                      <span class="material-symbols-outlined thumbs_down fw-bold" >thumb_down</span>
                                  @else
                                    <span class="material-symbols-outlined thumbs_down" >thumb_down</span>
                                  @endif
                              @else
                                  <span class="material-symbols-outlined thumbs_down" >thumb_down</span>
                              @endif
                            <span class="dislikecount" >{{ $answer->dislike}}</span>
                      </h6>
                      <h6 data-answer_id="{{ $answer->id }}_{{ $userid }}" class="pe-4 text-warning comment-report flex-center w-100" style="cursor:pointer;font-size: 15px;"><i class="fa-regular fa-flag fs-4 text-warning me-2"></i>Report</h5>
                    </div>
                </div>
               </div>
              @endforeach
        @else
           <div class="border p-3 mt-3 d-flex justify-content-center align-items-center flex-column">
              <img style="height:200px;width:350px;" src="https://cdni.iconscout.com/illustration/premium/thumb/man-holding-magnifying-glass-doing-marketing-research-from-sites-2511649-2133727.png" alt="">
              <h4 class="text-primary text-center fx-bold mt-3">Sorry! No Results Found :</h4>
            </div>
        @endif
     </div>
</div>
<!-- ------------------------------------------------------------answers portion --------------------------- end --------->

</div>
<button type="button" class="btn btn-primary modal-open-button d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Report Answer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-3">
        <form id="report-form">
          <select class="form-select" required aria-label="Default select example" name="answer_report_option" id="answer_report_option">
            <option value="Why did you report this answer?">Why did you report this answer?</option>
            <option value="The answer contains inappropriate content">The answer contains inappropriate content</option>
            <option value="The answer is a duplicate of another answer already provided">The answer is a duplicate of another answer already provided</option>
            <option value="The answer is spam or contains advertising">The answer is spam or contains advertising</option>
            <option value="The answer violates the website's terms of service or community guidelines">The answer violates the website's terms of service or community guidelines</option>
          </select>
          <input type="hidden" name="reporting_user_id" value="" id="reporting_user_id">
          <input type="hidden" name="anser_id" value="" id="anser_id_set">
          <span class="text-danger select-report fw-bolder d-none" style="font-size: 12px;">please select Why did you report this answer?</span>
          <div class="form-floating mt-3">
            <textarea name="answer_report_extracomment" style="height: 100px" class="form-control" placeholder="Leave a comment here..." id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Comments</label>
          </div>
          <div class="mt-3 d-flex justify-content-center">
            <div>
                <input type="text" class="form-control w-100 bg-dark text-white fw-bold" name="captcha" id="captcha" disabled readonly>
            </div>
            <div>
                <input type="text" required class="form-control ms-1 w-100" id="captcha-value" placeholder="Fill the Captcha" name="captcha-value" >
            </div>
           
          </div>
          <span class="text-danger captcha-warning ms-4 fw-bolder d-none" style="font-size: 12px;">please fill the captcha.</span>
          <hr>
          <div class="d-flex justify-content-center align-items-center mt-3">
          <button type="button" class="btn btn-danger ms-1" id="check">Verify & Report</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="status-massage rounded bg-self text-light w-50 p-2 text-center fs-4" style="display:none;">

 </div>
@endsection

@section('content-scripts')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<link rel="stylesheet" href="{{asset('css/view_single_page.css')}}">
  <script>
  $('.summernote').summernote({
        placeholder: '  Write your comment here',
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
                    //console.log(urls);
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
                   // console.log(response);
                }
            });
        }
    }
      });

      $('#Add_Comment').click(function(event){
        event.preventDefault();
        var comment_sent=$('#CommentBox').serializeArray();
       // console.log( $('#CommentBox').serializeArray());
        $('#summernote').summernote('reset');
        $.ajax({
          url:"{{ route('question.answer') }}",
          method:"POST",
          data:{comment_sent:comment_sent,_token: "{{ csrf_token() }}"},
          success:function(responce){
                            $('.status-massage').html('');
                            $('.status-massage').html(`<i class="fa-regular fa-circle-check pe-2"></i>`+responce.status).show();
                            setTimeout(() => {
                              $('.status-massage').fadeOut();
                            }, 3000);
          }
        });
      });
      $('.note-editable').addClass('bg-light');
  </script>
@endsection

@section('ajaxfor')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
<script>
  $(document).ready(function(){
    // this is for like section
    $(document).on('click','.like',function(){
      let like=$(this).data('like_id');
      //let action="like";
      like_dislike(like,this);
      //alert(like);
    });
    // this is for dislike section
    $(document).on('click','.dislike',function(){
      let dislike=$(this).data('dislike_id');
      //let action="dislike";
      like_dislike(dislike,this);
      //alert(dislike);
    });
    // ------function define---
    // function like_dislike(number,action,this_class){
    //   number=number.split('_');
    //   var like_or_dis_no=number[0];
    //   var answer_id=number[1];
    //   $.ajax({
    //     url:"{{ route('like.dislike') }}",
    //     method:"POST",
    //     data:{like_or_dis_no:like_or_dis_no,answer_id:answer_id,action:action,_token:"{{ csrf_token() }}"},
    //     success:function(responce){
    //     //  console.log(responce.status);
    //       $(this_class).find('.countlikedislikeno').text(responce.status);
    //     }

    //   });
    // }
    function like_dislike(value,target_element){
      value=value.split('_');
      let answer_id=value[0];
      let user_id=value[1];
      let action=value[2];
      $.ajax({
        url:"{{ route('answer.likedislike') }}",
        method:"POST",
        data:{answer_id:answer_id,user_id:user_id,action:action,_token:"{{ csrf_token() }}"},
        success:function(responce){
          $(target_element).closest('.found_like_dislike').find('.likecount').text(responce.like);
            $(target_element).closest('.found_like_dislike').find('.dislikecount').text(responce.dislike);
            if(responce.user_id==user_id){
              // if(responce.action == "like"){
              //   $(target_element).find('.thumbs_up').toggleClass('fw-bold');
              //   $(target_element).find('.thumbs_down').toggleClass('fw-bold');
              // }else{
              //   $(target_element).find('.thumbs_up').toggleClass('fw-bold');
              //   $(target_element).find('.thumbs_down').toggleClass('fw-bold');
              // }
              if($(target_element).hasClass('like')){
                  if($(target_element).find('span').hasClass('fw-bold') && responce.action=="like"){
                    $(target_element).find('span').toggleClass('fw-bold');
                   // alert(1);
                  }else{
                    $(target_element).find('span').addClass('fw-bold');
                   $(target_element).closest('.found_like_dislike').find('.dislike span').removeClass('fw-bold');
                   // alert(2);
                  }
              }else{
                if($(target_element).find('span').hasClass('fw-bold') && responce.action=="dislike"){
                    $(target_element).find('span').toggleClass('fw-bold');
                     //alert(3);
                  }else{
                    $(target_element).find('span').addClass('fw-bold');
                    $(target_element).closest('.found_like_dislike').find('.like span').removeClass('fw-bold');
                    // alert(4);
                  }
              }
            }
            console.log(responce.status+" user id "+responce.user_id+" action "+responce.action+" like no : "+responce.like);
        
            //console.log("anser id: "+responce.answer_id+"user id: "+responce.user_id+"action: "+responce.action);
        }
      });
    }
    // this is for comment section
    $(document).on('click','.comment-report',function(){
      var answer_id=$(this).data('answer_id').split('_');
      var reporting_user_id=answer_id[1]; // this data is taken from session
      answer_id=answer_id[0];
      $('.modal-open-button').trigger('click');
        $('#anser_id_set').val(answer_id);
        $('#reporting_user_id').val(reporting_user_id);
      //alert(answer_id);

      var words = ["jackfruit","oRanGe","jUicE","apple", "banana", "orange", "grape", "peach"];
    var randomWord = words[Math.floor(Math.random() * words.length)]; // here we select randome word
    $('#captcha').val(randomWord); //fill up with randome word
    
    $('#check').on('click',function(event){ // call the function when click on --id check
          var captcha=$('#captcha').val();
          var captcha_value=$('#captcha-value').val();
          if(captcha===captcha_value){ // here we match both value
                  event.preventDefault();
                  $('.captcha-warning').addClass('d-none'); // if captcha not fill up 
                  if($('#answer-report-option').val()!='Why did you report this answer?'){ // if option selected 
                        //console.log($('#report-form').serializeArray());
                        var report_data=$('#report-form').serializeArray();
                        $.ajax({
                          url:"{{ route('user.report') }}",
                          method:"POST",
                          data:{report:report_data,_token: "{{ csrf_token() }}"},
                          success:function(responce){
                            $('.status-massage').html('');
                            $('.status-massage').html(`<i class="fa-regular fa-circle-check pe-2"></i>`+responce.status).show();
                            setTimeout(() => {
                              $('.status-massage').fadeOut();
                            }, 3000);
                            //console.log(responce.status);
                          }
                        });
                        $('#report-form').trigger('reset'); //after that reset all the values of the form
                        $('.modal-header .btn-close').trigger('click'); // call the .btn-close and trigger click event from outside
                  }else{  // if option not selected 
                        $('.select-report').removeClass('d-none'); 
                  }
            
          }else{ // if captch not matched 
                    randomWord = words[Math.floor(Math.random() * words.length)];
                    $('#captcha').val(randomWord);
                    $('.captcha-warning').removeClass('d-none');
              }
    });


    });
  });
</script>
@endsection