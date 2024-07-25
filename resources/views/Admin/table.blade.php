<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div class="table-responsive mb-3 mb-md-0 mt-3">
        <table class="w-100  table-bordered border-dark report-table" id="myTable">
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
            @foreach($cate as $ans)
            <tbody>
                <tr>
                    <!-- <td class="text-dark" style="font-size: 18px;">{!!$ans->question!!}</td>
                    <td style="font-size: 18px;">{!!$ans->answer!!}</td> -->
                    <td class="text-center" style="font-size: 18px;"> {{$ans->catagory_name}}
                    <!-- </td>
                        {{$ <td class="text-center" style="font-size: 18px;">
                   ans->name}}</td>
                    <td> -->
                        <div class="d-block text-center">
                            <!-- href="{{'answer/'.$ans->id}}"  -->
                            <a data-ans="{{$ans->answer}}" data-ques="{{$ans->question}}" class="link-info"
                                style="font-size: 18px;" data-bs-toggle="modal" id="show-user">See full
                                Post</a>
                        </div>
                    </td>
                </tr>
                <!-- data-bs-target="#staticBackdrop"  -->
            </tbody>
            @endforeach
        </table>

    </div>

    <div class="modal fade" id="userShowModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content" style="border:4px solid darkblue">
                <div class=" d-flex justify-content-end mt-3 me-3">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card  stretch-card">
                                <div class="card-body">
                                    <div class="list-wrapper p-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 class="text-primary"
                                                    style="font-weight: bold;font-family: 'Times New Roman', Times, serif;">
                                                    <span id="show-question"></span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="row my-4">
                                            <div class="col-md-12">

                                                <p style="font-size: 18px;"><span id="show-ans"></span></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-success btn-sm px-5 " role="button"
                                                    aria-disabled="true" style="font-size: 17px;"
                                                    data-bs-dismiss="modal">Approve</a>
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
            $('#show-question').html(que);
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