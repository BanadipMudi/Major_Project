<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,tr,table{
            border:2px solid black;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>Question Id</th>
            <th>Question</th>
            <th>Category</th>
            <th>Likes</th>
            <th>Question By</th>
            <th>Answer</th>
        </tr>
        </thead>
        <tbody>
                     @php 
                        $i=1;
                    @endphp
            @foreach($dt as $dtt)
            <tr>
            <td>{{$dtt['question_id']}}</td>
            <td>{!!$dtt['question']!!}</td>
            <td>{{$dtt['catagory_name']}}</td>
            <td><h4>{{$dtt['like']}}</h4></td>
                <td>{{$dtt['name']}}</td>

                        <td>
                            @php
                                 $vlk=$dtt['qusdata']->toArray();
                            @endphp
                            @foreach($vlk as $vl1=>$vl2)
                                
                                @php 
                                $iid=$vl2['user_id'];
                                $i++;
                                @endphp
                                {!!$vl2['answer']!!} ---- <span id='<?php echo "usr".$i; ?>'></span>
                                <h4 style="display:inline;">,  Likes-  {{$vl2['like']}}</h4>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
                            <script>
                                $.ajax({
                                    method:"GET",
                                    url:'/gtuser/'+ <?php echo($iid) ?>,
                                    success:function(data){
                                    // console.log(data.res.name);
                                    tt='usr'+<?php echo($i); ?>;
                                    ele=document.querySelector('#'+tt);
                                    // ele=document.getElementById("usr3");
                                    ele.innerText=data.res.name;
                                    },
                                    error:function(e){
                                        console.log(e)
                                    }
                                });
                            </script>
                                
                                @endforeach

                                 </td>
                                        
                                </tr>
                                    @endforeach
        </tbody>
    </table>

     
</body>
</html>