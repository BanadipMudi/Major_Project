
           <h1> Hi, {{$username}}</h1>

           <h2> You Reported To This Email id :<b> &nbsp;{{$mail2}}  </b></h2>
<h3>The Answer Is 
    // {{ strip_tags($answ) }}  
    <span style="background: red; color:white;" >{{ strip_tags($answ) }}</span>
</h3>
           <br>
            <h4>We Reviewed Your Report and We Chose This : {{$reason}}</h4>
            
     