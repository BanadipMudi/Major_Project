<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('nancy_css\login.css') }}">
    <title>Hello, world!</title>

</head>

<body>

    <!-- -----------button ------ -->


    <div class="container text-left">
    
        <p class="display-6">Admin Panel of AnswerBag</p>
        <button type="button" class="btn btn-dark btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            LOGIN
        </button>

    </div>

    <!-- -----------button ------ -->





    <!-- Modal for login -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">


        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark w-75  " style="border-radius: 15px;">
                <div class="modal-header ">
                    <h2 class="modal-title mx-3 my-1" id="staticBackdropLabel"
                        style="color:lawngreen; font-weight: 500;">LOGIN</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" ></button>
                    
                </div>
                <div class="modal-body justify-content-center">
                    <form>
                        <div class="mb-4 mx-2 mt-3 ">

                            <input type="email" class="form-control input" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter your Email ID">

                        </div>
                        <div class="mb-3 mx-2 mt-3">

                            <input type="password" class="form-control input" id="exampleInputPassword1"
                                placeholder="Enter your Password">
                        </div>
                        <div class="d-flex justify-content-end  text-white mb-2" style="font-size: 15px;">
                            <p>Forget Password? <a href="" style="color:lawngreen; margin-right: 25px;text-decoration: none;">Click here</a>
                            </p>
                        </div>
                        <!-- <a href="#"><button type="submit" class="btn  d-inline-block but mb-2">Login</button></a>  -->
                        <a href="" class="btn d-inline-block but mb-3 btn-lg active " role="button">Login</a>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- ---------------------- Modal for Login  ----  -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>