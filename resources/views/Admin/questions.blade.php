<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 06:54:49 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QUESTIONS</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('nancy_css\style.css') }}">
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
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

    td a {
        padding: 5px 10px !important;
    }
    </style>

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">


            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo me-5" href="index.html"><img
                        src="{{asset('nancy_css\images/logo.png') }}" class="me-2" alt="logo" /></a>

            </div>




            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <h3 class="text-primary " style="font-family: 'Times New Roman', Times, serif;">
                            <b>QUESTIONS</b>
                        </h3>

                    </li>
                </ul>
<!-- 
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="fa-solid fa-magnifying-glass" style="color: blue"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul> -->
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <i class="fa-regular fa-bell" style="font-size: 22px; color: blue"></i>
                    </li>

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('nancy_css\images\avatar.jpg') }}" alt="profile" />
                            <span class="mx-2" style="color: blue">{{session('admin_name')}}</span>
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

            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- ---------------------------------CARD------------- -->
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card text-white card-tale mb-3 ">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <h2 class="px-3"
                                                style="font-size: 30px;font-family: 'Times New Roman', Times, serif;">
                                                TOTAL QUESTIONS : {{$Count}}</h2>
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
                                                    <table class=" table-bordered border-dark myTable" id="myTable">
                                                        <thead>
                                                            <tr style="background-color:lightblue;">
                                                                <th>
                                                                    <h4><b>QUESTIONS</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>CATEGORY</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>SUB CATEGORY</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>EDIT</b></h4>
                                                                </th>
                                                                <th>
                                                                    <h4><b>ACTION</b></h4>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        @foreach($data as $dt)
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-dark" style="font-size: 18px;">
                                                                    {!!$dt->question!!}</td>
                                                                <td class="text-center" style="font-size: 18px;">
                                                                    {{$dt->catagory_name}}
                                                                </td>
                                                                <td class="text-center" style="font-size: 18px;">
                                                                    {{$dt->name}}</td>
                                                                <td class="text-center">
                                                                    <a data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal"
                                                                        data-ques="{{$dt->question}}"
                                                                        data-id="{{$dt->q_id}}" class="show_user">
                                                                        <i class="far fa-edit menu-icon text-info"
                                                                            style="font-size: 30px;"></i> </a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-block">
                                                                        <a href="{{ url('question-approveflag/' . $dt->q_id) }}"
                                                                            class="btn btn-success btn-sm px-3 my-2  "
                                                                            role="button" aria-disabled="true"
                                                                            style="font-size: 17px;">Approve</a>
                                                                        <a href="{{ url('question-rejectflag/' . $dt->q_id) }}"
                                                                            class="btn btn-danger btn-sm px-4 my-2 "
                                                                            role="button" aria-disabled="true"
                                                                            style="font-size: 17px;">Reject</a>
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
                    <!-- --------------------------Table ------------  -->


                    <!-- ------------------------------MODAL-------------------- -->
                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="border:4px solid cadetblue">
                                <div class="modal-header">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card  stretch-card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h4 class=" text-primary d-flex"
                                                                style="font-weight: bold;font-family: 'Times New Roman', Times, serif;">
                                                                Q.
                                                                <span id="show-ques"></span>
                                                                <input type="hidden" name="" id='question_id_hidden'>
                                                            </h4>


                                                        </div>


                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-md-6">
                                                            <div class="text-center text-success"
                                                                style="font-weight: bold;font-family: 'Times New Roman', Times, serif;">
                                                                <h4>SELECTED CATEGORY </h4>
                                                            </div>
                                                            <div class="row mb-5 mt-3">
                                                                <div class="col-md-12">
                                                                    <div>
                                                                        <!-- <select
                                                                            class="form-select  mb-3 border-dark bg-info text-dark"
                                                                            aria-label=".form-select-lg example">
                                                                            <option class="bg-info text-white"
                                                                                value="1">
                                                                                SCIENCE</option>

                                                                            <option class="bg-info text-white"
                                                                                value="2">
                                                                                PROGRAMMING</option>

                                                                            <option class="bg-info text-white"
                                                                                value="3">
                                                                                TECHNOLOGY</option>
                                                                            <option class="bg-info text-white"
                                                                                value="4">
                                                                                ARTS</option>
                                                                            <option class="bg-info text-white"
                                                                                value="5">
                                                                                SPORTS</option>
                                                                        </select> -->
                                                                        <select id="category-select"
                                                                            class="form-select mb-3 border-dark bg-info text-dark"
                                                                            aria-label=".form-select-lg example">
                                                                            @foreach($cate as $cat)
                                                                            <option class="bg-info text-white"
                                                                                value="{{$cat->id}}">
                                                                                {{$cat->catagory_name}}</option>
                                                                            <!-- <option class="bg-info text-white"
                                                                                value="{{$cat->id}}">{{$cat->catagory_name}}</option>
                                                                            <option class="bg-info text-white"
                                                                                value="{{$cat->id}}">{{$cat->catagory_name}}</option>
                                                                            <option class="bg-info text-white"
                                                                                value="{{$cat->id}}">{{$cat->catagory_name}}</option>
                                                                            <option class="bg-info text-white"
                                                                                value="{{$cat->id}}">{{$cat->catagory_name}}</option> -->
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="text-center text-success" class=" text-primary"
                                                                style="font-weight: bold;font-family: 'Times New Roman', Times, serif;">
                                                                <h4>SELECT SUB-CATEGORY</h4>
                                                            </div>
                                                            <div class="row mb-5 mt-3">
                                                                <div class="col-md-12">
                                                                    <div id="subcatagory-show12">
                                                                        <!-- <select
                                                                            class="form-select  mb-3 border-dark bg-secondary text-dark"
                                                                            aria-label=".form-select-lg example">
                                                                            <option id="sub-1" class="bg-secondary text-dark"
                                                                                value="1">
                                                                                Open this select menu</option>
                                                                            <option id="sub-2" class="bg-secondary text-dark"
                                                                                value="2">
                                                                                Temperory ID Ban</option>

                                                                            <option id="sub-3" class="bg-secondary text-dark"
                                                                                value="3">
                                                                                Removing the offending comment</option>
                                                                            <option id="sub-4" class="bg-secondary text-dark"
                                                                                value="4">
                                                                                warning the user</option>
                                                                            <option class="bg-secondary text-dark"
                                                                                value="5"> 
                                                                                Dismiss</option>
                                                                        </select> -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-md-12">
                                                            <div class="d-flex justify-content-between">
                                                                <a class="btn btn-success btn-sm px-5 " role="button"
                                                                    aria-disabled="true" style="font-size: 17px;"
                                                                    data-bs-dismiss="modal" id="approve">Approve</a>
                                                                <a class="btn btn-danger btn-sm mx-2 px-5" role="button"
                                                                    aria-disabled="true" style="font-size: 17px;"
                                                                    data-bs-dismiss="modal">Reject</a>
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
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        $('body').on('click', '.show_user', function() {
            var que = $(this).data('ques');
            var question_id = $(this).data('id');
            $('#show-ques').html(que);
            $('#question_id_hidden').val(question_id);
            $.get(userURL, function(data) {
                $('#userShowModal').modal('show');




            })
        })

        $('#category-select').on('change', function() {
            var category = $(this).val(); // get the selected category value
            $('#subcategory-select').hide(); // hide the subcategory select tag initially
            // alert(category);
            var html = "";
            $.ajax({
                url: "{{ route('admin.getsubcatagory') }}",
                method: "POST",
                data: {
                    category: category,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    console.log(data.subcategorys);
                    var array = data.subcategorys;
                    html += `<select id="subcategory-select" class="form-select mb-3 border-dark bg-secondary text-dark"
                                                                            aria-label=".form-select-lg example"
                                                                            >`;
                    array.forEach(element => {
                        html += `<option id="sub-1"
                                                     class="bg-secondary text-dark"
                              value="${element.subcatagorys_id}">${element.name}</option>`;
                    });
                    html += "</select>";
                    $('#subcatagory-show12').html(html);
                    console.log(html);
                    console.log(array[0].name);
                    $('#subcategory-select').on('change', function() {
                        //alert($(this).val());
                    });
                    $('#approve').click(function() {
                        var catagory_id = $('#category-select').val();
                        var subcatagory_id = $('#subcategory-select').val();
                        question_id = $('#question_id_hidden').val();
                        // console.log();
                        //alert("catagory: "+catagory_id+"subcatagory: "+subcatagory_id+"question: "+question_id);
                        $.ajax({
                            url: "{{ route('admin.approve') }}",
                            data: {
                                question_id: question_id,
                                catagory_id: catagory_id,
                                subcatagory_id: subcatagory_id,
                                _token: "{{ csrf_token() }}"
                            },
                            method: "POST",
                            success: function(data) {
                                console.log(data.status);
                                window.location.reload();
                            }
                        });
                    });
                }

            });
            // show the relevant subcategory select tag based on the selected category
            // if (category == 1) {
            //     $('#sub-1').text('Science Subcategory 1');
            //     $('#sub-2').text('Science Subcategory 2');
            //     $('#subcategory-select').show();
            // } else if (category == 2) {
            //     $('#sub-1').text('Programming Subcategory 1');
            //     $('#sub-2').text('Programming Subcategory 2');
            //     $('#subcategory-select').show();
            // } else if (category == 3) {
            //     $('#sub-1').text('Technology Subcategory 1');
            //     $('#sub-2').text('Technology Subcategory 2');
            //     $('#subcategory-select').show();
            // } else if (category == 4) {
            //     $('#sub-1').text('Arts Subcategory 1');
            //     $('#sub-2').text('Arts Subcategory 2');
            //     $('#subcategory-select').show();
            // } else if (category == 5) {
            //     $('#sub-1').text('Sports Subcategory 1');
            //     $('#sub-2').text('Sports Subcategory 2');
            //     $('#subcategory-select').show();
            // }

        });
        $('#myTable').DataTable();

    });
    </script>
</body>




</html>