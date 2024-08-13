<!DOCTYPE html>
<html lang="en">
    
    
    <!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 06:54:49 GMT -->
    
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super Admin Module</title>
    <!-- plugins:css -->
    {{-- <link rel="stylesheet" href="../../vendors/feather/feather.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/feather/feather.css') }}">
    <!-- <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css"> -->
    <!-- <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css"> -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- {{-- <link rel="stylesheet" href="../../css/vertical-layout-light/style.css"> --}} -->
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css"/>
    <style>
        p {
    
    font-size: 20px !important;
}
        .dataTables_wrapper .dataTable thead .sorting:before, .dataTables_wrapper .dataTable thead .sorting_asc:before,.dataTables_wrapper .dataTable thead .sorting:after, .dataTables_wrapper .dataTable thead .sorting_asc:after{
                    visibility: hidden;
                }
                table,tr,td,th{
                    border:2px solid black;
                    border-collapse:collapse;
                    font-size:20px;
                }
                .ts{
                    line-height:34px;
                    font-size:21px;
                }

                #cnt{
                    line-height:34px;
                    font-size:21px;
                }
                .txt-size{
                    font-size:20px;
                }
                table.dataTable tbody td {
    padding: 8px 10px;
    word-wrap: break-word;
    min-width: 160px;
    max-width: 160px;
}
.cmn{
    margin:0 auto;
}
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <style>
                    .navbar .navbar-brand-wrapper .navbar-brand img {
                   
                    height: 140px !important;
                    width: 120px !important;
                    padding: 20px 0px !important;
                    
                }
                td.answer {
  max-width: 500px; /* set the maximum width for the answer column */
  overflow-wrap: break-word; 
  white-space: revert; /* wrap the text within the column */
}
td.answer2 {
  max-width: 500px; /* set the maximum width for the answer column */
  overflow-wrap: break-word; 
  white-space: break-spaces; /* wrap the text within the column */
}

                </style>
                <a class="navbar-brand brand-logo me-5" href="/template"><img src="{{ asset('images/logo.png') }}" class="me-2" alt="logo" height="400px" width="60px"/></a>
                
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
                <!-- <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul> -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <!-- <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('images/icon.png') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i> Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i> Logout
                            </a>
                        </div>
                    </li> -->
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">

                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/template">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/super-admins-list">
                            <i class="icon-cog menu-icon"></i>
                            <span class="menu-title">Admins</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/users">
                            <i class="icon-cog menu-icon"></i>
                            <span class="menu-title">Users</span>
                        </a>
                    </li>
                   


                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    
                  
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card" style="border-radius: 25%">
                                <div class="card-body" >
                                    <p class="card-title">Advanced Table</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body bg-primary text-center">
                                                    <img src="{{ asset('images/all-admin.png') }}" alt="" height="60px" width="60px">
                                                    <br>
                                                    <h5 class="card-title mt-3">All Users :{{$arr1[0]}} </h5>
                                                  
                                                  
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body bg-warning text-center">
                                                    <img src="{{ asset('images/active-admin.png') }}" alt="" height="60px" width="60px">
                                                    <br>

                                                    <h5 class="card-title mt-3">Active Users :{{$arr1[1]}}</h5>
                                                  
                                                  
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body bg-success text-center">
                                                    <img src="{{ asset('images/inactive-admin.png') }}" alt="" height="60px" width="60px">
                                                  <br>

                                                    <h5 class="card-title mt-3">Inactive Users :{{$arr1[2]}}</h5>
                                                  
                                                </div>
                                            </div>  
                                        </div>
                                    </div>

                                    <form class="" action="/onlyusr" method="get">

                                    <div class="bg-success mt-5">

                                    <div class="col-md-4">
                                        <div class="input-group p-3">
                                        <div class="input-group-prepend">
                                                  <label class="input-group-text text-dark " for="inputGroupDate" style="height: 30px">Select Date</label>
                                                </div>
                                        <input type="date" name="date" id="cal" id="inputGroupDate">
                                            </div>
                                    </div>
                                    
                                            @if(session()->has('datee'))
                                            @php
                                                $dat=session('datee');
                                            @endphp
                                            <script>
                                                var eld={{
                                            Js::from($dat);
                                            }};
                                                document.getElementById("cal").value=eld;
                                                console.log(eld);
                                            </script>
                                        @endif
                                    <input type="submit" class="btn btn-primary m-2" name="bt" value="search">

                                        <!-- <script>
                                function alus1(){
                                    var cl=document.getElementById('cal').value;
                                $.ajax({
                                    type:"GET",
                                    url:
                                });

                            }
                              </script> -->
                                                

                                        <!-- <div class="col-md-4">
                                            <div class="dropdown show p-3">
                                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Dropdown link
                                                </a>
                                              
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                  <a class="dropdown-item" href="#">Action</a>
                                                  <a class="dropdown-item" href="#">Another action</a>
                                                  <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                              </div>
                                           
                                        </div> -->
                                        <!-- <div class="col-md-2">
                                            <div class="input-group p-3">
                                                
                                                <select class="custom-select rounded" id="inputGroupSelect01" style="height: 30px">
                                                  <option selected>Choose...</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                              </div>
                                        </div> -->
                                        <!-- <div class="col-md-2">
                                            <div class="input-group p-3">
                                                
                                                <select class="custom-select rounded" id="inputGroupSelect01" style="height: 30px">
                                                  <option selected>Choose...</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                              </div>
                                        </div> -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                       
                        
                      
                        <div class="col-md-12 grid-margin">
                        <h3 style="background-color:green; color:white; text-align:center; padding:20px; width:auto">Number of Questions And Answers Asked By Users</h3>
                            <table class="table table-dark" id="usrid">
                                <thead>
                                  <tr>
                                    <!-- <th scope="col" class="text-center">Question Id</th> -->
                                    <th scope="col" class="text-center">User Id</th>
                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col" class="text-center">Post</th>
                                    <!-- <th scope="col">Rejects</th> -->
                                    <th scope="col" class="text-center">Likes</th>
                                    <!-- <th scope="col">Category Id</th> -->
                                    <th scope="col" class="text-center">Category</th>
                                    <th scope="col" class="text-center">Answers</th>
                                  </tr>
                                </thead>
                                <tbody id="tbd">
                                @php 
                        $i=1;
                        $jk=0;
                    @endphp
            @foreach($dt as $dtt)
            @php 
                $jk=$jk+1;
      
            @endphp
            <tr>
            <!-- <td class="text-center">{{$dtt['q_id']}}</td> -->
            @php 
                $aid="qususr".$dtt['user_id'];
            @endphp
            <td class="text-center" style="font-size:20px;">{{$dtt['user_id']}}</td>
            <td class="text-center" style="font-size:20px;"> {{$dtt["user_name"]}}                  
            </td>
            <td class="answer2 text-center" style="font-size:20px;">{!!$dtt['question']!!}
            <script>
                // let quss1=document.getElementsByClassName("answer2");
                // for(let i=0;i<quss.length;i++){
                //     qus1=quss[i].firstElementChild;
                //     if(qus1 instanceof HTMLElement ){
                //         qus1.style.fontSize="20px";
                //     }
                // }
            </script>
        </td>
            <td class="text-center"><h4 style="font-size:20px;">{{$dtt['like']}}</h4></td>
            <!-- <td>{{$dtt['id']}}</td> -->
            @php 
            $cid="cat".$dtt['id'];

            @endphp
            <td class='<?php echo $cid; ?> text-center' style="font-size:20px;">{{$dtt["catagory_name"]}}</td>
                     </td>
          
                        <td class="answer text-center" >
                            @php
                                $ctt=$dtt["catagory_name"];
                                $cttid=$dtt['id'];
                                 $vlk=$dtt['qusdata']->toArray();
                                 $j=0;
                            @endphp
                           
                            @if(count($vlk)==0)

                               {{"--"}}

                                @else
                            @foreach($vlk as $vl1=>$vl2)
                                
                                @php 
                                $idd=$vl2['user_id'];
                                $i++;
                                $j++;
                                $anss=addslashes($vl2['answer']);
                                $anss=str_replace(array("\r","\n"),"",$anss);
                                $lk=$vl2['like'];
                                @endphp

                                <!-- answers,likes,users -->

                              
                                <div> <u style="cursor:pointer; display:inline-block; color:orange; font-size:21px; " class="mb-3" onclick='ans_func("<?php echo $anss; ?>",<?php echo $idd; ?>,<?php echo $lk; ?>,"<?php echo $ctt; ?>",<?php echo $cttid; ?>)'><?php echo "<br>Answer ".$j.". "; ?></u> </div>
                                 
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
                            <script>
                               
                            </script>
                                
                                @endforeach
                                @endif
                                 </td>

                                 
                                </tr>
                                    @endforeach
                                </tbody>
                              </table>

                              <div class="grid-margin mt-3">
                                    <h3 style="background-color:green; color:white; text-align:center; padding:20px; width:auto">List Of All Users</h3>
                              <table class="table col-md-12  table-dark">
                              <thead>
                            <tr>
                            <th scope="col" class="text-center">user id</th>
                            <th scope="col" class="text-center">User Name</th>
                            <th scope="col" class="text-center">Science</th>
                            <th scope="col" class="text-center">Trending</th>
                            <th scope="col" class="text-center">Sports</th>
                            <th scope="col" class="text-center">Programming</th>
                            <!-- <th scope="col" class="text-center">Education</th> -->
                            <th scope="col" class="text-center">Technology</th>
                            <th scope="col" class="text-center">Answers</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($arri as $dtk)
                                <tr>
                                    <td class="text-center" style="font-size:20px;">{{$dtk['id']}}</td>
                                    <td class="text-center"><u onclick='mdl1(<?php echo $dtk["id"];?>,<?php echo $dtk["prvid"];?>)' style="font-size:20px;">{{$dtk['nm']}}</u></td>
                                    <td class="text-center" style="font-size:20px;">{{$dtk['num1']}}

                                    @if($dtk['prvid'] == "0")

                                    <button data-mail="{{ $dtk['eml'] }}" data-cid="1" value="{{ $dtk['id'] }}" id="Science" class="btn btn-primary text-center d-block mt-4 common-class mudi cmn">
                                Make Admin
                            </button>
                    @elseif($dtk['prvid'] == "1")                                                                   
    <button data-mail="{{ $dtk['eml'] }}" disabled data-cid="1" value="{{ $dtk['id'] }}" id="Science" class="btn btn-primary text-center d-block mt-4 common-class btn-success cmn">
        Privileged
    </button>
    @else
    <button data-mail="{{ $dtk['eml'] }}" disabled data-cid="1" value="{{ $dtk['id'] }}" id="Science" class="btn btn-primary text-center d-block mt-4 common-class mudi cmn">
        Make Admin
    </button>
@endif
                                    </td>
                                    <td class="text-center" style="font-size:20px;">{{$dtk['num2']}}
                                    @if($dtk['prvid'] == "0")
                                    <button data-mail="{{$dtk['eml']}}" data-cid="2" value="{{$dtk['id']}}" id="Trending"  class="btn btn-primary text-center d-block mt-4 common-class cmn"> Make Admin </button>
                                    @elseif($dtk['prvid'] == "2") 
                                    <button data-mail="{{$dtk['eml']}}" disabled data-cid="2" value="{{$dtk['id']}}" id="Trending"  class="btn btn-primary text-center d-block mt-4 common-class btn-success cmn"> Privileged </button>
                                    @else
                                    <button data-mail="{{ $dtk['eml'] }}" disabled data-cid="2" value="{{ $dtk['id'] }}" id="Trending" class="btn btn-primary text-center d-block mt-4 common-class mudi cmn">
                                    Make Admin 
                                    @endif
                                    </td>
                                    <td class="text-center" style="font-size:20px;">{{$dtk['num3']}}
                                    @if($dtk['prvid'] == "0")
                                    <button data-mail="{{$dtk['eml']}}" data-cid="3" value=<?php echo $dtk['id'];?> id="Sports" class="btn btn-primary text-center d-block mt-4 common-class cmn"> Make Admin </button>
                                    @elseif($dtk['prvid'] == "3")
                                    <button data-mail="{{$dtk['eml']}}" disabled data-cid="3" value=<?php echo $dtk['id'];?> id="Sports" class="btn btn-primary text-center d-block mt-4 common-class btn-success cmn"> Privileged </button>
                                    @else
                                    <button data-mail="{{$dtk['eml']}}" disabled data-cid="3" value=<?php echo $dtk['id'];?> id="Sports" class="btn btn-primary text-center d-block mt-4 common-class cmn">Make Admin </button>
                                    @endif
                                    </td>
                                    <td class="text-center" style="font-size:20px;">{{$dtk['num4']}}
                                    @if($dtk['prvid'] == "0")
                                    <button data-mail="{{$dtk['eml']}}" data-cid="4" value="{{$dtk['id']}}" id="Programming" class="btn btn-primary text-center d-block mt-4 common-class cmn"> Make Admin </button>
                                    @elseif($dtk['prvid'] == "4")
                                   
                                    <button data-mail="{{$dtk['eml']}}" disabled data-cid="4" value="{{$dtk['id']}}" id="Programming" class="btn btn-primary text-center d-block mt-4 common-class btn-success cmn"> Privileged </button>
                                     @else
                                    
                                    <button data-mail="{{$dtk['eml']}}" disabled data-cid="4" value="{{$dtk['id']}}" id="Programming" class="btn btn-primary text-center d-block mt-4 common-class cmn"> Make Admin  </button>
                                    @endif
                                     </td>
                                    
                                     <td class="text-center" style="font-size:20px;">{{$dtk['num6']}}
                                     @if($dtk['prvid'] == "0")
                                     <button data-mail="{{$dtk['eml']}}" data-cid="6" value="{{$dtk['id']}}" id="Technology" class="btn btn-primary text-center d-block mt-4 common-class cmn"> Make Admin </button>
                                     @elseif($dtk['prvid'] == "6")
                                     <button data-mail="{{$dtk['eml']}}" disabled data-cid="6" value="{{$dtk['id']}}" id="Technology" class="btn btn-primary text-center d-block mt-4 common-class btn-success cmn"> Privileged </button>
                                     @else
                                     <button data-mail="{{$dtk['eml']}}" disabled data-cid="6" value="{{$dtk['id']}}" id="Technology" class="btn btn-primary text-center d-block mt-4 common-class cmn"> Make Admin </button>
                                    @endif
                                     </td>
                                    <td class="text-center" style="font-size:20px;">{{$dtk['num7']}}</td>

                                    @if($dtk['prvid'] != "0")
                                        <script>
                                            var elm=document.getElementsByClassName('mybt');
                                            for(let i=0;i<=3;i++){
                                                elm[0].disabled=true;
                                                console.log(elm[i]);
                                            }
                                        </script>
                                    @endif
                                </tr>
                                
                            @endforeach
                        </tbody>
                              </table>
                                </div>

                              <!-- <script>
                                            function alus(){
                                                var cl=document.getElementById('cal').value;
                                           
                                        //    alert(cl);
                                           $.ajax({
                                             type:"GET",
                                            url:'/onlyusr/'+cl,
                                            success:function(data){
                                                document.getElementById("tbd").innerHTML=
                                                var dt=data.res;
                                              console.log(dt);
                                              var ht='';
                                              if(dt.length >0){
                                                  for(let i=0;i<dt.length;i++){
                                                    console.log(dt[i]['qusdata']);
                                                    ht+=`<tr>
                                                    <td>`+dt[i]['q_id']+`</td>
                                                    <td>`+dt[i]['user_name']+`</td>
                                                    <td>`+dt[i]['question']+`</td>
                                                    <td>`+dt[i]['like']+`</td>
                                                    <td>`+dt[i]['name']+`</td>
                                                    <td>`+dt[i]['qusdata']['answer']+`</td>
                                                    </tr>`
                                                   
                                                }
                                               } 
                                               document.getElementById("tbd").innerHTML=ht;
                                            },
                                            error:function(e){
                                                 console.log(e.responseText);
                                            }
                                             });
                                        }
                                        </script> -->
                        </div>
                    </div>
                </div>

                <!-- content-wrapper ends -->
              
                    
                 

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary" style="width: 800px !important;">
                  
                    <!-- Modal body -->
                    <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6 bg-secondary pt-4" style="width:800px;">
                            <div class="card text-center" style="align-items: center; background-color:currentcolor;">
                                <img class="" src="{{ asset('images/profile-icon.png') }}" alt="Card image cap" height="100px" width="100px">
                                <div class="card-body" style="color:cornsilk;">
                                  
                            <h5 class="card-title" style="margin-bottom: 5px !important; color: aqua; display:none;"><i class="fa-solid fa-user-tie" style=""></i> &nbsp; <span id="id1"></span> </h5>
                            <h5 class="card-title" style="margin-bottom: 5px !important; color: aqua;"><i class="fa-solid fa-user-tie" style=""></i> &nbsp; <span id="nm1"></span> </h5>
                            <h6><i class="fa-solid fa-envelope" style="color: bisque;"></i> &nbsp; <span id="eml1"></span></h6>
                            <p class="card-text" style="color: cornflowerblue;">Offer mail to become an admin by Answerbag Super Admin</p>
                                  
                            <hr style="background:rgb(239, 51, 51); height:2px;">
                            <a class="btn btn-outline-primary px-2 mb-3" style="width: 140px; font-weight:bold; color: coral"> <span id="prev"></span> &nbsp; <i class="fa-solid fa-circle-check" style="color: #26e123;"></i></a>

                            <br>
                            <h5 class="card-title" style="margin-bottom: 5px !important; color: aqua; display:none;"><i class="fa-solid fa-user-tie" style=""></i> &nbsp; <span id="pid"></span> </h5>
                            <br>
                            <!-- <a  href="#"  class="btn btn-danger">Send Admin Invitation</a> -->
                            <button class="btn btn-danger" id="bt" style="padding:1rem;" onclick="inv(document.getElementById('id1').innerText,document.getElementById('eml1').innerText,document.getElementById('prev').innerText)">Send Admin Invitation</button> 
                                </div>
                              </div>
                        </div>

                        <!-- <div class="col-md-6 bg-warning p-4">
                            <form class="form">
                                @csrf
                                <h4>Mail From</h4>
                                <hr style="background: orange;">
                               
                                <div class="form-outline mb-4">
                                  <input type="text" id="form4Example1" class="form-control" />
                                  <label class="form-label mt-3" for="form4Example1">Name</label>
                                </div>
                              
                                Email input --comment line
                                <div class="form-outline mb-4">
                                  <input type="email" id="form4Example2" class="form-control" />
                                  <label class="form-label mt-3" for="form4Example2">Email address</label>
                                </div>
                              
                                Message input --comment line
                                <div class="form-outline">
                                  <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                  <label class="form-label mt-3" for="form4Example3">Message</label>
                                </div>
                              
                                Checkbox --comment line
                                <div class="form-check d-flex justify-content-center ">
                                  <input class="form-check-input " type="checkbox" value="" id="form4Example4" checked />
                                  <label class="form-check-label" for="form4Example4">
                                    Send me a copy of this message
                                  </label>
                                </div>
                              
                                Submit button --comment line 
                                <button type="submit" class="btn btn-primary btn-block mb-1">Send</button>
                              </form>
                        </div> -->
                     </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                      <a href="#" target="_blank" class="btn btn-primary">Save Changes</a>
                    </div> -->
                    
                  </div>
                </div>
              </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

   
<!-- ---------------------------------------- -->
<div class="modal" id="myModal1">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary" style="width: 800px !important;">
                  
                    <!-- Modal body -->
                    <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6 bg-secondary px-1" style="width:800px;">
                            <div class="card text-center" style="align-items: center; background-color:midnightblue;">
                                <div class="bdy m-5" style="background-color: midnightblue;">
                                <h4 id="id2" class="text-center mb-4" style="color:white; display:none"></h4>
                                <h4 id="nm2" class="text-center mb-4" style="color:white"></h4>
                                <h4 id="eml2" class="text-center mb-4" style="color:white; display:none"></h4>
                                <h4 id="pvid2" class="text-center mb-4" style="color:white; display:none"></h4>
                                <h4 id="pv2" class="text-center mb-4" style="color:white; display:none"></h4>
                               <h4 id="cnt" style="color:white;" class="mb-4"></h4>
                               <h4 id="lk2" class="mb-4"  style="color:white"></h4>
                                

                               </div>
                              </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                    
                        <div class="modal" id="myModal3">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary" style="width: 800px !important;">
                        <div class="modal-body">
                     <div class="row">
                        <div class="col-md-6 bg-secondary pt-4" style="width:800px;">
                            <div class="card text-center" style="align-items: center; background-color:currentcolor;">
                                <img class="" src="{{ asset('images/profile-icon.png') }}" alt="Card image cap" height="100px" width="100px">
                                <div class="card-body" style="color:cornsilk;">
                                  
                            <h5 class="card-title" style="margin-bottom: 5px !important; color: aqua; display:none"><i class="fa-solid fa-user-tie"></i> &nbsp; <span id="id3" ></span> </h5>
                            <h5 class="card-title" style="margin-bottom: 5px !important; color: aqua;"><i class="fa-solid fa-user-tie" style=""></i> &nbsp; <span id="nm3"></span> </h5>
                            <h6><i class="fa-solid fa-envelope" style="color: bisque;"></i> &nbsp; <span id="eml3"></span></h6>
                            <p class="card-text" style="color: cornflowerblue;">Offer mail to become an admin by Answerbag Super Admin</p>
                                  
                            <hr style="background:rgb(239, 51, 51); height:2px;">
                            <!-- <a class="btn btn-outline-primary px-2 mb-3" style="width: 140px; font-weight:bold; color: coral"> <span id="prev"></span> &nbsp; <i class="fa-solid fa-circle-check" style="color: #26e123;"></i></a> -->
                            <h3 style="color:#00f60b; font-weight: bold;">Send Admin Invitation On</h3>

                            <br>
                            <h5 class="card-title" style="margin-bottom: 5px !important; color: aqua; display:none;"><i class="fa-solid fa-user-tie" style=""></i> &nbsp; <span id="pid3"></span> </h5>
                            <br>
                            <!-- <a  href="#"  class="btn btn-danger">Send Admin Invitation</a> -->


                            <button class="btn mx-2 mybt" id="btv1"style="padding:1rem;" onclick="inv1(this.id,document.getElementById('id3').innerText,document.getElementById('eml3').innerText,'Science')">Science</button> 
                            <button class="btn mx-2 mybt" id="btv2" style="padding:1rem;" onclick="inv1(this.id,document.getElementById('id3').innerText,document.getElementById('eml3').innerText,'Trending')">Trending</button> 
                            <button class="btn mx-2 mybt" id="btv3" style="padding:1rem;" onclick="inv1(this.id,document.getElementById('id3').innerText,document.getElementById('eml3').innerText,'Sports')">Sports</button> 
                            <br> <br><br>
                            <button class="btn mx-2 mybt" id="btv4" style="padding:1rem;" onclick="inv1(this.id,document.getElementById('id3').innerText,document.getElementById('eml3').innerText,'Programming')">Programming</button> 
                            <!-- <button class="btn btn-danger mx-2" id="btv5" style="padding:1rem;" onclick="inv1('btv5',document.getElementById('id3').innerText,document.getElementById('eml3').innerText)">Education</button>  -->
                            <button class="btn mx-2 mybt" id="btv6" style="padding:1rem;" onclick="inv1(this.id,document.getElementById('id3').innerText,document.getElementById('eml3').innerText,'Technology')">Technology</button> 
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                        
                           
                                    <script>
                               function func_id()
                            {    alert("herllo");

                            }

                            </script>
                        <script>
                            // Get all the buttons
var buttons = document.querySelectorAll('.common-class');

// Function to handle button click
function handleClick(event) {
  var clickedButton = event.target;
  
//   var userValue = clickedButton.val();
var value = clickedButton.getAttribute('value');
var cname = clickedButton.getAttribute('id'); 
var mail = clickedButton.getAttribute('data-mail'); 
var cid = clickedButton.getAttribute('data-cid'); 
       
  var clickedRow = clickedButton.parentNode.parentNode;
  
        $.ajax({
    type: "GET",
    url: "/adm_hit/" + value + "/" + cname + "/" + cid,
    success: function(data) {
        // Handle the successful response
    },
    error: function(e) {
        console.log(e.responseText);
    }
});


  // Disable all buttons in the clicked row
  var buttonsInRow = clickedRow.querySelectorAll('.common-class');
  buttonsInRow.forEach(function(button) {
    if (button !== clickedButton) {
        
      button.disabled = true;
      clickedButton.disabled = true;
      clickedButton.style.backgroundColor = 'green';
    //   alert("wh");
//       $.ajax({
//     type: "GET",
//     url: "/adm_hit/" + value + "/" + cname + "/" + cid,
//     success: function(data) {
//         // Handle the successful response
//     },
//     error: function(e) {
//         console.log(e.responseText);
//     }
// });

    }

  });
}

// Attach click event listener to each button
buttons.forEach(function(button) {
  button.addEventListener('click', handleClick);
});

                        </script>    
                           
<!-- ---------------------------------------- -->
    <!-- container-scroller -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- plugins:js -->
    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
    {{-- <script src="../../vendors/js/vendor.bundle.base.js"></script> --}}
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- <script src="../../vendors/chart.js/Chart.min.js"></script>
    <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../../js/dataTables.select.min.js"></script> -->

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>


  
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../js/dashboard.js"></script>
    <script src="../../js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
            <script>
        $(document).ready(function() {
            $('#usrid').DataTable();
        } );
        
        </script>


    <script>
       

       function mdl(id,vl,cd,pid) {
        // alert("edgsh");
            $('#myModal').modal('show');
           
            $.ajax({
                        type:'GET',
                        url:'/mdlusr/'+vl+'/'+cd,
                        success:function(data){
                        //    console.log(data.rs);
                        // $("#nm").value="fg";
                        document.getElementById("id1").innerText=data.res.u_id;
                        document.getElementById("nm1").innerText=data.res.user_name;
                        document.getElementById("eml1").innerText=data.res.email;
                        document.getElementById("prev").innerText=data.rs.catagory_name;
                        document.getElementById("pid").value=pid;

                        if(document.getElementById("pid").value!=0){
                            document.getElementById("bt").disabled=true;
                            document.getElementById("bt").innerText="Already Previleged";
                        }
                        else{
                            document.getElementById("bt").disabled=false;
                            document.getElementById("bt").innerText="Send Admin Invitation";
                        }
                        // console.log(document.getElementById("pid").innerText);
                        },
                        error:function(e){
                            console.log(e.responseText);
                        }
                    });
          }

          function mdl1(id,vl) {
        // alert("edgsh");
      
       // Enable all buttons with the common class
       $('.mybt').prop('disabled', false);
if(vl!=0){
    $('.mybt').prop('disabled', true);
}

$('.mybt').removeClass('btn-success');
$('.mybt').addClass('btn-danger');

            $('#myModal3').modal('show');
           
            $.ajax({
                        type:'GET',
                        url:'/mdlusr1/'+id,
                        success:function(data){
                        //    console.log(data.rs);
                        // $("#nm").value="fg";
                        document.getElementById("id3").innerText=data.res.u_id;
                        document.getElementById("nm3").innerText=data.res.user_name;
                        document.getElementById("eml3").innerText=data.res.email;
                        

                    //        var nl=document.getElementById("id3")
                    //     setTimeout(() => {
                    //  nl.value = data.res.user_name;
                    //  }, 2000);
                        // var nl1=document.getElementById("btv1");
                        //         // console.log(nl);
                        //         nl1.removeAttribute('id');
                        //         var tvt="btv"+data.res.u_id+"1";
                        //         // alert(tvt);
                        //         nl1.setAttribute('id',tvt);

                                
                        // console.log(document.getElementById("id3").innerText);
                        // document.getElementById("prev").innerText=data.rs.catagory_name;
                        // document.getElementById("pid").value=pid;

                        // if(document.getElementById("pid").value!=0){
                        //     document.getElementById("bt").disabled=true;
                        //     document.getElementById("bt").innerText="Already Previleged";
                        // }
                        // else{
                        //     document.getElementById("bt").disabled=false;
                        //     document.getElementById("bt").innerText="Send Admin Invitation";
                        // }
                        // console.log(document.getElementById("pid").innerText);
                        },
                        error:function(e){
                            console.log(e.responseText);
                        }
                    });
          }

          function ans_func(vl1,vl2,vl3,vl4,vl5){
            // console.log(vl1);
                                $('#myModal1').modal('show');
                                document.getElementById("cnt").innerHTML=vl1;
                                el=document.getElementById("cnt").firstChild;
                                // console.log(el);
                                if(el instanceof HTMLElement){

                                    el.classList.add("ts");
                                }
                                document.getElementById("lk2").innerText="Likes - "+vl3;
                                $.ajax({
                                    method:"GET",
                                    url:'/gtuser/'+vl2,
                                    success:function(data){
                                        // console.log(data.res);
                                        document.getElementById("id2").innerText=data.res.u_id;
                                        document.getElementById("nm2").innerText=data.res.user_name;
                                        document.getElementById("eml2").innerText=data.res.email;
                                        document.getElementById("pv2").innerText=vl4;
                                        document.getElementById("pvid2").value=vl5;
                                        // console.log(data.res.u_id);
                                        // console.log(data.res.user_name);
                                    },
                                    error:function(e){
                                        console.log(e)
                                    }
                                });
                            }
        
          function inv(vl1,vl2,vl3){
               $.ajax({
                method:"GET",
                url:"/inv_hit/"+vl2+"/"+vl3,
                success:function(data){
                    document.getElementById("bt").innerText="Done";
                    document.getElementById("bt").disabled=true;
                    console.log(data.res);
                },
                error:function(e){
                    console.log(e.responseText);
                }
               });
          }

          function inv1(vl1,vl2,vl3,vl4){
            console.log(vl1);
            document.getElementById(vl1).classList.remove('btn-danger');
            document.getElementById(vl1).classList.add('btn-success');
              document.getElementById(vl1).disabled=true;

            //   var nl1=document.getElementById(vl1);
            //   console.log(nl1);
            //                     // console.log(nl);
            //                     nl1.removeAttribute('id');
            //                     var tvt="btv1";
            //                     // alert(tvt);
            //                     nl1.setAttribute('id',tvt);
            console.log(vl3,vl4);
              $.ajax({
                  method:"GET",
                  url:"/inv_hit/"+vl3+"/"+vl4,
                  success:function(data){
                    console.log(data.res);
                },
                error:function(e){
                    console.log(e.responseText);
                }
               });
          }

          function mk_adm(vl1,vl2,vl3,vl4){
            // console.log(vl3);
               $.ajax({
                type:"GET",
                url:"/adm_hit/"+vl2+"/"+vl3+"/"+vl4,
                success:function(data){
                    document.querySelectorAll("."+vl1).forEach(el=>el.innerText="Previleged");
                    document.querySelectorAll("."+vl1).forEach(el=>el.disabled=true);
                    cl="."+vl1;
                    nmb=data.ct.length;
                    for(let i=0;i<nmb;i++){
                        cls="bt"+vl2+data.ct[i].id;
                        cls="."+cls;
                        ln=document.querySelectorAll(cls);
                        if(ln.length>0){
                            if(cl!=cls){
                                // console.log("diff");
                                // console.log(cl,cls);
                                document.querySelectorAll(cls).forEach(el=>el.disabled=true);
                            }
                            // else{
                            //     console.log("same");
                            //     console.log(cl,cls);
                            // }
                            // document.querySelectorAll(cls).forEach(el=>el.innerText="Previleged");
                        }
                    }
                    // console.log(data.ct[0]);
                },
                error:function(e){
                    console.log(e.responseText);
                }
               });
          }

        
            </script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 06:55:11 GMT -->

</html>