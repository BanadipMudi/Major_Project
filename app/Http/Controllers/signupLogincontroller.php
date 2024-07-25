<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newuser;
use App\Models\UserPersonalInfo;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class signupLogincontroller extends Controller
{
   public function signup(Request $request){
      $checking=Newuser::where('email',$request->email)->exists();
      if($checking){
         return response()->json(['flag'=>false,'status'=>"This mail already exists in our Database...try to login"]);
      }else{
         $user=new Newuser;
        $user_personal_info=new UserPersonalInfo;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Crypt::encryptString($request->password);
        $user->save();
       // -----this is for newuser table
       $user_personal_info->user_id=$user->u_id;
       $user_personal_info->save();
       $request->session()->put('id',$user->u_id);
       $request->session()->put('userName',$user->user_name);
       return response()->json(['flag'=>true,'sessionvalue'=>session('id').session('userName')]);
      }
    
   }

   public function login(Request $request){
       $user=Newuser::where('email',$request->email)->first();
   //   // return response()->json(['value'=>$user,'password'=>Crypt::decryptString($user->password),'flag'=>false,'status'=>"LOGIN failed !! Please check your mail and password."]);
      if($user){
         if (Crypt::decryptString($user->password) == $request->password) {
            // Passwords match
            $request->session()->put('id',$user->u_id);
            $request->session()->put('userName',$user->user_name);
            DB::table('newusers')->where('u_id', session('id'))->update(['status' => 1]);
            return response()->json(['value'=>session('id').session('userName'),'count'=>$user->count(),'flag'=>true]);
        } else {
            // Passwords do not match
            return response()->json(['value'=>$user,'flag'=>false,'status'=>"LOGIN failed !! Please check your mail and password."]);
        }
      }else{
         return response()->json(['flaguserstatus'=>false,'status'=>"This mail is not Registered in our Database. Please sign-up !"]);
      }
   //return response()->json(['flag'=>true,'value'=>$user]);
   }

   public function email(){
      $checking=Newuser::where('email','tes@gmail.com')->first();
      if($checking){
         print_r($checking->toArray());
      }else{
         echo 'null';
      }
    
   }
   // public function dashboard(){
   //    return view('user.home');
   // }
   public function logout(){
      DB::table('newusers')->where('u_id', session('id'))->update(['status' => 0]);
      session()->forget('id');
      session()->forget('userName');
      session()->forget('login_model_show');
      
      return redirect('/answerbag');
   }
}
