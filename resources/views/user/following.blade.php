@extends('user.index')

@section('content-section')
<div id="" class="border">
        <p class="p-2 fw-bold fs-4 text-secondary mb-1">Following People.</p>
        <hr class="mt-0 mb-1 ms-1 me-1">
        <!-- Following content here -->
            <div id="following">
              @if($followings->count() > 0)
                @foreach($followings as $following)
                  @php
                      $user_id=explode("_",$following->user_id);
                      $following_id=$following->following_id;
                      $array=explode("_",$following_id);
                      $following_id=$array[2];
                      
                  @endphp
                <div class="row follow-people border rounded m-2 p-2 bg-self" data-id="{{ $following_id }}">
                    <div class="col-md-8 d-flex">
                      <img class="border border-light" src="https://api.dicebear.com/6.x/initials/svg?seed={{ $array[0] }}&radius=50&size=32&backgroundColor=f73b07" alt="" style="height:80px;width:80px;border-radius:50%;">
                      <div class="d-flex align-items-start flex-column p-2 justify-content-center">
                        <p class="mt-0 mb-0 fw-bold text-light">{{ strtoupper($array[0]) }}</p>
                        <P class="mt-0 mb-0 fw-bold text-light">{{ $array[1] }} Followers</P>
                      </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                      <button data-remove_id="{{ $following_id }}_{{ strtoupper($array[0]) }}_{{ $user_id[2] }}" class="btn btn-warning rounded-pill unfollow text-dark fw-bold">Unfollow</button>
                    </div>
                  </div>
              @endforeach

              @else
              <div class="d-flex justify-content-center align-items-center flex-column">
                <img  class="img-fluid mt-5 mb-3" src="https://img.freepik.com/free-vector/account-concept-illustration_114360-409.jpg?w=360" alt="">
                  <p class="fw-bold fs-2 text-self">You don't follow anyone !(</p>                            
              </div>
              @endif
            </div>
          
        
      </div>


      <button type="button" class="btn btn-primary alert-bookmark d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Launch demo modal
    </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content for-unfollowing p-4">
    
      <div class="modal-body mt-4 mb-4 p-4 text-dark fs-5 fw-bold text-center">
        
      
      
      </div>
      
      <div class="modal-footer border border-0 d-flex justify-content-center">
        <button type="button" class="btn fw-bold delete-off btn-light col-5 border border-dark" data-bs-dismiss="modal">Cancel</button>
        <input type="hidden" name="" id="hidden_field">
        <button type="button" class="btn fw-bold unfollow-ask btn-danger col-5">Unfollow</button>
      </div>
    
    </div>
  </div>
</div>
@endsection

@section('ajaxfor')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('css\view_single_page.css') }}">
<script>
$(document).ready(function(){

  $(document).on('click','.unfollow',function(){
    var array=$(this).data('remove_id').split("_");
    var target_id=array[0];
    var self_id=array[2];
    var name=array[1];
   $('#hidden_field').val(target_id+"_"+self_id);
   // alert(target_id+"  "+self_id);
   $('.modal-body').html(`<p class="text-primary mb-5">Are you sure you want to Unfollow ${name}? </p>`);
   $('.alert-bookmark').trigger('click');
  });

  $('.unfollow-ask').click(function(){
    target_id=$('#hidden_field').val().split('_');
    //console.log(target_id);
    targetid=target_id[0];
    selfid=target_id[1];
    // console.log(selfid);
    // alert("target id= "+targetid+" self id: " + selfid);
   
    $.ajax({
      url:"{{ route('delete.following') }}",
      method:"POST",
      data:{targetid:targetid,selfid:selfid,_token:"{{ csrf_token() }}"},
      success:function(responce){
        if(responce.status==true)
        {
          $('.row[data-id="' + targetid + '"]').remove();
          $('.delete-off').trigger('click');
        }
        
      }
    });
  });
});
</script>

@endsection