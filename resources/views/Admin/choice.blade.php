<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('nancy_css\choice.css') }}">
    <title>Hello, world!</title>
</head>

<body>
    <h1 class="text-center mt-4" ><b>ADMIN PANEL OF AnswerBag</b> </h1>


    <div class="card text-white bg-dark " style="width: 28rem; border-radius: 45px;">
        
        <div class="card-body">
          <h4 class="card-title text-center  m-1"><b>Select Your Category</b></h4>
          <hr style="height: 4px;color: lawngreen;">
          
            @foreach($getcat as $choice)
                <div class="row my-3 text-center " >
                  <div class="col-md-12 my-2 " > 
                    <button type="button" class="btn chosen_category rounded-pill choice" value="{{$choice->id}}" id=""><b>{{$choice->catagory_name}}</b> </button>
                    
                  </div>
                 
                
                </div>
                @endforeach
                <!-- <div class="row my-3 text-center"  >
                  <div class="col  my-2"  >
                    <button type="button" class="btn  rounded-pill choice"><b>Arts</b> </button>
                  </div>
                  <div class="col  my-2" >
                    <button type="button" class="btn  rounded-pill choice"><b>Trends</b> </button>
                  </div>
                  <div class="col my-2" >
                    <button type="button" class="btn  rounded-pill choice"><b> Others</b></button>
                  </div>
                </div>
              -->
              
              
          
        </div>
      </div>
    

        
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

<script>
  $('.chosen_category').click(function(){
                        catagory_name=$(this).val();
                        // console.log();
                         //alert(catagory_name);
                        $.ajax({
                            url:"{{ route('admin.selectedcategory') }}",
                            data:{catagory_name:catagory_name,_token:"{{ csrf_token() }}"},
                            method:"POST",
                            success:function(data){
                                //console.log(data.status);
                                if(data.status==true){
                                  console.log('perfect work');
                                  console.log(data.value);
                                  window.location.href='/admin/dashboard';
                                }else{
                                  console.log('not work');
                                  console.log(data.value);
                                }
                            }
                        });
                    });
</script>

</body>

</html>
