@extends('user.index')

@section('content-section')
<div class="p-2">
                <div class="your-details row p-2 border m-0 mb-2 rounded bg-self-light">
                    <!-- <div class="col-lg-4 d-flex justify-content-end p-2">
                        <img class="image-responcive" src="https://firebasestorage.googleapis.com/v0/b/major-project-bca-79b7f.appspot.com/o/subhnakar2.jpg?alt=media&token=bf3471a6-5e5c-4fd7-8ed8-7d7a743d0d8c" alt="" style="height:120px;width:120px;border-radius: 50%;">
                    </div> -->
                    <div class="col-lg-12 d-flex with-img-box align-items-center justify-content-start ">
                        <img class="profile-responcive border border-light" src="https://api.dicebear.com/6.x/initials/svg?seed={{ $user->name }}&radius=50&size=32" alt="" >
                        
                        <div class="ps-3">
                            <h5 class="text-dark mb-0 mt-1 details-text">{{ $user->name }}</h5>
                            <h6 class="text-dark mb-0 mt-1 details-text">{{ $user->email }}</h6>
                            <h6 class="text-dark mb-0 mt-1  details-text">{{ $followers_number }} Followers<i class="fa-solid fa-circle ps-2 pe-2 text-success" style="font-size: 10px;"></i>{{ $followings_number }} Following</h6>
                            <a href="" class="fs-5 me-2 uer-profile-link"><i class="fa-brands fa-facebook"></i></a>
                            <a href="" class="fs-5 me-2 uer-profile-link" style="color: rgb(76, 192, 255);"><i class="fa-brands fa-twitter"></i></a>
                            <a href="" class="fs-5 me-2 uer-profile-link" style="color: rgb(17, 62, 116);"><i class="fa-brands fa-linkedin"></i></a>
                            
                        </div>
                    </div>
                    
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active profile-tab" data-toggle="tab" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link followers" data-toggle="tab" href="#followers">Followers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link following" data-toggle="tab" href="#following">Following</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link question" data-toggle="tab" href="#questions">Questions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link answer" data-toggle="tab" href="#answers">Answers</a>
                    </li>
                  </ul>
                
                  <div class="tab-content">
                    <div id="profile" class="tab-pane active tab_content_common_class bg-light">
                      <!-- Profile content here -->
                      <div class="d-flex flex-column">
                        <p class="mt-0 profile-info-education mb-1" style="cursor:pointer;"><i class="fa-solid fa-graduation-cap pe-2 text-dark"></i> update education credential.</p>
                        <p class="mt-0 profile-info-employment mb-1" style="cursor:pointer;"><i class="fa-solid fa-building-columns pe-2 text-dark"></i> update employment credential.</p>
                        <p class="mt-0 profile-info-location mb-1" style="cursor:pointer;"><i class="fa-solid fa-location-dot pe-2 text-dark"></i> update location credential.</p>
                        <p class="mt-0 profile-info-socialmedia mb-1" style="cursor:pointer;"><i class="fa-solid fa-hashtag pe-2 text-dark"></i> update social media account.</p>
                        
                        <!-- <p><i class="fa-solid fa-check pe-2" style="color:green"></i> joined 17 Aug 2023.</p> -->
                      </div>
                      <hr class="mt-1 mb-1">
                      @if(!is_null($user_info->education_credential))
                      <div class="education-degree border">
                          <p class="p-2 fw-bold fs-4 text-primary mb-1"><i class="fa-solid fa-graduation-cap pe-1 text-primary"></i> Education Credential.</p>
                           <hr class="mt-0 mb-1 ms-1 me-1">
                           @foreach($user_info->education_credential as $key => $value)
                           @if(!is_null($value))
                            <div class="p-2">
                            <label for="{{ $key }}" class="fw-bold">{{ $key }}</label>
                            <input class="form-control" readonly type="text" name="{{ $key }}" id="{{ $key }}" value="{{ $value }}">
                           </div>
                          @endif
                          @endforeach
                      </div>
                      @endif

                      @if(!is_null($user_info->employment_credential))
                      <div class="employment border">
                          <p class="p-2 fw-bold fs-4 text-success mb-1"><i class="fa-solid fa-building-columns pe-1 text-success"></i> Employment Credential.</p>
                           <hr class="mt-0 mb-1 ms-1 me-1">
                           @foreach($user_info->employment_credential as $key => $value)
                           @if(!is_null($value))
                                <div class="p-2">
                                <label for="{{ $key }}" class="fw-bold">{{ $key }}</label>
                                <input class="form-control" readonly type="text" name="{{ $key }}" id="{{ $key }}" value="{{ $value }}">
                                </div>
                            @endif
                          @endforeach
                      </div>
                      @endif
                      
                      @if(!is_null($user_info->location_credential))
                      <div class="location border">
                          <p class="p-2 fw-bold fs-4 text-info mb-1"><i class="fa-solid fa-location-dot pe-1 text-info"></i> Location Credential.</p>
                           <hr class="mt-0 mb-1 ms-1 me-1">
                           @foreach($user_info->location_credential as $key => $value)
                           @if(!is_null($value))
                            <div class="p-2">
                            <label for="{{ $key }}" class="fw-bold">{{ $key }}</label>
                            <input class="form-control" readonly type="text" name="{{ $key }}" id="{{ $key }}" value="{{ $value }}">
                           </div>
                           @endif
                          @endforeach
                      </div>
                      @endif
                   
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary d-none profile-update-open" data-bs-toggle="modal" data-bs-target="#profile-update">
              Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="profile-update" tabindex="-1" aria-labelledby="profile-update-label" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-4 text-danger" id="profile-update-label">Update Profile</h1>
                    <button type="button" class="btn-close profile-update-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" id="profile-update-body">
                                  
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary profile-update-close" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update Profile</button>
                  </div> -->
                </div>
              </div>
            </div>

    </div>
<!--------------------------------------------------------- follower --------------------------------start----------------------- -->
                      <div id="followers" class="tab-pane tab_content_common_class bg-light">
                        
                        <!-- Followers content here -->
                        <p class="p-2 fw-bold fs-4 text-secondary mb-1">Followers List.</p>
                        <hr class="mt-0 mb-1 ms-1 me-1">
                              @php 
                                     
                                     $user_id=$user->id;        
                                     $followers=App\Models\Following::where('following_id',$user_id)->get();
                                     $following_list=App\Models\Following::where('user_id',$user_id)->pluck('following_id');
                                     $following_list=$following_list->toArray();
                                     
                               @endphp
                               <!-- echo "<pre>";
                                     print_r($followers->toArray());
                                     print_r($following_list); -->
                            @if($followers->count() > 0)
                                 @foreach($followers as $follower)
                                      @php
                                          $follower_id=$follower->user_id;
                                          $follower_copy_id=$follower_id;
                                          $array2=explode("_",$follower_id);
                                          $follower_id=$array2[2];
                                      @endphp
                              <div class="row follow-people border rounded m-2 p-2 bg-self" data-follower_id="{{ $follower_id }}">
                                  <div class="col-md-8 d-flex">
                                    <img class="border border-light" src="https://api.dicebear.com/6.x/initials/svg?seed={{ $array2[0] }}&radius=50&size=32&backgroundColor=f73b07" alt="" style="height:80px;width:80px;border-radius:50%;">
                                    <div class="d-flex align-items-start flex-column p-2 justify-content-center">
                                      <p class="mt-0 mb-0 fw-bold text-light">{{ strtoupper($array2[0]) }}</p>
                                      <P class="mt-0 mb-0 fw-bold text-light">{{ $array2[1] }} Followers</P>
                                    </div>
                                  </div>

                                  @if(!in_array($follower_copy_id,$following_list))
                                      <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <button data-follow_back="{{ $follower_id }}_{{ strtoupper($array2[0]) }}" class="btn btn-light rounded-pill follow-back text-dark fw-bold">Follow Back</button>
                                      </div>
                                  @endif
                                 
                                </div>
                            @endforeach

                            @else
                            <div class="d-flex justify-content-center align-items-center flex-column">
                              <img  class="img-fluid mt-2 mb-2" src="https://img.freepik.com/free-vector/account-concept-illustration_114360-409.jpg?w=360" alt="">
                                <p class="fw-bold fs-2 text-self">You don't have any folllowers!(</p>                            
                            </div>
                            @endif

                      
                      
                      </div>
<!--------------------------------------------------------- follower --------------------------------end----------------------- -->

<!--------------------------------------------------------- following --------------------------------start----------------------- -->
                      <div id="following" class="tab-pane tab_content_common_class bg-light">
                       
                        
                      </div>

<!-------------------------------------------------------------------- following -------------------end-------------------- -->

<!-- --------------------question content---------------------start----------------- -->
    <div id="questions" class="tab-pane tab_content_common_class bg-light">
                        <p class="p-2 fw-bold fs-4 text-secondary mb-1">Questions List.</p>
                        <hr class="mt-0 mb-1 ms-1 me-1">
                        @php
                            $userdetails=App\Models\Newuser::find($user_id);
                            if($userdetails!=null){
                              $questions = $userdetails->Question()->where('flag','=',1)->with('catagory','subcatagory','Newuser','answers')->get();
                            }else{
                              echo "User not found";
                            }
                        @endphp
          @if($questions->count() > 0)
            @foreach($questions as $question) 
                  <!-- -----------------------------------------------------------------------------------this is 1 ----------------------------------------------->
              <div class="post p-2 rounded mt-3 mb-3" style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">
                        <div class="part1 d-flex justify-content-between">
                                @php
                                    $jsonarray=$question->records;
                                    $userid=$user_id;
                                    
    
                                    if (is_null($jsonarray)) {
                                            $jsonarray = array(); 
                                    }

                                @endphp
                                 <!-- here i don't assign is null $jsonarray then it gives error that expected array null give for that reason i check if null then assign a blank array for escaping the error -->
                          <!-- //profile portion -->
                          <div class="d-flex justify-content-start align-items-center p-3">
                            <div class="profile2">
                              <img src="https://api.dicebear.com/6.x/initials/svg?seed={{$question->newuser->name}}&radius=50&size=32" alt="" style="height: 40px;width: 40px;border-radius: 50%;">
                            </div>
                            <div class="name-tag ps-2 d-flex align-items-start justify-content-center flex-column">
                                <h6 class="fw-bolder pb-0 mb-1 mt-0 text-secondary align-items-center" style="font-size: 12px;">Posted by {{$question->newuser->name}}
                                  <i class="fa-solid fa-circle pe-1 ps-1 text-success" style="font-size: 8px;""></i>{{$question->created_at}}
                                </h6>
                              
                                <h6 class="fw-bolder pb-0 mb-1 pt-0 mt-0  d-flex" style="font-size: 12px;">
                                  <a href="" class="tag d-flex pe-3"><span class="material-symbols-outlined" style="font-size: 14px;">local_offer</span> {{$question->catagory_id}}</a>
                                  <a href="" class="tag d-flex"><span class="material-symbols-outlined" style="font-size: 14px;">local_offer</span> {{$question->subcatagory_id}}</a>
                                  
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
                              <h6 data-like_id="{{ $question->id}}_{{3}}_like" class="pe-4 like text-success border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
                              
                               
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
                              <h6 data-dislike_id="{{ $question->id}}_{{3}}_dislike" class="pe-4 dislike text-danger border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
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
              <img style="height:300px;width:300px;" src="https://img.freepik.com/free-vector/flat-people-asking-questions_23-2148929673.jpg" alt="">
              <h4 class="text-primary text-center fx-bold mt-3">Sorry! No Questions Found :(</h4>
            </div>
        @endif
          <div class="status-massage rounded text-light w-50 p-2 text-center fs-4" style="display:none;">

          </div>
      </div>

<!-- --------------------question content---------------------end----------------- -->

      <div id="answers" class="tab-pane tab_content_common_class bg-light">
        <!-- //$answers = Answer::where('user_id', $user_id)->with('question.Newuser')->get();
        // this will fine but there we get all the information of the user but we need only name -->
              @php
                $user_id=$user_id;
        
                $answers=App\Models\Answer::where('user_id',$user_id)->where('flag','=',1)->orderBy('id', 'desc')->
                with(['question.Newuser' => function ($query) {
                $query->select('u_id', 'user_name'); // select only the id and name columns from the Newuser table
                }])->get();
              @endphp
                  
                        <p class="p-2 fw-bold fs-4 text-secondary mb-1">Your Answers.</p>
                        <hr class="mt-0 mb-1 ms-1 me-1">
                        <!-- Answers content here -->
                        @if($answers->count() > 0)
@foreach($answers as $answer)
<div class="post p-2 rounded mt-3 mb-3" data-deleteanswer_id="{{ $answer->id }}" style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">
       <!--------------------------------- first portion of this card ------------------name,date,tag,question,name of user2------------------------------------------------->
       <div class="row ps-2 pe-2">
        <div class="col-lg-12 d-flex justify-content-start align-items-center">
          <!-- <div class="profile2">
            <img src="https://artriva.com/media/k2/items/cache/c889234799e865bbe90cee71f6cd2e53_XL.jpg" alt="" style="height: 50px;width: 50px;border-radius: 50%;">
          </div> -->
          <div class="name-tag ps-2">
              <h6 class="fw-bolder pb-0 mb-0 text-dark align-items-center" style="font-size: 12px;">
                 <a href="" class="text-secondary">you</a> 
                    commented on 
                    <div class="d-inline-block pt-2" style="max-width: 200px;height:25px;overflow-y: hidden;overflow-x: hidden;">
                    <a href="{{ route('user.post',['id'=>$answer->question->id]) }}" class="text-secondary">
                      
                          <!-- this question -->
                          {{  strip_tags($answer->question->question) }}
                    </a>
                    </div>
                <i class="fa-solid fa-circle pe-1 ps-1 text-success fw-bolder" style="font-size: 8px;""></i>
                  {{ $answer->created_at }}
                <i class="fa-solid fa-circle pe-1 ps-1 text-warning fw-bolder" style="font-size: 8px;""></i>
                  posted by 
                <a href="" class="text-secondary">{{ $answer->question->newuser->name }}</a>
              </h6>
            
              <h6 class="fw-bolder pb-0 mb-0 pt-1 d-flex" style="font-size: 12px;">
                <a href="" class="tag d-flex align-items-center pe-3 bg-primary text-light p-2 rounded-pill me-3"><span class="material-symbols-outlined pe-1" style="font-size: 12px;">local_offer</span> {{ $answer->question->catagory_id }}</a>
                <a href="" class="tag d-flex pe-3 align-items-center bg-success text-light p-2 rounded-pill"><span class="material-symbols-outlined pe-1" style="font-size: 12px;">local_offer</span> {{ $answer->question->subcatagory_id }}</a>
              </h6>
          </div>
        </div>

        
      </div>
      <hr class="mt-3 mb-3 text-primary">
      <!--------------------------------- first portion of this card ------------------------------------ end ------------------------------->
       
        <!-- ------------------------------------------------------------answers portion -------------------------------->
        <div style="overflow: auto;"> 
             {!! $answer->answer !!}
        </div>
        <hr class="mt-3 mb-3 text-primary">
        <!-- ------------------------------------------------------------answers portion --------------------------- end --------->

        <div class="row ps-4">
          <!-- ------------------------------------------------------------third portion --------------------------- delete,edit,pending --------->
        <div class="col-lg-5 d-flex justify-content-start p-2 align-items-center">
          <h6 class="pe-4 text-success like-answer-ban" style="cursor:pointer;font-size: 12px;"><span class="material-symbols-outlined" >thumb_up</span> {{ $answer->like }} </h5>
          <h6 class="pe-4 text-danger like-answer-ban" style="cursor:pointer;font-size: 12px;"><span class="material-symbols-outlined" >thumb_down</span> {{ $answer->dislike }} </h5>
          
        </div>
        <div class="col-lg-7 d-flex justify-content-end align-items-center">
                <button class="pending_status btn btn-light rounded-pill me-3 mb-2" value="pending action">
                      <i class="fa-solid fa-circle-check fs-4 fw-bold text-success"></i>
                </button>
        </div>
       <!-- ------------------------------------------------------------third portion --------------------------- end --------->
        </div>
      </div>

@endforeach
@else
           <div class="p-3 mt-3 d-flex justify-content-center align-items-center flex-column">
              <img style="height:200px;width:350px;" src="https://cdni.iconscout.com/illustration/premium/thumb/man-holding-magnifying-glass-doing-marketing-research-from-sites-2511649-2133727.png" alt="">
              <h4 class="text-primary text-center fx-bold mt-3">Sorry! No Answers Found :(</h4>
            </div>
@endif
<div class="alert alert-danger fw-bold text-center error-alert w-50" style="display:none;"></div>              
     </div>

                    </div>
                    
                  </div>
@endsection


@section('ajaxfor')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('css\view_single_page.css') }}">
<script>
$(document).ready(function(){

// -----those for following-------------------------------------------start---
  $('.following').click(function(){
    //alert('following click');
    $.ajax({
      url:"{{ route('user.following') }}",
      method:"GET",
      data:{_token:"{{ csrf_token() }}"},
      success:function(responce){
        if(responce.status==true)
        {
          $('#following').html('').html(responce.html);
        }
        
      }
    });
  });

  $(document).on('click','.unfollow',function(){
    // var array=$(this).data('remove_id').split("_");
    var array=$(this).data('remove_id').split('__');
    var target_id=array[0];
    var name=array[1];
    $('#hidden_field').val(target_id);
   // alert($(this).data('remove_id'));
    $('.modal-body').html(`<p class="text-primary mb-5">Are you sure you want to Unfollow ${name}? </p>`);
    $('.alert-bookmark').trigger('click');
  });

  $(document).on('click','.unfollow-ask',function(){
    target_id=$('#hidden_field').val().split('_');
    var targetid=target_id[0];
    var selfid=target_id[1];
    //alert(target_id);
    $.ajax({
      url:"{{ route('delete.following') }}",
      method:"POST",
      data:{targetid:targetid,selfid:selfid,_token:"{{ csrf_token() }}"},
      success:function(responce){
        if(responce.status==true)
        {
         // console.log("target id: "+responce.targetid+"self id: "+responce.selfid);
          $('.row[data-id="' + targetid + '"]').remove();
          $('.delete-off').trigger('click');
        }
        
      }
    });
  });
// -----those for following-------------------------------------------end---

// -----those for follower----------------------follow-back---------------------start---
  $('.follow-back').click(function(){
   var follower_id=$(this).data('follow_back').split('_');
   let this_element=$(this);
   follower_id=follower_id[0];
    //alert(follower_id);
    $.ajax({
      url:"{{ route('follow.back') }}",
      method:"POST",
      data:{follower_id:follower_id,_token:"{{ csrf_token() }}"},
      success:function(responce){
        if(responce.status==true)
        {
          $(this_element).addClass('d-none');   // $(this) does not work in success method
          console.log('success');
        }
        
      }
    });
  });
// -----those for follower--------------------follow-back-----------------------end---

// -----those for questions--------------------like,dislike,bookmark-----------------------start---

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

// -----those for questions--------------------like,dislike,bookmark-----------------------end---

$(document).on('click','.like-answer-ban',function(){
      $('.error-alert').html('').html("you don't like or dislike on your post.").fadeIn();
      setTimeout(() => {
        $('.error-alert').fadeOut();
      }, 3000);
    });


$('.profile-info-education').on('click',function(){
  var input_fields=['School','Secondary-school','Collage','Degree','Graduation-year'];
  var field_name='education_credential';
  call(input_fields,'education',field_name);
});
$('.profile-info-employment').on('click',function(){
  var input_fields=['Position','Company-name','Experience'];
  // let position=($('#Position').val() !== undefined && $('#Position').val() !== '') ? $('#Position').val() : null;
  // let Companyname=($('#Company-name').val() !== undefined && $('#Company-name').val() !== '') ? $('#Company-name').val() : null;
  // let Experience=($('#Experience').val() !== undefined && $('#Experience').val() !== '') ? $('#Experience').val() : null;
  // var values_array=[position,Companyname,Experience];
  // console.log(values_array);
  var field_name='employment_credential';
  call(input_fields,'employment',field_name);
});
$('.profile-info-location').on('click',function(){
  var input_fields=['Country','State','ZIP-CODE','Address'];
  var field_name='location_credential';
  call(input_fields,'location',field_name);
});
$('.profile-info-socialmedia').on('click',function(){
  var input_fields=['facebook profile link','twitter profile link','linkdin profile link'];
  var field_name='socialmedia_credential';
  call(input_fields,'socialmedia',field_name);
});

function call(fields,form_id,field_name){
  var html12="";
  html12+=`<form id="${form_id}">`;
  fields.forEach(element => {
    const value = $('#'+element).val();
    const inputValue = value ? `value="${value}"` : "";
    html12+=`
                      <div class="p-2">
                            <label for="${element}" class="fw-bold text-primary">${element}</label>
                            <input class="form-control" type="text" name="${element}" id="${element}" ${inputValue}>
                      </div>
    `;
  });
  html12+=`
  <input type="hidden" name="field_name" id="field_name" value="${field_name}">
  <div class="d-flex justify-content-center align-items-center mt-2 loading-button-aftersaved">
  <button class="btn btn-success submit-data" type="submit">Update Profile</button>
  </div>
  <form>`;
  $('#profile-update-body').html('').html(html12);
  $('.profile-update-open').trigger('click');
  console.log(html12);
}

$(document).on('submit','form',function(event){
  event.preventDefault();
  var formdata=$(this).serializeArray();
  var buttons=`<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>`;
$('.loading-button-aftersaved').html(buttons);
//console.log(formdata);
    $.ajax({
        url:"{{ route('user.profileUpdate') }}",
        method:"POST",
        data:{formdata:formdata,_token:"{{ csrf_token() }}"},
        success:function(responce){
          // console.log(responce.data);
          //   console.log(responce.lastelement);
          if(responce.status==true){
            // console.log(responce.data);
            // console.log(responce.lastelement);
            window.location.href="{{ route('user.profile') }}";
          }else{
            console.log("somthing problem");
          }
            
        }
    });
});

});

</script>

@endsection