@extends('user.index')

@section('content-section')
  @if($questions->count() > 0)
    @foreach($questions as $question) 
                  <!-- -----------------------------------------------------------------------------------this is 1 ----------------------------------------------->
       <div class="post p-2 rounded mt-3 mb-3" style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">

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
                            <span data-bookmark_id="{{ $question->id }}_{{ $userid }}" class="material-symbols-outlined bookmark pt-1 text-secondary" style="cursor:pointer;">
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
            <div class="p-3 mt-3 d-flex justify-content-center align-items-center flex-column">
              <img style="height:400px;width:400px;" src="https://img.freepik.com/free-vector/flat-people-asking-questions_23-2148929673.jpg" alt="">
              <h4 class="text-primary text-center fx-bold mt-3">Sorry! No Questions Found :(</h4>
            </div>
    @endif
  <div class="status-massage rounded text-light w-50 p-2 text-center fs-4" style="display:none;">

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
      bookmark_id=bookmark_id.split('_');
      let question_id=bookmark_id[0];
      let user_id=bookmark_id[1];
      //alert(question_id+user_id);
      $.ajax({
        url:"{{ route('user.postbookmark') }}",
        method:"POST",
        data:{question_id:question_id,user_id:user_id,_token:"{{ csrf_token() }}"},
        success:function(responce){
                          $('.status-massage').html('');
                            if(responce.flag==false){
                              $('.status-massage').removeClass('bg-self').addClass('bg-danger');
                              $('.status-massage').html(`<i class="fa-solid fa-xmark pe-2"></i>`+responce.status).show();
                            }else{
                              $('.status-massage').addClass('bg-self').removeClass('bg-danger');
                              $('.status-massage').html(`<i class="fa-regular fa-circle-check pe-2"></i>`+responce.status).show();
                            }
                            setTimeout(() => {
                              $('.status-massage').fadeOut();
                            }, 3000);
          console.log(responce);
        }
      });
    });

    // this is for like section
    $(document).on('click','.like',function(){
      let like=$(this).data('like_id');
      like_dislike(like,this);
      //let action="like";
      //like_dislike(like,action,this);
      //alert(like);
    });

    // this is for dislike 
    $(document).on('click','.dislike',function(){
      let dislike=$(this).data('dislike_id');
      like_dislike(dislike,this);
      //let action="like";
      //like_dislike(like,action,this);
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
        }
      });
    }
  });
  </script>
  @endsection