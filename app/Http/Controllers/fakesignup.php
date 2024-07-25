<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newuser;
use App\Models\Question;
use App\Models\Answer;
use App\Models\catagory;
use App\Models\subcatagory;
use App\Models\Report;
use App\Models\UserPersonalInfo;
use Illuminate\Support\Facades\Crypt;

class fakesignup extends Controller
{
    public function show(){
        return view('fake-signup');
    }
    public function signup(Request $request){
        $user=new Newuser;
        $user_personal_info=new UserPersonalInfo;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Crypt::encryptString($request->password);
        $user->save();
       // return $user->u_id;
       $user_personal_info->user_id=$user->u_id;
       $user_personal_info->save();
       $request->session()->put('id',$user->u_id);
       return 'sign-up success and session id is: '.session('id');
    }
    public function seeDetails(){
        $userdetails=Newuser::find(session('id')); // here we put user id from session
        //dd($userdetails->toArray());
        //$userdetails=Newuser::with('Question','subcatagory')->find(1);
        
        // echo "<pre>";
        //     print_r($userdetails->toArray());
        // echo "</pre>";
        //return view('user.myquestions',compact('userdetails'));
        //---------------
        // $userdetails=$questions->toArray();
        // return $userdetails;
       if($userdetails!=null){
        $questions = $userdetails->Question()->with('Newuser','answers','catagory','subcatagory')->get();
        //dd($questions->toArray());
       return view('user.myquestions',compact('questions'));

        // foreach ($questions as $key => $question) {
        //     echo $question->id."<br>";
        //     echo $question->question."<br>";
        //     echo $question->like."<br>";
        //     echo $question->dislike."<br>";
        //     echo $question->created_at."<br>";
        //     echo $question->catagory->catagory_name."<br>";
        //     echo $question->subcatagory->name."<br>";
        //     echo $question->newuser->name."<br>";
        //     echo "<br><br>";
        // }
       }else{
        echo "not found";
       }

    }

    public function seeSinglePost($id){
       // return view('user.view_single_post');
       //-----------------------here we want all the data related a queation such as 
       // catagory,subcatagory , and user who ask and what is the question mean all data....
       // so there are two way to get all data..
        //-----------method 1----------1.find perticular question---2.after that get all data 
       // of catagory , subcatagory and user for perticular question id
            //    $question=Question::find($id);
            //    $alldata_question=$question->with('catagory','subcatagory','Newuser')->find($id);
        // ------------------------------method 1-----------------------

        //-----------------method 2 ---------using question class find all related data.
        $alldata_question=Question::with('catagory','subcatagory','Newuser')->find($id);
        $answerflag1=$alldata_question->answers()->where('flag',1)->get();
        $Total_numberOf_Answers=$answerflag1->count();// here answers is a method that define on question model with relationship hasmany
        //echo $Total_numberOf_Answers;
        //------------------method 2--------------------------------------------

       $answers=Answer::where('flag',1)->where('question_id','=',$id)->with('user')->get();
        //dd($alldata_question->toArray());
        //dd($answers->toArray());

        return view('user.view_single_post',compact('answers','alldata_question','Total_numberOf_Answers'));
    }


    public function uesr_report(Request $request){
        $request=$request->all();
         
        $report=new Report;
        $report->reason=$request['report'][0]['value'];
        $report->reporting_user_id=$request['report'][1]['value'];
        $report->answer_id=$request['report'][2]['value'];
        $report->extracomment=$request['report'][3]['value'];
        //return response()->json(['status'=>$request['report']]);
        if($report->save()){
            return response()->json(['status'=>'Report Successfully For This Answer.']);
        }else{
            return response()->json(['status'=>'Report Unsuccessfully For This Answer.']);
        }
        
    }

    public function question_answer(Request $request){
        $answer=new Answer;
        $request=$request->all();
        $answer->user_id=session('id'); // taking value from session
        $answer->answer=$request['comment_sent'][0]['value'];
        $answer->question_id=$request['comment_sent'][1]['value'];
        if($answer->save()){
            return response()->json(['status'=>'Your comment has been successfully submitted.']);
        }else{
            return response()->json(['status'=>'Your comment has not been successfully submitted.']);
        }
    }

    public function like_dislike(Request $request){
        $number=$request->like_or_dis_no;
        $answer_id=$request->answer_id;
        $action=$request->action;
        if($action == "like"){
            $answer=Answer::find($answer_id);
            $answer->like=$number + 1;
            $answer->save();
            return response()->json(['status'=>$number+1]);
        }else{
            $answer=Answer::find($answer_id);
            $answer->dislike=$number + 1;
            $answer->save();
            return response()->json(['status'=>$number+1]);
        }
        
    }

    public function allpost($id=null){
        if($id){
            //$questions=Question::where('flag',1)->with('answers','Newuser')->where('subcatagory_id',$id)->get(); // done
            $questions=Question::where('flag',1)->with(['answers'=>
            function($query){
                $query->where('flag',1);
            },'Newuser'])->where('subcatagory_id',$id)->get();
        }else{
            $questions=Question::where('flag',1)->with(['answers'=>
            function($query){
                $query->where('flag',1);
            },'Newuser'])->inRandomOrder()->get(); // done
        }
        
        //dd($user->toArray());
        return view('user.myquestions',compact('questions'));
    }

    public function myanswers(){
        $user_id=session('id');
        //$answers = Answer::where('user_id', $user_id)->with('question.Newuser')->get();
        // this will fine but there we get all the information of the user but we need only name
        $answers=Answer::where('user_id',$user_id)->orderBy('id', 'desc')->
        with(['question.Newuser' => function ($query) {
        $query->select('u_id', 'user_name'); // select only the id and name columns from the Newuser table
        }])->get();
       //dd($answers->toArray());
       return view('user.myanswers',compact('answers'));
    }

    public function delete_answer(Request $request){
        $answer=Answer::where('user_id','=',$request->user_id)->where('id','=',$request->answer_id)->delete();
        return response()->json(['success_status'=>true]);
    }

    public function subcatagory_select($subcatagory){
        $subcatagory_id=subcatagory::where('name',"=",$subcatagory)->value('subcatagorys_id');
       // echo $subcatagory_id;
        $questions=Question::where('flag',1)->with('answers','Newuser')->where('subcatagory_id',$subcatagory_id)->get();
      // dd($questions->toArray());
        return view('user.myquestions',compact('questions'));
        
    }
    public function catagory_select($catagory){
        $catagory_id=catagory::where('catagory_name',"=",$catagory)->value('id');
       // echo $subcatagory_id;
        $questions=Question::where('flag',1)->with('answers','Newuser')->where('catagory_id',$catagory_id)->get();
      // dd($questions->toArray());
        return view('user.myquestions',compact('questions'));
        
    }
}
