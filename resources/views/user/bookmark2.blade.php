@extends('user.index')

@section('content-section')
@if($questions->count() > 0)
    @foreach($questions as $question) 
                  <!-- -----------------------------------------------------------------------------------this is 1 ----------------------------------------------->
       <div class="post p-2 rounded mt-3 mb-3" data-deleteunique_id="{{ $question->id }}" style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">

                        <div class="part1 d-flex justify-content-between">
                                @php
                                    $jsonarray=$question->records;
                                    $userid=session('id');
                                    
    
                                    if (is_null($jsonarray)) {
                                            $jsonarray = array(); 
                                    }

                                @endphp
                                 <!-- here i don't assign is null $jsonarray then it gives error that expected array null give for that reason i check if null then assign a blank array for escaping the error -->
                          <!-- //profile portion -->
                          <div class="d-flex justify-content-start align-items-center p-3">
                            <div class="profile2">
                              <a href="/user/profile/{{ $question->newuser->id }}"><img src="https://api.dicebear.com/6.x/initials/svg?seed={{$question->newuser->name}}&radius=50&size=32" alt="" style="height: 40px;width: 40px;border-radius: 50%;"></a>
                            </div>
                            <div class="name-tag ps-2 d-flex align-items-start justify-content-center flex-column">
                                <h6 class="fw-bolder pb-0 mb-1 mt-0 text-secondary align-items-center" style="font-size: 12px;">Posted by {{$question->newuser->name}}
                                  <i class="fa-solid fa-circle pe-1 ps-1 text-success" style="font-size: 8px;""></i>{{$question->created_at}}
                                </h6>
                              
                                <h6 class="fw-bolder pb-0 mb-1 pt-0 mt-0  d-flex" style="font-size: 12px;">
                                  <a href="/user/catagory/{{ $question->catagory_id }}" class="tag d-flex pe-3"><span class="material-symbols-outlined" style="font-size: 14px;">local_offer</span> {{$question->catagory_id}}</a>
                                  <a href="/user/subcatagory/{{ $question->subcatagory_id }}" class="tag d-flex"><span class="material-symbols-outlined" style="font-size: 14px;">local_offer</span> {{$question->subcatagory_id}}</a>
                                  
                                </h6>
                            </div>
                          </div>
                            <span data-bookmark_id="{{ $question->id }}_{{ $userid }}" class="material-symbols-outlined bookmark pt-1 text-warning fw-bolder" style="cursor:pointer;">
                              bookmark
                            </span>
                        </div>
                      <div class="part2 p-3 border-top h-100" style="overflow: auto;">
                        <!-- questions portion -->
                          {!!$question->question!!}
                          <!-- <span class="material-symbols-outlined pt-1 text-secondary" style="cursor:pointer;">
                            bookmark
                            </span> -->
                        
                    </div>
                    <div class="part3 border-top">
                    <!-- expression portion -->
                            <div class="d-flex found_like_dislike justify-content-between p-2 align-items-center">
                              <h6 data-like_id="{{ $question->id}}_{{ $userid }}_like" class="pe-4 like text-success border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
                              
                               
                              @if(array_key_exists($userid, $jsonarray))
                                  @if($jsonarray[$userid]=="like")
                                    <span class="material-symbols-outlined thumbs_up fw-bold" >thumb_up</span>
                                  @else
                                    <span class="material-symbols-outlined thumbs_up" >thumb_up</span>
                                  @endif
                              @else
                                    <span class="material-symbols-outlined thumbs_up" >thumb_up</span>
                              @endif
                                <span class="likecount" >{{ $question->like}}</span>
                               </h6>
                              <h6 data-dislike_id="{{ $question->id}}_{{ $userid }}_dislike" class="pe-4 dislike text-danger border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
                              @if(array_key_exists($userid, $jsonarray))
                                  @if($jsonarray[$userid]=="dislike")
                                      <span class="material-symbols-outlined thumbs_down fw-bold" >thumb_down</span>
                                  @else
                                    <span class="material-symbols-outlined thumbs_down" >thumb_down</span>
                                  @endif
                              @else
                                  <span class="material-symbols-outlined thumbs_down" >thumb_down</span>
                              @endif
                              
                                <span class="dislikecount" >{{ $question->dislike}}</span>
                              </h6>
                              <a href="{{ route('user.post',['id'=>$question->id]) }}" class="pe-4 text-secondary comment-button flex-center w-100" style="cursor:pointer;font-size: 12px;text-decoration:none;"><span class="material-symbols-outlined">forum</span>{{ count($question->answers)}} </a>
                            </div>
                    </div>
      </div>
    @endforeach
    @else
    
   <div class="d-flex justify-content-center align-items-center flex-column">
    <img  class="img-fluid" src="https://cdni.iconscout.com/illustration/premium/thumb/man-holding-magnifying-glass-doing-marketing-research-from-sites-2511649-2133727.png" alt="">
      <p class="fw-bold fs-2 text-self">You Don't Save Any Questions !(</p>                            
  </div>
    @endif
    
  <div class="status-massage rounded text-light w-50 p-2 text-center fs-4" style="display:none;">

  </div>
   <!-- ---------------- warning modal for removing post from bookmark------ -->
   <button type="button" class="btn btn-primary alert-bookmark d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Launch demo modal
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      
      <div class="modal-body mt-2 mb-1 p-2 text-dark fs-5 fw-bold text-center">
        <p><i class="fa-solid fa-circle-exclamation fs-2  text-danger"></i> </p>
      Are you sure you want to remove this post from your saved gallery? 
        <p class="fw-lighter text-start fs-6 pt-3"> This will remove this question permanently. you cannot undo this action.</p>
      </div>
      
      <div class="modal-footer border border-0 d-flex justify-content-center">
        <button type="button" class="btn fw-bold delete-off btn-light col-5 border border-dark" data-bs-dismiss="modal">Cancel</button>
        <input type="hidden" name="" id="hidden_field">
        <button type="button" class="btn fw-bold delete-accept btn-danger col-5">Delete</button>
      </div>

      <div class="modal-body2 d-none mt-3 mb-1 p-2 d-flex justify-content-center align-items-center flex-column">
                    <i class="fa-regular fa-circle-check text-success mb-2" style="font-size: 80px;"></i>
                     <p class="text-dark fw-bold fs-3 mt-3">Successfully Removed.</p>
      </div>
    
    </div>
  </div>
</div>
@endsection

@section('ajaxfor')
<link rel="stylesheet" href="{{ asset('css/status_message.css') }}">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
<script>
  $(document).ready(function(){
    $(document).on('click','.bookmark',function(){
      let bookmark_id=$(this).data('bookmark_id');
      $('.modal-body').removeClass('d-none');
            $('.modal-footer').removeClass('d-none');
            $('.modal-body2').addClass('d-none');
      $('.alert-bookmark').trigger('click');
      $('#hidden_field').val(bookmark_id);
      //alert(question_id+user_id);
    //   $.ajax({
    //     url:"{{ route('user.postbookmark') }}",
    //     method:"POST",
    //     data:{question_id:question_id,user_id:user_id,_token:"{{ csrf_token() }}"},
    //     success:function(responce){
    //                       $('.status-massage').html('');
    //                         if(responce.flag==false){
    //                           $('.status-massage').removeClass('bg-self').addClass('bg-danger');
    //                           $('.status-massage').html(`<i class="fa-solid fa-xmark pe-2"></i>`+responce.status).show();
    //                         }else{
    //                           $('.status-massage').addClass('bg-self').removeClass('bg-danger');
    //                           $('.status-massage').html(`<i class="fa-regular fa-circle-check pe-2"></i>`+responce.status).show();
    //                         }
    //                         setTimeout(() => {
    //                           $('.status-massage').fadeOut();
    //                         }, 3000);
    //       console.log(responce);
    //     }
    //   });
    });
    
      $('.delete-accept').click(function(){
        bookmark_id=$('#hidden_field').val();
        bookmark_id=bookmark_id.split('_');
        let question_id=bookmark_id[0];
        let user_id=bookmark_id[1];
        //console.log(question_id+user_id);
        $.ajax({
          url:"{{ route('bookmark.delete') }}",
          method:"POST",
          data:{question_id:question_id,user_id:user_id,_token:"{{ csrf_token() }}"},
          success:function(responce){
            if(responce.success_status==true){
              $('.modal-body').addClass('d-none');
              $('.modal-footer').addClass('d-none');
              $('.modal-body2').removeClass('d-none');
              setTimeout(() => {
                $('.delete-off').trigger('click');
                $('.post[data-deleteunique_id="' + question_id + '"]').remove();
                //window.location.href = "{{ route('user.bookmark') }}";
              }, 700);
            }
            
            // console.log(responce);
          }
        });
        
      });
    // this is for like section
    $(document).on('click','.like',function(){
      let like=$(this).data('like_id');
      like_dislike(like,this);
      //alert(like);
    });

    // this is for dislike 
    $(document).on('click','.dislike',function(){
      let dislike=$(this).data('dislike_id');
      like_dislike(dislike,this);
      //alert(dislike);
    });

    function like_dislike(value,target_element){
      value=value.split('_');
      let question_id=value[0];
      let user_id=value[1];
      let action=value[2];
      $.ajax({
        url:"{{ route('question.likedislike') }}",
        method:"POST",
        data:{question_id:question_id,user_id:user_id,action:action,_token:"{{ csrf_token() }}"},
        success:function(responce){
            $(target_element).closest('.found_like_dislike').find('.likecount').text(responce.like);
            $(target_element).closest('.found_like_dislike').find('.dislikecount').text(responce.dislike);
            if(responce.user_id==user_id){
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
        }
      });
    }
  });
  </script>
  @endsection