<?php use Illuminate\Support\Carbon; ?>
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



    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" class="rel"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" class="rel">
   
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css"/>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                .dataTables_wrapper .dataTable thead .sorting:before, .dataTables_wrapper .dataTable thead .sorting_asc:before,.dataTables_wrapper .dataTable thead .sorting:after, .dataTables_wrapper .dataTable thead .sorting_asc:after{
                    visibility: hidden;
                }

                td{
                    height:3rem;
                    font-size:3rem;
                }
                </style>
                <a class="navbar-brand brand-logo me-5" href="/template"><img src="{{ asset('images/logo.png') }}" class="me-2" alt="logo" height="400px" width="60px"/></a>
                
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
                
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
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>-->
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
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body bg-primary text-center">
                                                    <img src="{{ asset('images/all-admin.png') }}" alt="" height="60px" width="60px">
                                                    <br>
                                                    <h5 class="card-title mt-3">All admins : {{$arr[0]}}</h5>
                                                  
                                                  
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body bg-success text-center">
                                                    <img src="{{ asset('images/active-admin.png') }}" alt="" height="60px" width="60px">
                                                    <br>

                                                    <h5 class="card-title mt-3">Active admins : {{$arr[1]}}</h5>
                                                  
                                                  
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body bg-warning text-center">
                                                    <img src="{{ asset('images/inactive-admin.png') }}" alt="" height="60px" width="60px">
                                                  <br>

                                                    <h5 class="card-title mt-3">Inactive admins : {{$arr[2]}}</h5>
                                                  
                                                  
                                                </div>
                                            </div>  
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body bg-danger text-center">
                                                    <img src="{{ asset('images/banned.png') }}" alt="" height="60px" width="60px">
                                                  <br>

                                                    <h5 class="card-title mt-3">Banned admins : {{$arr[3]}}</h5>
                                                  
                                                  
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 grid-margin stretch-card">
                            <button type="button" class="btn btn-success btn-lg text-white font-weight-bold">Make An Admin</button>
                           
                        </div> -->
                        <!-- <div class="col-md-3 mt-2">
                            <button class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">See Banned Admin</button>
                           
                        </div>
                        <div class="col-md-4"> -->
<!--                         
<div class="input-group mb-3">
    <input height="45px;" type="text" class="form-control" placeholder="Recipient's username" aria-label="Search Admin...." aria-describedby="basic-addon2" style="border-radius:5%;">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass-plus fa-3x"></i></button>
    </div>
  </div> -->
                        <!-- </div> -->
                        <div class="col-md-12 grid-margin">
                            
                           <ul class="nav nav-tabs" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All Admins</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Inactive Admins</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Banned Admins</a>
	</li>
</ul><!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="tabs-1" role="tabpanel">
		<table class="table table-dark" id="tabs-11" >
            <thead>
              <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Last Active  (yyyy-mm-dd)</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php
            // $dd=Carbon::now()->format('Y-m-d');
            //         $d=date_create($dd);
                    // $d1=date_create($data->last_active);
                    // $d_diff=date_diff($d1,$d);
                    // print_r($d);
                    ?>
                @if(isset($dtt))
                @foreach($dtt as $data)
              <tr>
                    <td class="text-center">{{$data->a_id}}</td>
                    <td class="text-center">{{$data->admin_name}}</td>
                    <td class="text-center">{{$data->email}}</td>
                    @if($data->last_active==null)
                    <td class="text-center">---</td>
                    @else
                    <td class="text-center">{{$data->last_active}}</td>
                    @endif
                    <?php
                    $dd=Carbon::now()->format('Y-m-d');
                    $d=date_create($dd);
                    $d1=date_create($data->last_active);
                    $d_diff=date_diff($d1,$d);
                    // print_r($d);
                    // print_r($d1);
                     ?>
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
                     <script>
                                    var d_dif={{
                                        Js::from($d_diff->days);
                                    }};

                                    var id={{
                                        Js::from($data->a_id);
                                    }};
                                    console.log(d_dif);
                                if(d_dif >=60){
                                    // alert("dg");
                                    $.ajax({
                                        type:'GET',
                                        url:'/chng_bann/'+id,
                                    success:function(data){
                                    console.log(data.res);
                                    },
                                    error:function(e){
                                        console.log(e.responseText)
                                    }
                                    })
                                }
                                    </script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

                    @php
                        $vl=$data->a_id;
                        $vl1="rvk".$vl;
                    @endphp
                    <td class="text-center"> <button class="btn btn-primary" id="<?php echo $vl1; ?>" onclick="rvk_func('<?php echo $vl1; ?>',<?php echo $vl; ?>)" style="padding:1rem;">Revoke As Admin</button> </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
	</div>
	<div class="tab-pane" id="tabs-2" role="tabpanel">
		<table class="table table-dark" id="tabs-21">
            <thead>
              <tr>
                <th scope="col" class="text-center">Profile</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Action1</th>
                <th scope="col" class="text-center">Action2</th>
              </tr>
            </thead>
            <tbody>
                @foreach($dtt as $data)
                @if($data->is_active==0 && $data->is_banned==0)
              <tr>
                    <td class="text-center">{{$data->a_id}}</td>
                    <td class="text-center">{{$data->admin_name}}</td>
                    <td class="text-center">{{$data->email}}</td>
                    @php
                        $vl=$data->a_id;
                        $vl1="bann".$vl;
                        $vl2="rvk".$vl;
                    @endphp
                    <td class="text-center"> <button class="btn btn-primary me-3" id="<?php echo $vl1; ?>" onclick="bann_func('<?php echo $vl1; ?>',<?php echo $vl; ?>)"  style="padding:1rem;">Bann</button> </td>
                    <td class="text-center"> <button class="btn btn-primary" id="<?php echo $vl2; ?>" onclick="rvk_func('<?php echo $vl2; ?>',<?php echo $vl; ?>)"  style="padding:1rem;">Revoke As Admin</button> </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
         
          
	</div>
	<div class="tab-pane" id="tabs-3" role="tabpanel">
		
            <table class="table table-dark" id="tabs-31">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">Profile</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($dtt as $data)
                @if($data->is_banned==1)
                  <tr>
                  <td class="text-center">{{$data->a_id}}</td>
                    <td class="text-center">{{$data->admin_name}}</td>
                    <td class="text-center">{{$data->email}}</td>
                    @php
                        $vl=$data->a_id;
                        $vl1="unbann".$vl;
                    @endphp
                    <td class="text-center"> <button class="btn btn-primary" id="<?php echo $vl1; ?>" onclick="unbann_func('<?php echo $vl1; ?>',<?php echo $vl; ?>)"  style="padding:1rem;">Remove Bann</button> </td>
                  </tr>
                  @endif
                @endforeach
                </tbody>
              </table>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
	</div>
</div>
                                
                        </div>
                        <div class="col-md-12 grid-margin">

                            
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Banned Users</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"><img src="{{ asset('images/profile-icon.png') }}" alt="" height="60px" width="60px"></th>
                                    <td>Mark</td>
                                    <td>🟢</td>
                                    <td>@mdo</td>
                                  </tr>
                                  
                                  <tr>
                                    <th scope="row"><img src="{{ asset('images/profile-icon.png') }}" alt="" height="60px" width="60px"></th>
                                    <td>Larry</td>
                                    <td>🟢</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
   
   
      
        <!-- <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>   -->
 
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css"/> -->

<!-- JavaScript -->

    <script>
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>

    <!-- container-scroller -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- plugins:js -->
    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
   <script src="../../vendors/js/vendor.bundle.base.js"></script> 
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



    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script> 
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../js/dashboard.js"></script>
    <script src="../../js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabs-11').DataTable();
            $('#tabs-21').DataTable();
            $('#tabs-31').DataTable();
        } );
        
        </script>
        <script>
              function rvk_func($id,$vl){
                  document.getElementById($id).innerText="Revoked";
                  document.getElementById($id).disabled=true;
                $.ajax({
                        type:'GET',
                        url:'/rvkadm/'+$vl,
                        success:function(data){
                            // alert("dh");
                        },
                        error:function(e){
                            console.log(e.responseText);
                        }
                    });
            }

            function bann_func($id,$vl){
                  document.getElementById($id).innerText="Banned";
                  document.getElementById($id).disabled=true;
                $.ajax({
                        type:'GET',
                        url:'/bannadm/'+$vl,
                        success:function(data){
                            // alert("dh");
                        },
                        error:function(e){
                            console.log(e.responseText);
                        }
                    });
            }

            function unbann_func($id,$vl){
                  document.getElementById($id).innerText="Bann Removed";
                  document.getElementById($id).disabled=true;
                $.ajax({
                        type:'GET',
                        url:'/unbannadm/'+$vl,
                        success:function(data){
                            // alert("dh");
                        },
                        error:function(e){
                            console.log(e.responseText);
                        }
                    });
            }
            </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 06:55:11 GMT -->

</html>