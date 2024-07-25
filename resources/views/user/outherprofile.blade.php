<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <link rel="stylesheet" href="{{asset('css/profile.css')}}">
  <!-- font aswome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<style>
  .spinner-class{
    position: fixed;
    top: 50%;
    left: 50%;
  }
  .spin-bg{
    width: 100%;
    height: 100%;background-color:rgba(199, 199, 199, 0.3);position: fixed;top:0;left:0;
    display: none;
  }
</style>
</head>

<body class="container">
<div class="row">
    <div class="col-12">
        <div class="p-2">
                <div class="your-details row p-2 border m-0 mb-2 rounded bg-dark">
                    <!-- <div class="col-lg-4 d-flex justify-content-end p-2">
                        <img class="image-responcive" src="https://firebasestorage.googleapis.com/v0/b/major-project-bca-79b7f.appspot.com/o/subhnakar2.jpg?alt=media&token=bf3471a6-5e5c-4fd7-8ed8-7d7a743d0d8c" alt="" style="height:120px;width:120px;border-radius: 50%;">
                    </div> -->
                    <div class="col-lg-12 d-flex with-img-box align-items-center justify-content-start ">
                        <img class="profile-responcive border border-light" src="https://api.dicebear.com/6.x/initials/svg?seed={{ $user->name }}&radius=50&size=64" alt="" >
                        
                        <div class="ps-3 w-100">
                            <h5 class="text-light mb-0 mt-1 details-text">{{ $user->name }}</h5>
                            <h6 class="text-light mb-0 mt-1 details-text">{{ $user->email }}</h6>
                            <h6 class="text-light mb-0 mt-1  details-text">{{ $followers_number }} Followers<i class="fa-solid fa-circle ps-2 pe-2 text-success" style="font-size: 10px;"></i>{{ $followings_number }} Following</h6>
                            <a href="" class="fs-5 me-2 uer-profile-link"><i class="fa-brands fa-facebook"></i></a>
                            <a href="" class="fs-5 me-2 uer-profile-link" style="color: rgb(76, 192, 255);"><i class="fa-brands fa-twitter"></i></a>
                            <a href="" class="fs-5 me-2 uer-profile-link" style="color: rgb(17, 62, 116);"><i class="fa-brands fa-linkedin"></i></a>
                            
                        </div>
                        @php 
                                               $self_user_id=session('id');
                                               $user_id=$user->id;        
                                               $following=App\Models\Following::where('user_id',$user_id)->get();
                                               $check=App\Models\Following::where('user_id', $self_user_id)->where('following_id', $user_id)->exists();
                        @endphp
                        @if($self_user_id != $user_id)
                        <div class="w-100">
                       
                          @if($check)
                                <button data-followuserid="{{ $user->id }}_{{ $self_user_id }}_unfollow" class="float-end followUserId btn btn-danger fw-bold rounded-pill ps-4 pe-4">Unfollow</button>                                   
                          @else
                                <button data-followuserid="{{ $user->id }}_{{ $self_user_id }}_follow" class="float-end followUserId btn btn-warning fw-bold rounded-pill ps-4 pe-4">follow</button>
                          @endif
                         
                        </div>
                        @endif
                    </div>
                    
                </div>
              
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active profile-tab" data-bs-toggle="tab" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link followers" data-bs-toggle="tab" href="#followers">Followers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link following" data-bs-toggle="tab" href="#following">Following</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link question" data-bs-toggle="tab" href="#questions">Questions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link answer" data-bs-toggle="tab" href="#answers">Answers</a>
                    </li>
                  </ul>


                <div class="tab-content">
      <div id="profile" class="tab-pane active tab_content_common_class bg-light">
                @if(is_null($user_info->education_credential) && is_null($user_info->location_credential) && is_null($user_info->employment_credential))  
                <div class="p-3 mt-3 d-flex justify-content-center align-items-center flex-column">
                        <img style="height:300px;width:300px;" src="https://img.freepik.com/premium-vector/software-update-illustration_108061-429.jpg?w=2000" alt="">
                        <h4 class="text-primary text-center fx-bold mt-3">Oops! Looks like this user hasn't finished setting up their profile yet. Keep an eye out for updates and check back soon! :(</h4>
                </div>
                @else
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
               
                
            @endif
      </div>  
        <!-- ----------------profile end-------------- -->
        <div id="followers" class="tab-pane tab_content_common_class bg-light">
                        
              <!-- Followers content here -->
              <p class="p-2 fw-bold fs-4 text-secondary mb-1">Followers List.</p>
                        <hr class="mt-0 mb-1 ms-1 me-1">
                              @php      
                                     $followers=App\Models\Following::where('following_id',$user_id)->get();  
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
                                 
                                </div>
                            @endforeach

                            @else
                            <div class="d-flex justify-content-center align-items-center flex-column">
                              <img  class="img-fluid mt-2 mb-2" src="https://img.freepik.com/free-vector/account-concept-illustration_114360-409.jpg?w=360" alt="">
                                <p class="fw-bold fs-2 text-self">This user is new to the platform and doesn't have any followers yet!(</p>                            
                            </div>
                            @endif
           
                      
        </div>
            <!-- -------------followers end----------- -->
            <div id="following" class="tab-pane tab_content_common_class bg-light">
                        
                        <!-- Following content here -->
                        <p class="p-2 fw-bold fs-4 text-secondary mb-1">Following List.</p>
                                  <hr class="mt-0 mb-1 ms-1 me-1">
                                       
                                         <!-- echo "<pre>";
                                               print_r($followers->toArray());
                                               print_r($following_list); -->
                                      @if($following->count() > 0)
                                           @foreach($following as $follower)
                                                @php
                                                    $follower_id=$follower->following_id;
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
                                           
                                          </div>
                                      @endforeach
          
                                      @else
                                      <div class="d-flex justify-content-center align-items-center flex-column">
                                        <img style="height:300px;width:300px;" class="img-fluid mt-2 mb-2" src="https://img.freepik.com/free-vector/account-concept-illustration_114360-409.jpg?w=360" alt="">
                                          <p class="fw-bold fs-2 text-self">This user is new to the platform and doesn't following yet!(</p>                            
                                      </div>
                                      @endif
                     
                                
            </div>
             <!-- -------------following end----------- -->
 <!-- --------------------question content---------------------start----------------- -->
    <div id="questions" class="tab-pane tab_content_common_class bg-light" style="overflow: auto;">
                        <p class="p-2 fw-bold fs-4 text-secondary mb-1">Questions List.</p>
                        <hr class="mt-0 mb-1 ms-1 me-1">
                        @php
                            $userdetails=App\Models\Newuser::find($user_id);
                            if($userdetails!=null){
                              $questions = $userdetails->Question()->with('catagory','subcatagory','Newuser','answers')->get();
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
                                    $userid=$self_user_id;
                                    
    
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
    <!-- -------------------------------question end----------------- -->
    <div id="answers" class="tab-pane tab_content_common_class bg-light">
        <!-- //$answers = Answer::where('user_id', $user_id)->with('question.Newuser')->get();
        // this will fine but there we get all the information of the user but we need only name -->
              @php
                
        
                $answers=App\Models\Answer::where('user_id',$user_id)->where('flag','=',1)->orderBy('id', 'desc')->
                with(['question.Newuser' => function ($query) {
                $query->select('u_id', 'user_name'); // select only the id and name columns from the Newuser table
                }])->get();
                
                                    

                               
              @endphp
              <!-- echo "<pre>";
                print_r($answers->toArray()); -->
                        <p class="p-2 fw-bold fs-4 text-secondary mb-1">Answers List.</p>
                        <hr class="mt-0 mb-1 ms-1 me-1">
                        <!-- Answers content here -->
                        @if($answers->count() > 0)
@foreach($answers as $answer)
      @php
             $jsonarray=$answer->records;
             $userid=$self_user_id;
                                          
          
            if (is_null($jsonarray)) {
                 $jsonarray = array(); 
            }
      @endphp
<div class="post p-2 rounded mt-3 mb-3" data-deleteanswer_id="{{ $answer->id }}" style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">
       <!--------------------------------- first portion of this card ------------------name,date,tag,question,name of user2------------------------------------------------->
       <div class="row ps-2 pe-2">
        <div class="col-lg-12 d-flex justify-content-start align-items-center">
          <!-- <div class="profile2">
            <img src="https://artriva.com/media/k2/items/cache/c889234799e865bbe90cee71f6cd2e53_XL.jpg" alt="" style="height: 50px;width: 50px;border-radius: 50%;">
          </div> -->
          <div class="name-tag ps-2">
              <h6 class="fw-bolder pb-0 mb-0 text-dark align-items-center" style="font-size: 12px;">
                 <a href="" class="text-secondary">{{$user->name}}</a> 
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
        <div class="col-lg-5 d-flex justify-content-start found_like_dislike p-2 align-items-center">
          <!-- <h6 class="pe-4 text-success" style="cursor:pointer;font-size: 12px;">
          <span class="material-symbols-outlined" >thumb_up</span>
           {{ $answer->like }}
          </h6>
          <h6 class="pe-4 text-danger" style="cursor:pointer;font-size: 12px;">
          <span class="material-symbols-outlined" >thumb_down</span>
           {{ $answer->dislike }} 
          </h6> -->
          <h6 data-likeanswer_id="{{ $answer->id }}_{{$userid}}_like" class="pe-4 likeanswer text-success border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
          @if(array_key_exists($userid, $jsonarray))
                    @if($jsonarray[$userid]=="like")
                            <span class="material-symbols-outlined thumbs_up fw-bold" >thumb_up</span>
                    @else
                            <span class="material-symbols-outlined thumbs_up" >thumb_up</span>
                    @endif
          @else
                    <span class="material-symbols-outlined thumbs_up" >thumb_up</span>
          @endif
          <span class="likecount" >{{ $answer->like}}</span>
          </h6>
          <h6 data-dislikeanswer_id="{{ $answer->id}}_{{$userid}}_dislike" class="pe-4 dislikeanswer text-danger border-end border-primary flex-center w-100" style="cursor:pointer;font-size: 12px;">
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
        </div>
    </div>
</div>
<div class="spin-bg">
  <div class="spinner-border spinner-class" role="status" style="height:60px;width:60px;">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
  <!-- Bootstrap JavaScript Libraries -->
  <link rel="stylesheet" href="{{ asset('css\view_single_page.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function(){
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

// -----those for answers--------------------like,dislike-----------------------start---
    $(document).on('click','.dislikeanswer',function(){
      let dislike=$(this).data('dislikeanswer_id');
      like_dislike_answer(dislike,this);
      //let action="like";
      //like_dislike(like,action,this);
     // alert(dislike);
    });
    $(document).on('click','.likeanswer',function(){
      let like=$(this).data('likeanswer_id');
      like_dislike_answer(like,this);
      //let action="like";
      //like_dislike(like,action,this);
      //alert(like);
    });
    function like_dislike_answer(value,target_element){
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
              
              if($(target_element).hasClass('likeanswer')){
                  if($(target_element).find('span').hasClass('fw-bold') && responce.action=="like"){
                    $(target_element).find('span').toggleClass('fw-bold');
                   // alert(1);
                  }else{
                    $(target_element).find('span').addClass('fw-bold');
                   $(target_element).closest('.found_like_dislike').find('.dislikeanswer span').removeClass('fw-bold');
                   // alert(2);
                  }
              }else{
                if($(target_element).find('span').hasClass('fw-bold') && responce.action=="dislike"){
                    $(target_element).find('span').toggleClass('fw-bold');
                     //alert(3);
                  }else{
                    $(target_element).find('span').addClass('fw-bold');
                    $(target_element).closest('.found_like_dislike').find('.likeanswer span').removeClass('fw-bold');
                    // alert(4);
                  }
              }
            }
            console.log(responce.status+" user id "+responce.user_id+" action "+responce.action+" like no : "+responce.like);
        
            //console.log("anser id: "+responce.answer_id+"user id: "+responce.user_id+"action: "+responce.action);
        }
      });
    }
// -----those for answers--------------------like,dislike-----------------------end---

$('.followUserId').click(function(){
var followUserId=$(this).data('followuserid');
//alert(followUserId);
$('.spin-bg').show();
followUserId=followUserId.split('_');
let userid=followUserId[0];
let selfid=followUserId[1];
let decision=followUserId[2];
let this_element=$(this);
$.ajax({
        url:"{{ route('otheruser.followUnfollow') }}",
        method:"POST",
        data:{userid:userid,selfid:selfid,decision:decision,_token:"{{ csrf_token() }}"},
        success:function(responce){
          if(responce.status){
            location.reload();
            $('.spin-bg').hide();
          }
        }
      });
});

  });
</script>
</body>

</html>