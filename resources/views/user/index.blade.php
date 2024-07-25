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

</style>
</head>

<body class="container-fluid bg-light">
  <header>
  
    <!-- ------------------------------------------------header only such as profile,notification,serch bar & logo--------------- -->
    <div class="header row">
        <div class="col-md-3 flex-start p-1">
            <div class="ps-5 fw-bolder fs-3">
                <label style="color:#166BBA">Answer</label>
                <label class="text-secondary">Bag</label>
            </div>
            
        </div>

        <div class="col-md-6 p-1 d-flex justify-content-center">
          <div class="searchbar rounded d-flex w-75 justify-content-center align-items-center border border-primary">
            <span class="material-symbols-outlined ps-2">
              search
            </span>
            <input type="text"  name="" id="search" class="search form-control border border-white" style="border-color: transparent;box-shadow: none;" placeholder="Search by username, question, category, or subcategory...">
          </div>
        </div>
        <div class="box border rounded" id="search-content" style="display:none;"></div>
        <div class="" id="search-content-cover" style="display:none"></div>
        <div class="col-md-3 flex-end p-1">
            <div class="notification pe-5" id="notification_click">
                <i class="fa-regular fa-bell" style="font-size: 20px;color:#EA942C;cursor:pointer;"></i>
                <!-- <img src="https://firebasestorage.googleapis.com/v0/b/major-project-bca-79b7f.appspot.com/o/notification-in.svg?alt=media&token=f0661c77-b0bb-469b-82a7-c857287cf7e1" alt="" style="width:30px;height:20px;color:#EA942C;"> -->
            </div>
            <div class="profile pe-5" style="cursor:pointer">
                <img src="https://cutewallpaper.org/24/user-icon-png/female-user-icon-png-download-user-colorful-icon-png-clipart-1653686--pinclipart.png" alt="" style="width:40px;height:40px;border-radius: 50%;">
            </div>
        </div>
    </div>
          <!------------------- notification box ---------------------------------------------start------------------------------------------------->
      <div class="notification-box mb-5 notification_box off bg-dark" style="width:350px;">
        <h5 class="text-warning fw-bold"><i class="fa-solid fa-bell pe-3"></i>Notifications</h5>
        <hr class="mt-0 mb-1 text-primary">

              <div style="height: 200px;overflow-y: scroll;" class="notification-box-div" id="notification_content">
                
              </div>
        
      </div>
      <!------------------- notification box ---------------------------------------------end------------------------------------------------->

      <!------------------- profile box ---------------------------------------------start------------------------------------------------->
      <div class="notification-box mb-5 profile_box off bg-dark" style="width:220px">
        <div class="row">
          <div class="col-12 d-flex justify-content-center align-items-center flex-column text-light fw-bolder">
            <img src="https://api.dicebear.com/6.x/initials/svg?seed={{ session('userName') }}&radius=50&size=32" style="width:60px;height:60px;border-radius:50%;margin-bottom:10px;" alt="">
            {{ session('userName') }}
          </div>
        </div>

      <hr class="mt-2 mb-2 text-secondary">

      
      <div class="box p-2 d-flex justify-content-start text-primary align-items-center fw-bold">
          <span class="material-symbols-outlined" style="font-size: 30px;">account_circle</span>
          <a href="{{ route('user.profile') }}" style="text-decoration: none;" class="text-primary ps-2">view profile</a>
      </div>
      <hr class="mt-2 mb-2 text-danger">
      <div class="box p-2 d-flex justify-content-start text-danger align-items-center fw-bold">
        <span class="material-symbols-outlined" style="font-size: 30px;">logout</span>
        <a href="{{ route('user.logout') }}" style="text-decoration: none;" class="ps-2 text-danger">logout</a>
      </div>
      </div>
      <!------------------- profile box ---------------------------------------------end------------------------------------------------->

    <div class="row line mt-1 mb-0"></div>
  </header>





<!-- ------------------------------------------------main only ------------------------------------------------ -->
  <main>

    <div class="row">
      <!-- ------------------------------------------------left side bar col-3 ------------------------------------------------ -->
        <div class="col-3">
            <div class="side-bar">

                <div class="pt-4 mb-0">
                    <h4 class="text-center fw-bolder" style="color:#125b9f">MENU</h4>
                </div>
                <hr class="mt-0 mb-0 ms-3 me-3 bg-self">
                <div class="p-2 d-flex justify-content-center">
                    <ul class="w-75 sidebar-nav p-2">
                        <li class="active pt-2 pb-2"><a href="{{route('user.home')}}" class="fw-bolder"><i class="fa-solid fa-house-chimney pe-1"></i>home</a></li>
                        <li class="pt-2 pb-2"><a href="{{route('user.following')}}" class="fw-bolder"><i class="fa-solid fa-user-group pe-1"></i>Following</a></li>
                        <li class="pt-2 pb-2"><a href="{{route('user.myquestions')}}" class="fw-bolder"><i class="fa-solid fa-question pe-1"></i>My Questions</a></li>
                        <li class="pt-2 pb-2"><a href="{{route('user.myanswers')}}" class="fw-bolder"><i class="fa-regular fa-message pe-1"></i>My Answers</a></li>
                        <li class="pt-2 pb-2"><a href="{{route('user.profile')}}" class="fw-bolder"> <i class="fa-solid fa-circle-user pe-1"></i>Profile</a></li>
                        <li class="pt-2 pb-2"><a href="{{route('user.bookmark')}}" class="fw-bolder"><i class="fa-solid fa-bookmark pe-1"></i>Saved Post</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        <!-- ------------------------------------------------middle /content portion col-6 ------------------------------------------------ -->
        <div class="col-6 ">
            <div class="content p-2 ps-1">

              @yield('content-section')
                
            </div>
        </div>

        <!-- ------------------------------------------------right side bar col-3 ------------------------------------------------ -->
        <div class="col-3">
            <div class="side-bar"> 
                <!---------------------part-1------------------------------>
                <div class="create-post flex-center">
                    <a href="{{route('user.create')}}" class="btn btn-primary text-light w-75 fw-bolder"><i class="fa-solid fa-plus text-white pe-2"></i> Ask Questions</a>
                </div>
                <!---------------------part-1------------------ create post portion -------------->

                <!---------------------part-2------------------------------->
                <div class="catagory1">

                    <div class="w-100 bg-self-veryLight border rounded border-primary p-2">
                        <h5 class="text-satrt text-self fw-bolder p-2">Top Catagories</h5>
                        <hr class="mt-0 mb-0 text-self">
                        
                        @php 
$catagories= App\Models\catagory::all();
$icons=['<i class="fa-solid fa-atom pe-2" style="color:rgb(123, 191, 255)"></i>','<i class="fa-solid fa-arrow-trend-up pe-2" style="color:rgb(32, 247, 32)"></i>','<i class="fa-solid fa-trophy pe-2" style="color:rgb(255, 160, 8)"></i>',
'<i class="fa-solid fa-laptop-code pe-2" style="color:rgb(244, 197, 12)"></i>','<i class="fa-solid fa-desktop pe-2" style="color:rgb(240, 141, 166)"></i>'];
$icon_count=0;
  @endphp
  @if($catagories->count() > 0)
  @foreach($catagories as $catagory)
<div class="catagory bg-self pt-2 ps-2 pe-2 border border-primary rounded mt-2">
                                  <div class="d-flex justify-content-between fw-bolder">
                                    <p class="text-light" style="text-decoration: none;">{!! $icons[$icon_count] !!}{{ $catagory->catagory_name }}</p>
                                    <p class="dropdown text-light" style="text-decoration: none;cursor: pointer;"><i class="fa-solid fa-caret-down" style="font-size: 25px;"></i></p>
                                  </div>
                            @php $subcatagories= App\Models\subcatagory::where('catagorys_id','=',$catagory->id)->get(); @endphp
                                  <div class="row d-none p-2">
                                    <hr class="mt-0 mb-0">
                                  @foreach($subcatagories as $subcatagory)
                                    <a href="/user/home/{{ $subcatagory->subcatagorys_id }}" class="btn btn-light text-dark fw-bolder ms-2 me-2 mt-2 text-size-self col-5"> {{ $subcatagory->name }}</a>
                                  @endforeach
                                  </div>
                          </div>
                          @php $icon_count+=1; @endphp
                      @endforeach
                      @endif
                    
                        
                    
                      </div>

                </div>
                <!---------------------part-2------------------ catagory portion -------------->

                <!---------------------part-3------------------------------>
                <div class="footer-link d-flex">
                    <div class="w-50 pt-2 border-end border-primary">
                        <p class="text-center mb-1 fw-bolder text-self">Quick links</p>
                        <hr class="mb-1 mt-0 ms-2 me-2 text-self">
                        <ul class="links flex-center-column-start">
                            <li class="ps-2"><a href=""  class="fw-bolder">Home</a></li>
                            <li class="ps-2"><a href="" class="fw-bolder">About Us</a></li>
                            <li class="ps-2"><a href="" class="fw-bolder">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="w-50 pt-2">
                        <p class="text-center mb-1 fw-bolder text-self">Follow Us</p>
                        <hr class="mb-1 mt-0 ms-2 me-2 text-self">
                        <ul class="links flex-center-column p-0">
                            <li class=""><a href=""><i class="fa-brands fa-facebook" style="color:#1932d7;font-size: 20px;"></i></a></li>
                            <li class=""><a href=""><i class="fa-brands fa-twitter" style="color:#34bbfa;font-size: 20px;"></i></a></li>
                            <li class=""><a href=""><i class="fa-brands fa-linkedin" style="color:#125b9f;font-size: 20px;"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!---------------------part-3------------------ footer link portion -------------->
            </div>
        </div>
    </div>
  </main>
 
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
   <script
   src="https://code.jquery.com/jquery-3.6.4.slim.js"></script>
   <script>
     $(document).ready(function(){
        //  $(".sidebar-nav li").on('click',function(){
        //      $(".sidebar-nav li").each(function(){
        //          $(this).removeClass('active');
        //        //  $(this).find('a').css('color', '#BABABA');
                 
        //      });
        //      $(this).addClass('active');
        //      //$(this).find('a').css('color', '#516CF8');
             
        //  });
        var url=window.location.href; //we can get the full url 
       
          $('.sidebar-nav li a').each(function() {
                  // here this.href only work in a tag...
                        if (this.href === url) {
                          $(this).parent('li').addClass('active');// we target li not a tag...so li is the parent of a .
                        } else {
                          $(this).parent('li').removeClass('active');
                        }
           });
            // $('.sidebar-nav li').click(function(event){
            //   event.preventDefault();
            //   var url=$(this).find('a').attr('href');
            //   console.log(url);
            //   window.location.href=url;
            //   $(this).siblings().removeClass('active');
            //   $(this).addClass('active');
             
            // });
         $(".dropdown").click(function() {
          $(this).closest(".catagory").find(".row").toggleClass("d-none");
          $(this).toggleClass('rotate');
        
        });

        $('.search').focus(function(){
                  $(this).closest('.searchbar').css('box-shadow','0 0 0 0.2rem rgb(173, 205, 255)');
        });
        $('.search').blur(function(){
          $(this).closest('.searchbar').css('box-shadow','none');     
        });


        // $('.fa-bell').click(function(){
        //     $('.notification_box').toggleClass('off');
        //     });
        $('.profile').click(function(){
            $('.profile_box').toggleClass('off');
            });


      $('.nav-tabs a').click(function(){
        $(this).tab('show');
      });
           
      $('#search').on('keyup',function(){
            var search=$(this).val();
            var html='';
            //alert(search);
            $('#search-content-cover').show();
           if(search==""){  // if search variable is not empty
            $('#search-content').hide();
            $('#search-content-cover').hide();
           }else{           // else continue
            $.ajax({
              url:"/user/search",
              data:{search:search,_token:"{{ csrf_token() }}"},
              method:"POST",
              success:function(responce){
                if(responce.status==false){
                  html+=`<h5 class="text-center fw-bold">${ responce.message }</h5>`;
                }
                console.clear(); // this is used for another purpose.
                // here we store all the value on seperate variable
                const userarray=responce.users; // here we store userarray
                const questions=responce.questions; // here we store questionsarray
                //console.log(questions);
                const catagorys=responce.catagorys; // here we store catagorysarray
                const subcatagorys=responce.subcatagorys; // here we store subcatagorysarray
                // here we check if length of the arrays is 0 or not...if yes then continue
                if(userarray.length > 0 ||  questions.length > 0 || catagorys.length > 0 || subcatagorys.length > 0){
                  if(responce.users.length > 0){
                  for (let index = 0; index < userarray.length; index++) {
                        html+=`
                        
                            <div style="cursor:pointer;" data-search_item_value="user_${ userarray[index].u_id }" class="user search-item mt-2 rounded d-flex justify-content-start align-items-center p-1 bg-light">
                                <div><img src="https://api.dicebear.com/6.x/initials/svg?seed=${ userarray[index].user_name }&radius=50&size=32" alt="" style="height:35px;width:35px;border-radius:50%"></div>
                                <div class="ms-3">${ userarray[index].user_name }</div>
                            </div>
                            `;
                  }
                }
                if(responce.questions.length > 0){
                  for (let index = 0; index < questions.length; index++) {
                        html+=`
                        <div style="cursor:pointer;" data-search_item_value="question_${ questions[index].id }" class="search-item question mt-2 rounded d-flex justify-content-start align-items-center p-1 bg-light">
                            <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Blue_question_mark_icon.svg/800px-Blue_question_mark_icon.svg.png" alt="" style="height:35px;width:35px;border-radius:50%"></div>
                              <div class="ms-3 d-flex" style="height:30px;"> 
                                  <p class="" style="overflow:hidden;height:30px;">${ questions[index].question }</p>
                                  <p class="pe-3">...</p>
                              </div>
                        </div>
                            `;
                  }
                }
                if(responce.catagorys.length > 0){
                  for (let index = 0; index < catagorys.length; index++) {
                        html+=`
                        <div style="cursor:pointer;" class="user search-item mt-2 rounded d-flex justify-content-start align-items-center p-1 bg-light">
                                <div><img src="https://png.pngtree.com/element_our/20190601/ourmid/pngtree-square-display-icon-image_1335056.jpg" alt="" style="height:35px;width:35px;border-radius:50%"></div>
                                <div class="ms-3 text-danger fw-bold">catagory <a href="/user/catagory/${ catagorys[index].catagory_name }" class="fw-normal">${ catagorys[index].catagory_name }</a></div>
                            </div>
                            `;
                  }
                }
                if(responce.subcatagorys.length > 0){
                  for (let index = 0; index < subcatagorys.length; index++) {
                        html+=`
                        <div style="cursor:pointer;" class="user search-item mt-2 rounded d-flex justify-content-start align-items-center p-1 bg-light">
                                <div><img src="https://cdn.iconscout.com/icon/free/png-256/free-categories-3114461-2598239.png" alt="" style="height:35px;width:35px;border-radius:50%"></div>
                                <div class="ms-3 text-success fw-bold">subcatagory <a href="/user/subcatagory/${ subcatagorys[index].name }" class="fw-normal">${ subcatagorys[index].name }</a></div>
                            </div>
                            `;
                  }
                }
                }
                else{ // else show no data found.
                  //console.log("not found");
                  html+=`<h5 class="text-center fw-bold">No Data Found</h5>`;
                }
                console.log(html);
                $('#search-content').show().html(html);
                
              }
           });
           }
        });
      
        $(document).on('click','.search-item',function(){
            var id=$(this).data('search_item_value').split('_');
            var check_page=id[0];
            var pageno=id[1];
            if(check_page=='user'){
              window.location.href="/user/profile/"+pageno;
            }else{
              window.location.href="/user/post/"+pageno;
            }
            //alert(id);
        });

        $('#notification_click').on('click',function(){
        if($('.notification_box').hasClass('off')){
          
          var html="";
         // alert('notification on');
         $.ajax({
              url:"{{ route('user.notification') }}",
              method:"GET",
              success:function(responce){
                const notification=responce.notification;
                if(notification.length > 0){
                  notification.forEach(element => {
                  if(element.action=='question'){
                    html+=`
                        <div class="box row p-2">
                            <div class="col-2 d-flex justify-content-between align-items-center">
                              <span class="material-symbols-outlined text-success fw-bolder">
                                check
                                </span>
                            </div>
                          <div class="col-10 ps-2 text-light" style="font-size: 12px;">
                          ${element.message}<a href="/user/post/${element.action_id}" class="">see question</a><br><i class="fa-solid fa-circle pe-1 text-danger fw-bolder" style="font-size: 8px;""></i>${element.created_at}
                          </div>
                          <hr class="mt-2 mb-0 text-secondary">
                      </div>
                      `; 
                  }else if(element.action=='answer'){
                    html+=`
                        <div class="box row p-2">
                            <div class="col-2 d-flex justify-content-between align-items-center">
                              <span class="material-symbols-outlined text-success fw-bolder">
                                check
                                </span>
                            </div>
                          <div class="col-10 ps-2 text-light" style="font-size: 12px;">
                          ${element.message}<a href="/user/seesingleanswers/${element.action_id}" class="">see answer</a><br><i class="fa-solid fa-circle pe-1 text-danger fw-bolder" style="font-size: 8px;""></i>${element.created_at}
                          </div>
                          <hr class="mt-2 mb-0 text-secondary">
                      </div>
                      `; 
                  }else if(element.action=='report_reporting_user'){
                    html+=`
                        <div class="box row p-2">
                            <div class="col-2 d-flex justify-content-between align-items-center">
                              <span class="material-symbols-outlined text-success fw-bolder">
                                check
                                </span>
                            </div>
                          <div class="col-10 ps-2 text-light" style="font-size: 12px;">
                          ${element.message}<a href="/user/seeansreport/${element.action_id}" class="">see report</a><br><i class="fa-solid fa-circle pe-1 text-danger fw-bolder" style="font-size: 8px;""></i>${element.created_at}
                          </div>
                          <hr class="mt-2 mb-0 text-secondary">
                      </div>
                      `; 
                  }else if(element.action=='report_target_user'){
                    html+=`
                        <div class="box row p-2">
                            <div class="col-2 d-flex justify-content-between align-items-center">
                                  <span class="material-symbols-outlined text-danger fw-bold">
                                  warning
                                  </span>
                            </div>
                          <div class="col-10 ps-2 text-light" style="font-size: 12px;">
                          ${element.message}<a href="/user/seetakeaction/${element.action_id}/${element.id}" class="">see report</a><br><i class="fa-solid fa-circle pe-1 text-danger fw-bolder" style="font-size: 8px;""></i>${element.created_at}
                          </div>
                          <hr class="mt-2 mb-0 text-secondary">
                      </div>
                      `; 
                  }
                  $('#notification_content').html(html);
                });
                }else{
                  html+="<h5 class='text-light'> YOU DONT HAVE ANY NOTIFICATION </h5>";
                  $('#notification_content').html(html);
                }
                //console.log(notification);
                //console.log(notification.length);
                $('.notification_box').removeClass('off');
              }
          });
        }else{
          $('.notification_box').addClass('off');
         // alert('notification off');
        }
        });

     });
   </script>
     @yield('ajaxfor')
    @yield('content-scripts')
  
</body>

</html>





<!-- <ul class="bg-success menu-list">
                   
                    <li class="fw-bolder p-0 w-75  bg-light flex-start">
                        <div class="bg-danger p-2 ps-0 pe-0">1</div>
                        <div class="p-2">
                            <i class="fa-solid fa-house-chimney text-secondary"></i> <label  class="text-secondary">Home</label>
                        </div>   
                    </li>
                    
                    <li class="fw-bolder w-75 p-0 bg-light flex-start">
                        <div class="bg-danger  si"></div>
                        <div class="p-2">
                            <i class="fa-solid fa-user-group text-secondary"></i>  <label class="text-secondary">Following</label> 
                        </div> 
                    </li>

                    <li class="fw-bolder ps-5 w-75">
                        <i class="fa-solid fa-question text-secondary"></i> <label class="text-secondary">My Questions</label>   
                    </li>
                    <li class="fw-bolder ps-5 w-75">
                        <i class="fa-regular fa-message text-secondary"></i> <label class="text-secondary">My Answers</label>  
                    </li>
                    <li class="fw-bolder ps-5 w-75">
                        <i class="fa-solid fa-circle-user text-secondary"></i> <label class="text-secondary">Profile</label>  
                    </li>
                    <li class="fw-bolder ps-5 w-75">
                        <i class="fa-solid fa-bookmark text-secondary"></i> <label class="text-secondary">Saved Post</label> 
                    </li>
                </ul> -->