<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\subcatagory;
use App\Models\Question;
use Carbon\Carbon as carbon;
class usercontroller extends Controller
{
    public function catagory(Request $request){
        $catagory=catagory::all()->toArray();
        if($request->ajax()){
            $subcatagory=subcatagory::where('catagorys_id','=',$request->id)->get();
            return response()->json(['subcatagory'=>$subcatagory]);
        }
    //    dd($catagory);
    // foreach ($catagory as $user) {
    //     // Access the attributes of the user row
    //     echo $user->id;
    //     echo $user->name;
    // }
    //     print_r($catagory->toArray());
        return view('user.createpost',compact('catagory'));
    }

  
   
   public function create_upload(Request $request){

    $files = $request->file('file');
    $urls = [];

    foreach ($files as $file) {
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
        $urls[] = asset('images/' . $fileName);
    }

    return response()->json([
        'urls' => $urls
    ]);

  // dd($request->all());
   }


public function delete_image(Request $request){
   

    $filename = $request->get('filename');
    $path = public_path('images/' . $filename);

    if (file_exists($path)) {
        unlink($path);
    }

    return response()->json(['success' => 'Image deleted successfully.']);

}
public function allsubmit(Request $request){
    // $catagory_name=catagory::find($request->catagory);
    // echo $catagory_name;
    // dd($request->all());
    // $request->validate([
    //     'catagory'=>'required|numeric',
    //     'subcatagory'=>'required|numeric',
    //     'summernote'=>'required|string'
    // ]);
   

    $question=new Question;
    $question->user_id=session('id');     // get from session
    $question->question=$request->content;
    $question->catagory_id=$request->catagory;
    $question->subcatagory_id=$request->subcatagory;
    $question->save();
    return response()->json(['success_status' => true]);
    //dd($request->toArray());
    
    //echo $request->catagory;
    //dd($request->all()); // this will returns the value of all fields.
    //$content=$request['summernote'];
    //return view('user.seepost',compact('content')) ;
}

public function getsubmitdata(){
    $question=Question::all();
    $carbonTimestamp = carbon::parse($question[0]->created_at); // here we use carbon class
    return $carbonTimestamp->diffForHumans(); // returns a human readable date like 9 minutes ago
    
}



}
