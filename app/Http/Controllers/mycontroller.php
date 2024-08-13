<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Carbon;
use App\Models\Admin;
use App\Models\Answer;
use App\Models\Newuser;
use App\Models\Question;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class mycontroller extends Controller
{
   function aladm(){
        $dt=DB::table('admins')->get();
        $dt1=DB::table('admins')->count();
        $dt2=DB::table('admins')->where('is_active',1)->count();
        $dt3=DB::table('admins')->where('is_active',0)->where('is_banned',0)->count();
        $dt4=DB::table('admins')->where('is_banned',1)->count();
        $arr1=array($dt1,$dt2,$dt3,$dt4);
     //    return $arr1;
        return view('Super_admin.dashboard.admins',['dtt'=>$dt],['arr'=>$arr1]);
   }

   function bann_func($id){
        $data=Admin::find($id);
        $data->is_banned=1;
        $data->save();
        $mailData=[
          'title'=>'Mail from AnswerBag Super Admin',
          'body'=>"Sorry!! You got banned by AnswerBag Super Admin as you are inactive for more than 60 days"];
     Mail::to($data->email)->send(new SendMail($mailData));
   }

   function unbann_func($id){
     $data=Admin::find($id);
     $data->is_banned=0;
     $data->is_active=0;
     $data->save();
     $mailData=[
          'title'=>'Mail from AnswerBag Super Admin',
          'body'=>"Congratulations!! You got UnBanned By AnswerBag Super Admin"];
     Mail::to($data->email)->send(new SendMail($mailData));
}

function rvk_func($id){
     $data=Admin::find($id);
     $uid=$data->user_id;
     $dtt=Newuser::find($uid);
     $dtt->prev_id=0;
     $dtt->save();
     $data->delete();
     $mailData=[
          'title'=>'Mail from AnswerBag Super Admin',
          'body'=>"Sorry!! Your account has been removed due to unusual activities."];
     Mail::to($data->email)->send(new SendMail($mailData));
    
}

function chng_bann($id){
     $data=Admin::find($id);
     $data->is_active=0;
     $data->save();
     return response()->json(['res'=>'done']);
}

function dt_tst($id){
     $data=Admin::find($id);
     // return $data;
     $dd=Carbon::now()->format('Y-m-d');
     $d=$dd;
     $data->last_active=$d;
     $data->save();
     return $data;
}

function alusrs(Request $rq){

//     $vll=Question::join('catagorys','catagorys.id','=','questions.catagory_id')
//     ->join('subcatagorys','subcatagorys.subcatagorys_id','=','questions.subcatagory_id')
//     ->join('people','people.id','=','questions.user_id')
//     ->join('answers','answers.id','=','answers.id')
//     ->get(['questions.user_id','people.name','questions.question','answers.answer','answers.like','catagorys.catagory_name']);

// $dt=Question::with('qusdata')
// // ->join('newusers','newusers.u_id','questions.user_id')
// // ->join('catagorys','catagorys.id','questions.catagory_id')
// ->get();
 

//     $dd= $rq['date'];
//      $dd=Carbon::now()->format('Y-m-d');
//     $d=$dd;

//     $c=$rq->date;
    
//     return $d;
//     echo $d;

     // $dt=Question::when($rq->date!=null , function($q) use ($d){
     //      return ($q)->whereDate('created_at',$d);
     // });
     $dt=Question::with('qusdata')
     ->join('newusers','newusers.u_id','questions.user_id')
     ->join('catagorys','catagorys.id','questions.catagory_id')
     ->get();
// return $dt;
     // return view('admin.dashboard.users',compact('dt'));
         $cnt=Question::distinct("user_id")->get("user_id");
         $cat=Question::distinct("catagory_id")->get("catagory_id");
          // echo $cat;
          $arri=[];
             for($i=0;$i<sizeof($cnt);$i++){
               $id=$cnt[$i]->user_id;
               $arr1=[];
               $arr1['id']=$id;
               $nm1=Newuser::find($id);
               $nm=$nm1['user_name'];
               $ml=$nm1['email'];
               $prvid=$nm1['prev_id'];
               $arr1['nm']=$nm;
               $arr1['eml']=$ml;
               $arr1['prvid']=$prvid;
               // for ($j=0; $j <sizeof($cat) ; $j++) { 
               //      $cid=$cat[$j]->catagory_id;
                    
                    // $tt=DB::table('questions')->where("user_id",$id)->where("catagory_id",$cid)->count();
                    // echo "id=".$id.",cat_id=".$cid.",no. of qus:".$tt.";";
                    // $arr1=[];
                    // $arr1['id']=$id;
                    // $nm=Newuser::find($id);
                    // $nm=$nm['user_name'];
                    // $arr1['nm']=$nm;
                    // $cnm=DB::table('catagorys')->where('id',$cid)->get();
                    $tt1=DB::table('questions')->where("user_id",$id)->where("catagory_id",1)->count();
                    $cnm1=DB::table('catagorys')->where('id',1)->get();
                    $cnm1=$cnm1[0]->catagory_name;
                    $arr1['cnm1']=$cnm1;
                    $arr1['cat_id1']=1;
                    $arr1['num1']=$tt1;

                    $tt2=DB::table('questions')->where("user_id",$id)->where("catagory_id",2)->count();
                    $cnm2=DB::table('catagorys')->where('id',2)->get();
                    $cnm2=$cnm2[0]->catagory_name;
                    $arr1['cnm1']=$cnm2;
                    $arr1['cat_id2']=2;
                    $arr1['num2']=$tt2;

                    $tt3=DB::table('questions')->where("user_id",$id)->where("catagory_id",3)->count();
                    $cnm3=DB::table('catagorys')->where('id',3)->get();
                    $cnm3=$cnm3[0]->catagory_name;
                    $arr1['cnm3']=$cnm3;
                    $arr1['cat_i31']=3;
                    $arr1['num3']=$tt3;

                    $tt4=DB::table('questions')->where("user_id",$id)->where("catagory_id",4)->count();
                    $cnm4=DB::table('catagorys')->where('id',4)->get();
                    $cnm4=$cnm4[0]->catagory_name;
                    $arr1['cnm4']=$cnm4;
                    $arr1['cat_id4']=4;
                    $arr1['num4']=$tt4;

                    // $tt5=DB::table('questions')->where("user_id",$id)->where("catagory_id",5)->count();
                    // $cnm5=DB::table('catagorys')->where('id',5)->get();
                    // $cnm5=$cnm5[0]->catagory_name;
                    // $arr1['cnm5']=$cnm5;
                    // $arr1['cat_id5']=5;
                    // $arr1['num5']=$tt5;

                    $tt6=DB::table('questions')->where("user_id",$id)->where("catagory_id",6)->count();
                    $cnm6=DB::table('catagorys')->where('id',6)->get();
                    $cnm6=$cnm6[0]->catagory_name;
                    $arr1['cnm1']=$cnm6;
                    $arr1['cat_id6']=6;
                    $arr1['num6']=$tt6;

                    $tt7=DB::table('answers')->where("user_id",$id)->count();
                    $arr1['num7']=$tt7;
                    array_push($arri,$arr1);
               // }
               // echo "<br>";
         }
     $fnl=compact('arri');
     $allusers=DB::table('newusers')->count();
     $allactiveusers=DB::table('newusers')->where('status',1)->count();
     $allinactiveusers=DB::table('newusers')->where('status',0)->count();
     $arr1=array($allusers,$allactiveusers,$allinactiveusers);
     //     return $fnl['arr'];
     return view('Super_admin.dashboard.users',compact('dt'),compact('arri','arr1'));
     // return view('admin.test2',);
}

function usronly(Request $rq){
     $dd=Carbon::now()->format('Y-m-d');
     $d=$dd;

     $c=$rq->date;
     // return $c;


     $dt=Question::with('qusdata')
     ->join('newusers','newusers.u_id','questions.user_id')
     ->join('catagorys','catagorys.id','questions.catagory_id')
     ->get();

     $dt=Question::whereBetween('questions.created_at',[$c." 00:00:00",$d." 23:59:59"])->with('qusdata')
     ->join('newusers','newusers.u_id','questions.user_id')
     ->join('catagorys','catagorys.id','questions.catagory_id')
     ->get();
     $rq->session()->flash('datee',$rq->date);
     // return $dt;

     $cnt=Question::distinct("user_id")->get("user_id");
         $cat=Question::distinct("catagory_id")->get("catagory_id");
          // echo $cat;
          $arri=[];
             for($i=0;$i<sizeof($cnt);$i++){
               $id=$cnt[$i]->user_id;
               $arr1=[];
               $arr1['id']=$id;
               $nm1=Newuser::find($id);
               $nm=$nm1['user_name'];
               $ml=$nm1['email'];
               $prvid=$nm1['prev_id'];
               $arr1['nm']=$nm;
               $arr1['eml']=$ml;
               $arr1['prvid']=$prvid;


               $tt1=DB::table('questions')->where("user_id",$id)->where("catagory_id",1)->count();
               $cnm1=DB::table('catagorys')->where('id',1)->get();
               $cnm1=$cnm1[0]->catagory_name;
               $arr1['cnm1']=$cnm1;
               $arr1['cat_id1']=1;
               $arr1['num1']=$tt1;

               $tt2=DB::table('questions')->where("user_id",$id)->where("catagory_id",2)->count();
               $cnm2=DB::table('catagorys')->where('id',2)->get();
               $cnm2=$cnm2[0]->catagory_name;
               $arr1['cnm1']=$cnm2;
               $arr1['cat_id2']=2;
               $arr1['num2']=$tt2;

               $tt3=DB::table('questions')->where("user_id",$id)->where("catagory_id",3)->count();
               $cnm3=DB::table('catagorys')->where('id',3)->get();
               $cnm3=$cnm3[0]->catagory_name;
               $arr1['cnm3']=$cnm3;
               $arr1['cat_i31']=3;
               $arr1['num3']=$tt3;

               $tt4=DB::table('questions')->where("user_id",$id)->where("catagory_id",4)->count();
               $cnm4=DB::table('catagorys')->where('id',4)->get();
               $cnm4=$cnm4[0]->catagory_name;
               $arr1['cnm4']=$cnm4;
               $arr1['cat_id4']=4;
               $arr1['num4']=$tt4;

               // $tt5=DB::table('questions')->where("user_id",$id)->where("catagory_id",5)->count();
               // $cnm5=DB::table('catagorys')->where('id',5)->get();
               // $cnm5=$cnm5[0]->catagory_name;
               // $arr1['cnm5']=$cnm5;
               // $arr1['cat_id5']=5;
               // $arr1['num5']=$tt5;

               $tt6=DB::table('questions')->where("user_id",$id)->where("catagory_id",6)->count();
               $cnm6=DB::table('catagorys')->where('id',6)->get();
               $cnm6=$cnm6[0]->catagory_name;
               $arr1['cnm1']=$cnm6;
               $arr1['cat_id6']=6;
               $arr1['num6']=$tt6;

               $tt7=DB::table('answers')->where("user_id",$id)->count();
               $arr1['num7']=$tt7;
               array_push($arri,$arr1);
          // }
          // echo "<br>";
    }
$fnl=compact('arri');

$allusers=DB::table('newusers')->count();
     $allactiveusers=DB::table('newusers')->where('status',1)->count();
     $allinactiveusers=DB::table('newusers')->where('status',0)->count();
     $arr1=array($allusers,$allactiveusers,$allinactiveusers);
     return view('Super_admin.dashboard.users',compact('dt'),compact('arri','arr1'));
     // $ans=$dt['qusdata'];
     // return response()->json(['res'=>$dt]);
     // return response()->json(['res'=>$dt]);
}

function mdl_func($id,$cd){
     $dt=DB::table('newusers')
//      ->join('questions','questions.user_id','=','newusers.u_id')
//      ->join('catagorys','catagorys.id','=','questions.catagory_id')
//      ->where('questions.user_id',$id)
//     ->select('newusers.*','catagorys.*')
//     ->get()->first();
     ->where('u_id',$id)->get();
     $dt1=DB::table('catagorys')->find($cd);
//     return $dt1;
     return response()->json(["res"=>$dt[0],"rs"=>$dt1]);
}

function mdl_func1($id){
     $dt=DB::table('newusers')
     ->where('u_id',$id)->get();
     // $dt1=DB::table('catagorys')->find($cd);
//     return $dt1;
     return response()->json(["res"=>$dt[0]]);
}

function test(){
     $dt=Question::with('qusdata')
     // ->join('newusers','newusers.u_id','questions.user_id')
     // ->join('catagorys','catagorys.id','questions.catagory_id')
     ->get();

     return compact('vlk');

     return view('Super_admin.users',compact('dt'));
}

function gtt($id){
     // $uid=DB::table('newusers')->where("u_id",$id)->get("u_id","user_name","email");
     $uid=Newuser::find($id);
     // return $uid;
     return response()->json(['res'=>$uid]);
}

function gttcat($id){
     $cid=DB::table('catagorys')->where("id",$id)->get("catagory_name");
     // return $uid;
     return response()->json(['res'=>$cid[0]]);
}

function inv_func($eml,$prv){
     $maildata=[
          'title'=>'Mail from AnswerBag Super Admin',
          'body'=>"congratulations!! You are offered for admin previlege for $prv. Reply back with a email if u interested."
     ];
     Mail::to($eml)->send(new SendMail($maildata));
     return response()->json(['res'=>'Done']);
}

function adm_func($id,$prv,$ct_id){
     $maildata=[
          'title'=>'Mail from AnswerBag Super Admin',
          'body'=>"congratulations!! You got admin previlege for $prv by AnswerBag Super Admin."
     ];
     $mm=Newuser::find($id);
     $eml=$mm->email;
     $mem=new Admin;
     // $mem->avatar="avatar";
     $mem->admin_name=$mm->user_name;
     $mem->email=$eml;
     $mem->password=$mm->password;
     $mem->category_id=$ct_id;
     $mem->user_id=$mm->u_id;
     $mem->is_active=1;
     $mem->last_active=NUll;
     $mem->is_banned=0;
     $mem->save();
     $mm->prev_id=$ct_id;
     $mm->save();
     Mail::to($eml)->send(new SendMail($maildata));
     $caty=DB::table('catagorys')->get('id');
     // return $caty;
     return response()->json(['res'=>"Done","rs"=>$mm,"ct"=>$caty]);
}

}
