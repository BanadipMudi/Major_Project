<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 06:54:49 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> SETTING</title>
    <!-- plugins:css -->
    <!-- <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css"> -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../../js/select.dataTables.min.css"> -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('nancy_css\style.css')}}">
    <!-- endinject -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <a class="navbar-brand brand-logo me-5" href="index.html"><img
                            src="{{asset('nancy_css\images/logo.png') }}" class="me-2"
                            alt="logo" /></a>
               
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <h3 class="text-danger" style="font-family: 'Times New Roman', Times, serif;"><b>SETTING</b>
                        </h3>

                    </li>
                </ul>
                <!-- <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="fa-solid fa-magnifying-glass text-danger"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul> -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <i class="fa-regular fa-bell text-danger" style="font-size: 22px;"></i>
                    </li>

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('nancy_css\images\avatar.jpg') }}" alt="profile" />
                            <span class="text-danger mx-2">{{session('admin_name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <!-- <a class="dropdown-item">
                                <i class="fa-solid fa-user menu-icon text-warning"></i>
                                <span class="text-warning">Edit Profile</span>
                            </a> -->
                            <a class="dropdown-item" href="/logout">
                                <i class="fa-solid fa-arrow-right-from-bracket text-danger "></i>
                                <span class="text-danger">Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/dashboard">
                            <i class="fa-solid fa-bars menu-icon" style="font-size: 18px;"></i>
                            <span class="menu-title" style="font-size: 18px;"><b>DASHBOARD</b></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/questions">
                            <i class="fa-regular fa-pen-to-square menu-icon" style="font-size: 18px;"></i>
                            <span class="menu-title" style="font-size: 18px;"><b>QUESTIONS</b> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/answers">
                            <i class="fa-regular fa-comment menu-icon" style="font-size: 18px;"></i>
                            <span class="menu-title" style="font-size: 18px;"><b>ANSWERS</b> </span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/reports">
                            <i class="fa-solid fa-user-group menu-icon" style="font-size: 18px;"></i>
                            <span class="menu-title" style="font-size: 18px;"><b>REPORTS</b> </span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/setting">
                            <i class="fa-solid fa-gear menu-icon" style="font-size: 18px;"></i>
                            <span class="menu-title" style="font-size: 18px;"><b>SETTING</b></span>

                        </a>
                    </li>


                </ul>
            </nav>
            <!-- partial -->
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">

                    <!-- ----------  main dashboard --------  -->
                    <div class="row ">
                        <div class="col-md-12 grid-margin ">
                            <div class="card bg-white  p-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pt-3 stretch-card transparent">
                                            <div class="card card-tale ">
                                                <a href="" style="text-decoration:none;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-block text-center p-4">
                                                                    <i class="fa-solid fa-user text-white"
                                                                        style="font-size: 70px;"></i>
                                                                    <h4 class="pt-3 text-white"
                                                                        style="font-size: 30px;font-family: 'Times New Roman', Times, serif;">
                                                                        EDIT PROFILE</h4>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- <p class="mb-4">Today’s Bookings</p>
                                                    <p class="fs-30 mb-2">4006</p>
                                                    <p>10.00% (30 days)</p> -->
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-4 mb-4 stretch-card transparent pt-3">
                                            <div class="card card-dark-blue">
                                                <a href="/admin/choice" style="text-decoration:none;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-block text-center p-4">
                                                                    <i class="fa-solid fa-pen text-white"
                                                                        style="font-size: 70px;"></i>
                                                                    <h4 class="pt-3 text-white"
                                                                        style="font-size: 30px;font-family: 'Times New Roman', Times, serif;">
                                                                        CHANGE CATEGORY</h4>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                                        <div class="col-md-6 mb-4 stretch-card transparent pt-3">
                                            <div class="card card-light-danger">
                                                <a href="/logout" style="text-decoration:none;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="d-block text-center p-4">
                                                                    <i class="fa-solid fa-arrow-right-from-bracket text-white"
                                                                        style="font-size: 70px;"></i>
                                                                    <h4 class="pt-3 text-white"
                                                                        style="font-size: 30px;font-family: 'Times New Roman', Times, serif;">
                                                                        LOG OUT</h4>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>

                    </div>
                    <!-- ----------  main dashboard --------  -->


                </div>

            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- plugins:js -->
    <!-- <script src="../../vendors/js/vendor.bundle.base.js"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- <script src="../../vendors/chart.js/Chart.min.js"></script>
    <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../../js/dataTables.select.min.js"></script> -->

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script> -->
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../js/dashboard.js"></script>
    <script src="../../js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 06:55:11 GMT -->

</html>