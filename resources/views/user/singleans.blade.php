<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <style>
        .remove a{
            text-decoration: none;
        }
    </style>
</head>

<body class="col-6 mx-auto">
<div class="post p-2 rounded mt-3 mb-3"  style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">
       <!--------------------------------- first portion of this card ------------------name,date,tag,question,name of user2------------------------------------------------->
       <div class="row ps-2 pe-2">
        <div class="col-lg-12 d-flex justify-content-start align-items-center">
          <!-- <div class="profile2">
            <img src="https://artriva.com/media/k2/items/cache/c889234799e865bbe90cee71f6cd2e53_XL.jpg" alt="" style="height: 50px;width: 50px;border-radius: 50%;">
          </div> -->
          <div class="name-tag ps-2">
              <h6 class="fw-bolder pb-0 mb-0 text-dark align-items-center" style="font-size: 12px;">
                 <a href="" class="text-secondary">you</a> 
                    commented on 
                    <div class="d-inline-block pt-2" style="max-width: 200px;height:25px;overflow-y: hidden;overflow-x: hidden;">
                    <a href="{{ route('user.post',['id'=>$answers->question->id]) }}" class="text-secondary">
                      
                          <!-- this question -->
                          {{  strip_tags($answers->question->question) }}
                    </a>
                    </div>
                <i class="fa-solid fa-circle pe-1 ps-1 text-success fw-bolder" style="font-size: 8px;""></i>
                  {{ $answers->created_at }}
                <i class="fa-solid fa-circle pe-1 ps-1 text-warning fw-bolder" style="font-size: 8px;""></i>
                  posted by 
                <a href="/user/profile/{{ $answers->question->newuser->id }}" class="text-secondary">{{ $answers->question->newuser->user_name }}</a>
              </h6>
            
              <h6 class="fw-bolder pb-0 mb-0 pt-1 d-flex remove" style="font-size: 12px;">
                <a href="" class="tag d-flex align-items-center pe-3 bg-primary text-light p-2 rounded-pill me-3"><span class="material-symbols-outlined pe-1" style="font-size: 12px;">local_offer</span> {{ $answers->question->catagory_id }}</a>
                <a href="" class="tag d-flex pe-3 align-items-center bg-success text-light p-2 rounded-pill"><span class="material-symbols-outlined pe-1" style="font-size: 12px;">local_offer</span> {{ $answers->question->subcatagory_id }}</a>
              </h6>
          </div>
        </div>

        
      </div>
      <hr class="mt-3 mb-3 text-primary">
      <!--------------------------------- first portion of this card ------------------------------------ end ------------------------------->
       
        <!-- ------------------------------------------------------------answers portion -------------------------------->
        <div style="overflow: auto;"> 
             {!! $answers->answer !!}
        </div>
        <hr class="mt-3 mb-3 text-primary">
        <!-- ------------------------------------------------------------answers portion --------------------------- end --------->
        <div class="ansapproved" style="display:none;">
        @if($answers->flag==1)
        <div class="alert alert-success text-center" role="alert">
            Your Answer has been Verified By Admin.
        </div>
        @else
        <div class="alert alert-danger text-center" role="alert">
            Your Answer has been Rejected By Admin.
        </div>
        @endif
        </div>
        <div class="ansreport" style="display: none;">
            <div class="alert alert-success" role="alert">
                <h2 class="text-success fw-bold fs-4">Your Report has been Approved By Admin !!</h2>
                <hr>
                @if(isset($report))
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label fw-bold">Your Reason</label>
                  <input type="text" class="form-control" value="{{ $report->reason }}">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label fw-bold">Your Extracomment Regarding Report..</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->extracomment }}</textarea>
                </div>
                @endif
            </div>
        </div>

        <div class="takeaction" style="display: none;">
            <div class="alert alert-danger" role="alert">
                <h2 class="text-danger fw-bold fs-4"><i class="fa-solid fa-triangle-exclamation pe-3" style="color:orangered"></i>Warning For You !!</h2>
                <p>Note : Some user can Report on Your Comment.</p>
                <hr>
                @if(isset($action) && isset($notification))
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label fw-bold">Reason</label>
                  <input type="text" class="form-control" readonly value="{{ $action->reason }}">
                </div>
                <hr>
                <p class="fw-bold mt-3">
                
                  Your post has been removed due to a violation of our terms and conditions. Continued posting of such content may result in action being taken by our administrators, including the possibility of a ban. We kindly request that you familiarize yourself with our guidelines and ensure that your future contributions align with them.
                </p>
                @endif
            </div>
        </div>

        
      </div>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function(){ 
      var url=window.location.href;
      if (url.indexOf("/user/seesingleanswers") !== -1) {
        // this is for  "/user/seesingleanswers  url"
        $('.ansapproved').show();
      }else if(url.indexOf("/user/seeansreport") !== -1){
        // this is for  "/user/seeansreport   url"
        $('.ansreport').show();
      }else if(url.indexOf("/user/seetakeaction") !== -1){
        // this is for  "/user/seetakeaction   url"
        $('.takeaction').show();
      }
    });
  </script>
</body>

</html>