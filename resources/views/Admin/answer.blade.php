<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> ANSWERS</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('nancy_css\style.css') }}">
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    th {
        padding: 10px 17px !important;
        border-top: 1px solid black !important;

    }

    td {
        border-bottom: 1px solid black !important;
    }

    .dataTables_filter {
        font-size: 20px !important;
    }

    th h4 {
        font-size: 19px !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
        padding: 0px 15px !important;
        text-align: center !important;
    }

    td {
        padding: 10px 20px !important;
        font-size: 16px !important;
    }
    </style>

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
                        <h3 style="color: #00008B;font-family: 'Times New Roman', Times, serif;"><b>ANSWERS</b></h3>

                    </li>
                </ul>
                <!-- <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                    <span class="input-group-text" id="search">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #00008B"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="navbar-search-input"
                                    placeholder="Search now" aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul> -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <i class="fa-regular fa-bell" style="font-size: 22px; color: #00008B"></i>
                    </li>

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                        <img src="{{ asset('nancy_css\images\avatar.jpg') }}" alt="profile" />
                            <span class="mx-2" style="color: #00008B">{{session('admin_name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <!-- <a class="dropdown-item">
                                    <i class="fa-solid fa-user menu-icon text-warning"></i>
                                    <span class="text-warning">Edit Profile</span>
                                </a> -->
                            <a class="dropdown-item" href="/logout">
                                <i class="fa-solid fa-arrow-right-from-bracket text-danger " ></i>
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

            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- ---------------------------------CARD------------- -->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card text-white  card-dark-blue mb-3 ">
                                <div class="card-body ">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <h2 class="px-3"
                                                style="font-size: 30px;font-family: 'Times New Roman', Times, serif;">
                                                TOTAL ANSWERS : {{ $count }}</h2>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <h2 class="px-3"
                                                style="font-size: 30px;font-family: 'Times New Roman', Times, serif;">
                                                CATEGORY : {{session('admin_catagory_name')}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- --------------------------Table ------------  -->

                    <div class="row my-5">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card text-dark bg-white mb-3 ">

                                <div class="card-body">

                                    <div class="col-md-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                    <table class="w-100  table-bordered border-dark report-table"
                                                        id="myTable">
                                                        <thead class="table-bordered border-dark">
                                                            <tr style="background-color:lightblue;">
                                                                <th>
                                                                    <h4><b>QUESTIONS</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>ANSWERS</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>CATEGORY</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>SUB CATEGORY</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>ACTION</b></h4>
                                                                </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        @foreach($getdata as $ans)
                                                        <tbody>
                                                            <tr id="row">
                                                                <td class="text-dark" style="font-size: 18px;">
                                                                    {{strip_tags($ans->question)}}</td>
                                                                <td style="font-size: 18px;">{!!$ans->answer!!}</td>
                                                                <td class="text-center" style="font-size: 18px;">
                                                                    {{$ans->catagory_name}}
                                                                </td>
                                                                <td class="text-center" style="font-size: 18px;">
                                                                    {{$ans->name}}</td>
                                                                <td>
                                                                    <div class="d-block text-center">
                                                                        <a data-id="{{$ans->id}}"
                                                                            data-ans="{{$ans->answer}}"
                                                                            data-ques="{{$ans->question}}"
                                                                            class="link-info" style="font-size: 18px;"
                                                                            data-bs-toggle="modal" id="show-user">See
                                                                            full
                                                                            Post</a>

                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>

                                                        </tbody>
                                                        @endforeach
                                                    </table>

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------MODAL-------------------- -->
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Launch static backdrop modal
                    </button> -->

                    <!-- Modal -->
                    <div class="modal fade" id="userShowModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content" style="border:4px solid darkblue">
                                <div class=" d-flex justify-content-end mt-3 me-3">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card  stretch-card">
                                                <div class="card-body">
                                                    <div class="list-wrapper p-3">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="text-primary d-flex" 
                                                                    style="font-weight: bold;font-family: 'Times New Roman', Times, serif;">
                                                                    Q.
                                                                    <span id="show-question" ></span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="row my-4">
                                                            <div class="col-md-12">

                                                                <p style="font-size: 18px;"><span id="show-ans"></span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="col-md-12">
                                                            <div class="d-flex justify-content-between">
                                                                <form action="approve-ans" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="aprv" id="aprv" value="">

                                                                    <button type="submit"
                                                                        class="btn btn-success btn-sm px-5 "
                                                                        role="button"
                                                                        style="font-size: 17px;">Approve</button>
                                                                </form>
                                                                <form action="reject-ans" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="reject" id="reject"
                                                                        value="">
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm mx-2 px-5"
                                                                        role="button"
                                                                        style="font-size: 17px;">Reject</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

        $('body').on('click', '#show-user', function() {
            var userURL = $(this).data('url');
            var answ = $(this).data('ans');
            $('#show-ans').html(answ);
            var que = $(this).data('ques');
            var rid = $(this).data('id');
            $('#reject').val(rid);
            $('#show-question').html(que);
            var aid = $(this).data('id');
            $('#aprv').val(aid);
       

                
            $.get(userURL, function(data) {
                $('#userShowModal').modal('show');

                
                //   $('#user-question').text(data.question);
                //   $('#user-answer').text(data.answer);
                // console.log()
            })
        });
    });
    </script>

</body>




</html>