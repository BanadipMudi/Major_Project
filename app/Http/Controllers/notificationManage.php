<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Newuser;
use App\Models\Report;

class notificationManage extends Controller
{
    public function getNotification(){
        $user_id=session('id');
        $notification=Notification::where('user_id',$user_id)->orderBy('id','desc')->get();
        //return $notification;
        return response()->json(["notification"=>$notification]);
    }

    public function see_single_answers($id){
    
        $answers=Answer::where('id',$id)->
        with(['question.Newuser' => function ($query) {
        $query->select('u_id', 'user_name'); // select only the id and name columns from the Newuser table
        }])->first();
       //dd($answers->toArray());
       //return $answers;
       return view('user.singleans',compact('answers'));
    }

    public function see_single_answers_report($id){
        $report=Report::where('r_id',$id)->first();
        
        $answers=Answer::where('id',$report->answer_id)->
        with(['question.Newuser' => function ($query) {
        $query->select('u_id', 'user_name'); // select only the id and name columns from the Newuser table
        }])->first();
        // echo "<pre>";
        // print_r($report);
        //print_r($answers->toArray());
        return view('user.singleans',compact('answers','report'));
    }

    public function see_take_action($rid,$nid){
        $action=Report::where('u_id',$rid)->first();
        $notification=Notification::where('id',$nid)->select('message')->first();
        $answers=Answer::where('id',$action->answer_id)->
        with(['question.Newuser' => function ($query) {
        $query->select('u_id', 'user_name'); // select only the id and name columns from the Newuser table
        }])->first();
        //echo "<pre>";
        // print_r($action->toArray());
        // print_r($notification->toArray());
        // print_r($answers->toArray());
        return view('user.singleans',compact('answers','action','notification'));
    }
}
