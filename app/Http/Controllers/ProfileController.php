<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Following;
use App\Models\Newuser;
use App\Models\UserPersonalInfo;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function profile($id=null){
        if($id){
            $user_id=$id;
            $user=Newuser::find($user_id);
            $user_info=UserPersonalInfo::where('user_id',$user_id)->first();
            $followers_number=Following::where('following_id',$user_id)->count();
            $followings_number=Following::where('user_id',$user_id)->count();
            return view('user.outherprofile',compact('user_info','user','followers_number','followings_number'));
        }else{
            $user_id=session('id'); // here we get the value of user_id from session
            $user=Newuser::find($user_id);
            $user_info=UserPersonalInfo::where('user_id',$user_id)->first();
            $followers_number=Following::where('following_id',$user_id)->count();
            $followings_number=Following::where('user_id',$user_id)->count();
            //echo "followers :".$followers_number."following :".$followings_number;
            // echo "<pre>";
            // print_r($user_info->employment_credential);
            // print_r($user_info->toArray());
           return view('user.profile',compact('user_info','user','followers_number','followings_number'));
        }
        
    }

    public function Get_following(Request $request){
        $user_id=session('id'); 
        $followings=Following::where('user_id',$user_id)->get();
        $html="";
        if($request->ajax()){
            if($followings->count() > 0){
                $html.="
                    <p class='p-2 fw-bold fs-4 text-secondary mb-1'>Following People.</p>
                    <hr class='mt-0 mb-1 ms-1 me-1'>
                ";
                foreach($followings as $following)
                {
                    $following_id=$following->following_id;
                    $array=explode("_",$following_id);
                    $following_id=$array[2];
                    $html .= "
                    <div class='row follow-people border rounded m-2 p-2 bg-self' data-id='{$following_id}'>
                        <div class='col-md-8 d-flex'>
                            <img class='border border-light' src='https://api.dicebear.com/6.x/initials/svg?seed={$array[0]}&radius=50&size=32&backgroundColor=f73b07' alt='' style='height:80px;width:80px;border-radius:50%;'>
                            <div class='d-flex align-items-start flex-column p-2 justify-content-center'>
                                <p class='mt-0 mb-0 fw-bold text-light'>" . strtoupper($array[0]) . "</p>
                                <p class='mt-0 mb-0 fw-bold text-light'>{$array[1]} Followers</p>
                            </div>
                        </div>
                        <div class='col-md-4 d-flex align-items-center justify-content-center'>
                        <button data-remove_id='{$following_id}_{$user_id}__". strtoupper($array[0]) ."' class='btn btn-warning rounded-pill unfollow text-dark fw-bold'>Unfollow</button>
                        </div>
                    </div>
                ";
                
                }
                $html.='
                <!-- modal start -->
                <button type="button" class="btn btn-primary alert-bookmark d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Launch demo modal
                </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content for-unfollowing p-4">
                      
                        <div class="modal-body mt-4 mb-4 p-4 text-dark fs-5 fw-bold text-center">
                          
                        
                        
                        </div>
                        
                        <div class="modal-footer border border-0 d-flex justify-content-center">
                          <button type="button" class="btn fw-bold delete-off btn-light col-5 border border-dark" data-bs-dismiss="modal">Cancel</button>
                          <input type="hidden" name="" id="hidden_field">
                          <button type="button" class="btn fw-bold unfollow-ask btn-danger col-5">Unfollow</button>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                <!-- modal end -->
                ';

            }else{
                $html.='
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <img  class="img-fluid mt-2 mb-2" src="https://img.freepik.com/free-vector/account-concept-illustration_114360-409.jpg?w=360" alt="">
                    <p class="fw-bold fs-2 text-self">You don\'t follow anyone !(</p>                            
               </div>';
            }
            return response()->json(["status"=>true,'html'=>$html]);
        }else{
            return view('user.following',compact('followings'));
        }
       // return $followings->toArray();
      
    }

    public function delete_following(Request $request){
        if(Following::where('following_id',$request->targetid)->where('user_id',$request->selfid)->delete()){
            return response()->json(["status"=>true]);
        }
       // return response()->json(["status"=>true,"selfid"=>$request->selfid,'targetid'=>$request->targetid]);
    }

    public function follow_back(Request $request){
        $user_id=session('id'); 
        $following=new Following;
        $following->user_id=$user_id;
        $following->following_id=$request->follower_id;
        if($following->save()){
            return response()->json(["status"=>true]);
        }
    }
    
    public function profile_update(Request $request){
        $user_id=session('id');
        $user_info=UserPersonalInfo::where('user_id',$user_id)->first();
        
        $formdata=$request->all();
        $formdata=$formdata['formdata'];
        $last_element=array_pop($formdata);
        $array=[];
        foreach ($formdata as $key => $value) {
            $array[$value['name']]=$value['value'];
        }
       // return response()->json(['data'=>$array,'lastelement'=>$last_element['value'],'status'=>true]);
       
       $user_info->{$last_element['value']}=$array;
        if($user_info->save()){
            return response()->json(['data'=>$formdata,'lastelement'=>$last_element['value'],'status'=>true]);
        }else{
            return response()->json(['status'=>false]);
        }
        
    }

    public function followUnfollow(Request $request){
        $user_id=$request->userid;
        $self_id=$request->selfid;
        if($request->decision=="follow"){
            $follow=new Following;
            $follow->user_id=$self_id;
            $follow->following_id=$user_id;
            if($follow->save()){
                return response()->json(['status'=>true]);
            }
        }else{
            if(Following::where('user_id',$self_id)->where('following_id',$user_id)->delete()){
                return response()->json(['status'=>true]);
            }
        }
    }


    public function session(Request $request){
        //session()->flush();
       $request->session()->put('id',8);
        $session=session()->all();
        // echo "<pre>";
        // print_r($session);
        echo session('id');
        //return $session;
    }
    // public function search_show(){
    //     return view('search');
    // }
    // public function search_something(){
    //     $searchitem="s";
    //     $users=DB::table('newusers')->
    //     where('name','LIKE','%'.$searchitem.'%')->
    //     select('name','id')->
    //     get();

    //     $questions=DB::table('questions')
    //     ->whereRaw('lower(question) LIKE ?', '%'.strtolower($searchitem).'%')->
    //     select('question','id')->
    //     get();


    //     // $answers=DB::table('answers')
    //     // ->whereRaw('lower(answer) LIKE ?', '%'.strtolower($searchitem).'%')->
    //     // select('answer','id')->
    //     // get();
        
    //     echo "searched item : ".$searchitem;
    //     echo "<pre>";
    //     //print_r($users->toArray());

    //    // print_r($questions->toArray());
    //     //print_r($all_deta);
    //     //print_r($questions->toArray());
    //     //dd($questions->toArray());
    //     $newarray=array();
    //     foreach ($questions as $question) {
            
    //         $content = $question->question;
    //         $id=$question->id;
    //         // remove any HTML tags
    //         $content = strip_tags($content);
    //         if(strpos(strtolower($content), strtolower($searchitem)) !== false)
    //         {
    //             //echo $content."<br>".$question->id."<br>"."<br>"."<br>";
    //             $newarray[] =(object) array(
    //                 'id' => $id,
    //                 'question' => $content
    //             );

    //         }
    //     }
    //     $users=$users->toArray();
    //     $questions=$newarray;
    //     $all_deta=compact('users','questions');
    //      print_r($all_deta);
    //     //  echo $questions[1]->id;
    //   // print_r($newarray);
    // }


    public function search_something(Request $request){
        // first we have to know the search item
        $searchitem=$request->search;
        if(is_null($searchitem)){
            return response()->json(['status'=>false,'message'=>'Please Enter Something...']);
        }
        // second we have to find the searched items on user and question table
        
        // third I wrote a query, to check whether the username matches the search item or not.
        $users=DB::table('newusers')->
        where('user_name','LIKE','%'.$searchitem.'%')->
        select('user_name','u_id')->
        get();
        // fourth I wrote a query, to check whether the question matches the search item or not ?
        $questions=DB::table('questions')->where('flag',1)
        ->whereRaw('lower(question) LIKE ?', '%'.strtolower($searchitem).'%')->
        select('question','q_id')->
        get();
       // serch by catagory wise
        $catagorys=DB::table('catagorys')->
        where('catagory_name','LIKE','%'.$searchitem.'%')->
        select('catagory_name','id')->
        get();
        // serch by subcatagory wise
        $subcatagorys=DB::table('subcatagorys')->
        where('name','LIKE','%'.$searchitem.'%')->
        select('subcatagorys_id','name')->
        get();
        // then we have to create a array
        $newarray=array();

        // then we can extract question from html. and matches wheather the search item is found or not?
        foreach ($questions as $question) {
            // here we store question in content variable.
                $content = $question->question;
            //and store id in id variable.
                $id=$question->q_id;
            // remove any HTML tags
                $content = strip_tags($content);
            // ** here we can check wheather content matches the search item or not after extracting html.
            if(strpos(strtolower($content), strtolower($searchitem)) !== false)
            {
                // then we can store id and content in from of object in newarray .
                $newarray[] =(object) array(
                    'id' => $id,
                    'question' => $content
                );

            }
        }
        //now we can store all users as format in same variable.
       $users=$users->toArray();
        // and content can store in question variable
        $questions=$newarray;
        //now we can store all catagorys as format in same variable.
        $catagorys=$catagorys->toArray();
        //now we can store all subcatagorys as format in same variable.
        $subcatagorys=$subcatagorys->toArray();
        //$all_deta=compact('users','questions');
         //print_r($all_deta);
         return response()->json(['users'=>$users,'questions'=>$questions,'catagorys'=>$catagorys,'subcatagorys'=>$subcatagorys]);
    }


}
