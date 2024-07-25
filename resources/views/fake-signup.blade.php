<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="container">
    <div class="col-4 mx-auto border rounded p-4 bg-dark">
        <h3 class="fw-bold text-center text-info">Sign up</h3>
        <form action="{{ route('sign-up') }}" method="post">
            @csrf
                <input class="form-control mt-3" placeholder="Enter Your Name" type="text" name="name" id="">
                <input class="form-control mt-3" placeholder="Enter Your Email" type="email" name="email" id="">
                <input class="form-control mt-3" placeholder="Enter Your Password" type="password" name="password" id="">
                <div class="d-flex justify-content-center">
                <input class="btn btn-primary mt-3 rounded-pill" type="submit" value="sign-up">
                </div>
        </form>
    </div>
  

   
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>