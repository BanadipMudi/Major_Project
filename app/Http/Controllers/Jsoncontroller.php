<?php

namespace App\Http\Controllers;
use App\Models\Jsontest;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class Jsoncontroller extends Controller
{
    public function store(){
        $obj=new Jsontest;
        // $data = [
        //     2 => 'like'
        // ];
        $obj->title="hi";
        //$obj->data=$data;
        $obj->save();
    }
    public function index(){
        return view('jsontest');
    }

    public function getjson(){
        $obj=Jsontest::find(4);      // here its find using id of(question / answer)
        $key=2;                      // here its a user id
        $what_to_do="dislike";           // here its treat as an action (like or dislike)
        $like=0;
        $dislike=0;
        //dd($obj->data);
        // echo "<pre>";
        //     print_r($obj->data);
        // echo "</pre>";
        $jsondata=$obj->data;                       // jsondata is the important here****
        // print_r(array_keys($obj->data)) ;
        
        if(is_null($jsondata)){
            $jsondata[$key]=$what_to_do;
            $obj->data=$jsondata;
            if($what_to_do=="like"){
                $obj->like=1;
            }else{
                $obj->dislike=1;
            }
            $obj->save();
            echo "Age null 6ile akon data insert holo";
        }else{
            if(array_key_exists($key,$jsondata)){           // if any key exists then it will be deleted
                if($jsondata[$key] == $what_to_do){             
                        unset($jsondata[$key]);
                }else{                                      // else insert
                    $jsondata[$key]=$what_to_do;        
                }
                foreach ($jsondata as $key => $value) {
                    if($value == "like"){
                        $like+=1;
                    }else{
                        $dislike+=1;
                    }
                }
                $obj->data=$jsondata;
                $obj->like=$like;
                $obj->dislike=$dislike;
                $obj->save();      
                echo "key exist 6ilo";
            }else{
                $jsondata[$key]=$what_to_do;             // else insert if key doesnot exists
                foreach ($jsondata as $key => $value) {
                    if($value == "like"){
                        $like+=1;
                    }else{
                        $dislike+=1;
                    }
                }
                $obj->data=$jsondata;
                $obj->like=$like;
                $obj->dislike=$dislike;
                $obj->save();
                echo "key exist 6ilo na";
            }
    
        }
    }




    public function appendjson(){
        $obj = Jsontest::find(1); // Get the model instance with ID 1 from the database
        $data = $obj->data; // Get the existing JSON data from the model

        $data[2] = 'like'; // Add a new key-value pair to the existing JSON data

        $obj->data = $data; // Update the model attribute with the modified JSON data
        $obj->save(); 

    }


    public function question_likedislike(Request $request){
        $question_id=$request->question_id;
        $user_id=$request->user_id;
        $action=$request->action;
        $obj=Question::find($question_id);      // here its find using id of(question / answer)
        $key=$user_id;                      // here its a user id
        $what_to_do=$action;           // here its treat as an action (like or dislike)
        $like=0;
        $dislike=0;
        
        $jsondata=$obj->records;                       // jsondata is the important here****
        
        
        if(is_null($jsondata)){
            $jsondata[$key]=$what_to_do;
            $obj->records=$jsondata;
            if($what_to_do=="like"){
                $obj->like=1;
                $like=1;
            }else{
                $obj->dislike=1;
                $dislike=1;
            }
            $obj->save();
            $status= "Age null 6ile akon data insert holo";
        }
        else{
            //$status= "null noy";
            if(array_key_exists($key,$jsondata)){           // if any key exists then it will be deleted
                if($jsondata[$key] == $what_to_do){             
                        unset($jsondata[$key]);
                }else{                                      // else insert
                    $jsondata[$key]=$what_to_do;        
                }
                foreach ($jsondata as $key => $value) {
                    if($value == "like"){
                        $like+=1;
                    }else{
                        $dislike+=1;
                    }
                }
                $obj->records=$jsondata;
                $obj->like=$like;
                $obj->dislike=$dislike;
                $obj->save();      
                $status= "key exist 6ilo";
            }
        else{
                $jsondata[$key]=$what_to_do;             // else insert if key doesnot exists
                foreach ($jsondata as $key => $value) {
                    if($value == "like"){
                        $like+=1;
                    }else{
                        $dislike+=1;
                    }
                }
                $obj->records=$jsondata;
                $obj->like=$like;
                $obj->dislike=$dislike;
                $obj->save();
                $status= "key exist 6ilo na";
            }
    
        }
       return response()->json(['status'=>"success","like"=>$like,"dislike"=>$dislike,"user_id"=>$user_id,"action"=>$action]);
       //return response()->json(['status'=>$status.$key.$jsondata]);
    }


    public function answer_likedislike(Request $request){
        $answer_id=$request->answer_id;
        $user_id=$request->user_id;
        $action=$request->action;
        $obj=Answer::find($answer_id);      // here its find using id of(question / answer)
        $key=$user_id;                      // here its a user id
        $what_to_do=$action;           // here its treat as an action (like or dislike)
        $like=0;
        $dislike=0;
        
        $jsondata=$obj->records;                       // jsondata is the important here****
        
        
        if(is_null($jsondata)){
            $jsondata[$key]=$what_to_do;
            $obj->records=$jsondata;
            if($what_to_do=="like"){
                $obj->like=1;
                $like=1;
            }else{
                $obj->dislike=1;
                $dislike=1;
            }
            $obj->save();
            $status= "Age null 6ile akon data insert holo";
        }
        else{
            //$status= "null noy";
            if(array_key_exists($key,$jsondata)){           // if any key exists then it will be deleted
                if($jsondata[$key] == $what_to_do){             
                        unset($jsondata[$key]);
                }else{                                      // else insert
                    $jsondata[$key]=$what_to_do;        
                }
                foreach ($jsondata as $key => $value) {
                    if($value == "like"){
                        $like+=1;
                    }else{
                        $dislike+=1;
                    }
                }
                $obj->records=$jsondata;
                $obj->like=$like;
                $obj->dislike=$dislike;
                $obj->save();      
                $status= "key exist 6ilo";
            }
        else{
                $jsondata[$key]=$what_to_do;             // else insert if key doesnot exists
                foreach ($jsondata as $key => $value) {
                    if($value == "like"){
                        $like+=1;
                    }else{
                        $dislike+=1;
                    }
                }
                $obj->records=$jsondata;
                $obj->like=$like;
                $obj->dislike=$dislike;
                $obj->save();
                $status= "key exist 6ilo na";
            }
    
        }
       return response()->json(['status'=>"success","like"=>$like,"dislike"=>$dislike,"user_id"=>$user_id,"action"=>$action]);
       // return response()->json(["answer_id"=>$answer_id,"user_id"=>$user_id,"action"=>$action]);
    }

    public function bookmark(){
        $user_id=session('id');
        $bookmark_questins_array=Bookmark::where('user_id','=',$user_id)->pluck('questions_id');   
       // $bookmark_data=Bookmark::with('bookmark_question','bookmark_user')->where('user_id',"=",$user_id)->get();
        $questions=Question::whereIn('q_id',$bookmark_questins_array)->with('answers','Newuser')->get();
       
       //dd($bookmark_questins_array->toArray());
       //dd($questions->toArray());
       return view('user.bookmark2',compact('questions'));
    }
    public function post_bookmark(Request $request){
        $user_id=$request->user_id;
        $question_id=$request->question_id;
        $bookmark_verify=Bookmark::where('user_id', $user_id)
        ->where('questions_id', $question_id)
        ->first();
       if($bookmark_verify){
        return response()->json(['status'=>'this questions already saved in your profile.',"flag"=>false]);
       }else{
        $bookmark=new Bookmark;
        $bookmark->questions_id=$question_id;
        $bookmark->user_id=$user_id;
        $bookmark->save();
        return response()->json(['status'=>'this questions successfully saved in your profile.',"flag"=>true]);
       }
    }

    public function bookmark_delete(Request $request){
        $question_id=$request->question_id;
        $user_id=$request->user_id;
        $user_obj=Bookmark::where('user_id','=',$user_id)->where('questions_id','=',$question_id)->first();
        if($user_obj){
            $user_obj->delete();
            return response()->json(['success_status'=>true]);
            //return response()->json(['$question id: '=>$question_id,"user id: "=>$user_id,"user_obj"=>$user_obj]);
        }
        return response()->json(['success_status'=>false]);
    }
}
