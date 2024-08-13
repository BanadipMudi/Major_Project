<!DOCTYPE html>
<html lang="en">


<?php session_start(); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> REPORTS</title>

    <link rel="stylesheet" href="{{ asset('nancy_css\style.css') }}">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
                        <h3 class="text-warning" style="color: #00008B;font-family: 'Times New Roman', Times, serif;"><b>REPORTS</b></h3>

                    </li>
                </ul>
                <!-- <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                    <span class="input-group-text" id="search">
                                    <i class="fa-solid fa-magnifying-glass text-warning"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="navbar-search-input"
                                    placeholder="Search now" aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul> -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <i class="fa-regular fa-bell text-warning" style="font-size: 22px;"></i>
                    </li>

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            id="profileDropdown">
                            <img src="{{ asset('nancy_css\images\avatar.jpg') }}" alt="profile" />
                            <span class="mx-2 text-warning">{{session('admin_name')}}</span>
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
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- ---------------------------------CARD------------- -->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card text-white  card-light-danger mb-3 ">
                                <div class="card-body ">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <h2 class="px-3"
                                                style="font-size: 30px;font-family: 'Times New Roman', Times, serif;">
                                                TOTAL REPORTS : {{ $count }}</h2>
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
                    <!-- ---------------------------------CARD------------- -->


                    <!-- --------------------------Table ------------  -->

                    <div class="row my-5">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card text-dark bg-white mb-3 ">

                                <div class="card-body">

                                    <div class="col-md-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-md-12 border-right">
                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                    {{-- <table class="table table-bordered border-dark report-table">
                                                        <tr>
                                                        <tr style="background-color:lightblue;">
                                                            <th>
                                                                <h4><b>USER ID</b> </h4>
                                                            </th>
                                                            <th>
                                                                <h4><b>TARGET ID</b> </h4>
                                                            </th>
                                                            <th>
                                                                <h4><b>ANSWER ID</b> </h4>
                                                            </th>
                                                            <th>
                                                                <h4><b>REASON</b> </h4>
                                                            </th>

                                                            <th>
                                                                <h4><b>TAKE ACTION</b> </h4>
                                                            </th>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-dark text-center" style="font-size: 18px;">
                                                                112</td>
                                                            <td class="text-center" style="font-size: 18px;">118</td>
                                                            <td class="text-center " style="font-size: 18px;">30</td>
                                                            <td class="text-center" style="font-size: 18px;">Trolling
                                                            </td>

                                                            <td>
                                                                <div class="d-block text-center">
                                                                    <a href="#" class="link-info" 
                                                                        style="font-size: 18px;" data-bs-toggle="modal"
                                                                        data-bs-target="#staticBackdrop">Take Action</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-dark text-center" style="font-size: 18px;">
                                                                117</td>
                                                            <td class="text-center" style="font-size: 18px;">223</td>
                                                            <td class="text-center " style="font-size: 18px;">40</td>
                                                            <td class="text-center" style="font-size: 18px;">
                                                                Inappopriate Content
                                                            </td>

                                                            <td>
                                                                <div class="d-block text-center">
                                                                    <a href="#" class="link-info"
                                                                        style="font-size: 18px;" data-bs-toggle="modal"
                                                                        data-bs-target="#staticBackdrop">Take Action</a>
                                                                </div>
                                                            </td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-dark text-center" style="font-size: 18px;">
                                                                87</td>
                                                            <td class="text-center" style="font-size: 18px;">187</td>
                                                            <td class="text-center " style="font-size: 18px;">50</td>
                                                            <td class="text-center" style="font-size: 18px;">Spamming
                                                            </td>


                                                            <td>
                                                                <div class="d-block text-center">
                                                                    <a href="#" class="link-info"
                                                                        style="font-size: 18px;" data-bs-toggle="modal"
                                                                        data-bs-target="#staticBackdrop">Take Action</a>
                                                                </div>
                                                            </td>
                                                            </td>
                                                        </tr>

                                                    </table> --}}

                                                    <table id="dataTable2"
                                                        class="table table-bordered border-dark report-table">
                                                        <thead>
                                                            <tr style="background-color:lightblue;">
                                                                <th>
                                                                    <h4><b>ID</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>REPORTING USER ID</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>ANSWER ID</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>REASON</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>TAKE ACTION</b></h4>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data as $record)
                                                                <tr>
                                                                    <td class="text-dark text-center"
                                                                        style="font-size: 18px;">{{ $record->r_id }}
                                                                    </td>
                                                                    <td class="text-center" style="font-size: 18px;">
                                                                        {{ $record->reporting_user_id }}
                                                                    </td>
                                                                    <td class="text-center " style="font-size: 18px;">
                                                                        {{ $record->answer_id }}


                                                                    </td>
                                                                    <td class="text-center" style="font-size: 18px;">
                                                                        {{ $record->reason }}</td>
                                                                    <td>
                                                                        <div class="d-block text-center">
                                                                            <a href="#"
                                                                                data-rid="{{ $record->r_id }}"
                                                                                data-ans="{{ $record->answer_id }}"
                                                                                data-rep="{{ $record->reporting_user_id }}"
                                                                                data-email="{{ $record->reason }}"
                                                                               
                                                                                class="link-info btn btn-primary py-1 action-btn text-white"
                                                                                style="font-size: 18px;"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#staticBackdrop">Take Action</a>

                                                                                <a href="{{ route('delete.data', ['id' => $record->r_id, 'reporting_user_id' => $record->reporting_user_id]) }}" class="btn btn-danger px-2 py-1">Discard Report</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <div class="modal fade" id="staticBackdrop"
                                                                    data-bs-backdrop="static" data-bs-keyboard="false"
                                                                    tabindex="-1"
                                                                    aria-labelledby="staticBackdropLabel"
                                                                    aria-hidden="true">

                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content "
                                                                            style="border:4px solid crimson">
                                                                            <form action="{{route('send.mail.data')}}" method="POST" enctype="multipart/form-data">
                                                                                @csrf
                                            <input type="hidden" name="mail" id="user-mail" value="">
                                            <input type="hidden" name="mail2" id="user-mail2" value="">
                                            <input type="hidden" name="answ" id="answ" value="">
                                            <input type="hidden" name="usrnm" id="usr-nm" value="">
                                            <input type="hidden" name="report_id" id="report-id" value="">
                                            <input type="hidden" name="aw_id" id="aw-id" value="">
                                           
                                                                                        <input type="hidden" name="rep" id="report-ans" value="">
                                                                            <div class="modal-header text-center">
                                                                                <h3 class="modal-title text-primary px-4"
                                                                                    id="staticBackdropLabel"
                                                                                    style="font-family: 'Times New Roman', Times, serif;">
                                                                                    <b>REPORT VERIFICATION</b>
                                                                                </h3>
                                                                                <button type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-md-12 gird-margin stretch-card">
                                                                                        <div class="card ">
                                                                                            <div class="card-body">
                                                                                                <div class="row mb-5">
                                                                                                    <div
                                                                                                        class="col-md-12">
                                                                                                        <h3 class=" px-2 text-danger"
                                                                                                            style="font-family: 'Times New Roman', Times, serif;">
                                                                                                            Reason :
                                                                                                            <span
                                                                                                                id="user-email">
                                                                                                            </span>
                                                                                                            {{-- <b>REASON :  {{ $record->reporting_user_id }} </b>  --}}

                                                                                                        </h3>
                                                                                                        <h3 class=" px-2 text-danger"
                                                                                                            style="font-family: 'Times New Roman', Times, serif;">

                                                                                                            {{-- <b>REASON :  {{ $record->reporting_user_id }} </b>  --}}

                                                                                                        </h3>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row my-4">
                                                                                                    <div
                                                                                                        class="col-md-12">
                                                                                                        <div class="list-wrapper p-3"
                                                                                                            style="background-color:darkslateblue;">
                                                                                                            <div>
                                                                                                                <h3 class="text-white"
                                                                                                                    style="font-family: 'Times New Roman', Times, serif;">
                                                                                                                    <b>CONTENT</b>
                                                                                                                </h3>
                                                                                                                <div id="content"
                                                                                                                    class="text-white">
                                                                                                                </div>

                                                                                                                {{-- <input type="hidden" name="user_id" id="user_id" value=""> --}}




                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="my-5">
                                                                                                                <span
                                                                                                                    class="text-white"
                                                                                                                    style="font-size:18px;font-family: 'Times New Roman', Times, serif;">
                                                                                                                    <span
                                                                                                                        id="full-ans"></span>



                                                                                                                </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row mt-5">
                                                                                                    <div
                                                                                                        class="col-md-12">
                                                                                                        <h3 class="text-primary"
                                                                                                            style="font-family: 'Times New Roman', Times, serif;">
                                                                                                            {{-- <b>TAKE
                                                                                                                ACTION
                                                                                                                ON ID :
                                                                                                                <span
                                                                                                                    id="report-ans"></span></b> --}}
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-12">
                                                                                                        <h3 class="text-primary"
                                                                                                            style="font-family: 'Times New Roman', Times, serif;">
                                                                                                            <b>REPORTED USER :
                                                                                                                <span ><a id="report-mail" href="#" class="text-black" style="text-decoration: none"></a></span>
                                                                                                            </b>
                                                                                                        </h3>


                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row my-2">
                                                                                                    <div
                                                                                                        class="col-md-12 ">
                                                                                                        <div>
                                                                                                            <select
                                                                                                                class="form-select form-select-lg mb-3 border-dark "
                                                                                                                aria-label=".form-select-lg example" name="reason" required>
                                                                                                                <option
                                                                                                                    class="bg-secondary text-dark"
                                                                                                                    value="1" disabled>
                                                                                                                    Open
                                                                                                                    this
                                                                                                                    select
                                                                                                                    menu
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    class="bg-secondary text-dark"
                                                                                                                    value=" Temperory
                                                                                                                    ID
                                                                                                                    Ban">
                                                                                                                    Temperory
                                                                                                                    ID
                                                                                                                    Ban
                                                                                                                </option>

                                                                                                                <option
                                                                                                                    class="bg-secondary text-dark"
                                                                                                                    value="  Removing
                                                                                                                    the
                                                                                                                    offending
                                                                                                                    comment">
                                                                                                                    Removing
                                                                                                                    the
                                                                                                                    offending
                                                                                                                    comment
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    class="bg-secondary text-dark"
                                                                                                                    value="Warning
                                                                                                                    the
                                                                                                                    user">
                                                                                                                    Warning
                                                                                                                    the
                                                                                                                    user
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    class="bg-secondary text-dark"
                                                                                                                    value=" Dismiss">
                                                                                                                    Dismiss
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="text-center mb-3">


                                                                                <button type="submit"
                                                                                    data-bs-dismiss="modal"
                                                                                    class="btn btn-primary p-3 rounded"
                                                                                    style="font-size: 20px;">SUBMIT</button>
                                                                               
                                                                            </div>
                                                                        </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </tbody>
                                                    </table>



                                                    <div class="my-5 ">
                                                        {{-- <nav aria-label="Page navigation example">
                                                            <ul class="pagination justify-content-center pagination-lg">
                                                                <li class="page-item">
                                                                    <a class="page-link text-dark" href="#"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link text-dark"
                                                                        href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link text-dark"
                                                                        href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link text-dark"
                                                                        href="#">3</a></li>
                                                                <li class="page-item">
                                                                    <a class="page-link text-dark" href="#"
                                                                        aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav> --}}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal -->

                </div>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable2').DataTable();
        });
    </script>

    <script>
         
        $('.action-btn').click(function() {
            var myLink = document.getElementById("report-mail");
            var email = $(this).data('email');
            var ans = $(this).data('ans');
            var rid = $(this).data('rid');
            var rep = $(this).data('rep');
            $('#user-email').text(email);
            $('#user-ans').text(ans);
            $('#report-ans').val(rep);
            $('#report-id').val(rid);
            $('#aw-id').val(ans);
        //   console.log(myLink,email,ans,rid,rep);
                 

            $.ajax({
                url: '/get-answer-id',
                type: 'POST',
                data: {
                    answer_id: ans,
                   
                    mail_id2: rep,
                    _token: "{{ csrf_token() }}"
                },

                success: function(response) {
                    // Display the answer in the modal
                    var answer = response.answer;
                   
                    var mail2 = response.mail2;
                    var userMail = response.userMail;
                    var usrnm = response.usrnm;
                    
                    // console.log(answer);
                    // console.log(mail);
                    $('#content').html(answer);
                    $('#answ').val(answer);
                    $('#user-mail').val(mail2);
                    $('#user-mail2').val(userMail);
                    $('#usr-nm').val(usrnm);
                    $('#report-mail').html(userMail);
                  
                   
                    myLink.setAttribute("href", "mailto:" + userMail);
                    // ... code to display the answer in the modal ...
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });


        });
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>


    <!-- DataTables CSS -->


    <!-- DataTables JS -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 06:55:11 GMT -->

</html>
