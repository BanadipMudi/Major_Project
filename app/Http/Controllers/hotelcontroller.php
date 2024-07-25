<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Catagory;
use App\Models\Subcatagory;
use Carbon\Carbon;
use DB;
class hotelcontroller extends Controller
{
   // public function conn(){
   //    return Answer::all();
   // }


   ////////////////// QUESTION /////////////////////////////


   public function questiondata(){
      $startDate = Carbon::now()->subMonth(); // Get the date and time 24 hours ago
      $endDate = Carbon::now(); // Get the current date and time
    
      $data = Question::join('catagorys','questions.catagory_id','=','catagorys.id')
                     ->join('subcatagorys','questions.subcatagory_id','=','subcatagorys.subcatagorys_id')
                     ->where('questions.flag', '=', 0)
                     ->whereBetween('questions.created_at', [$startDate, $endDate])
                     ->where('questions.catagory_id','=',session('admin_catagory_id'))
      // ->select('questions.question','catagorys.catagory_name','subcatagorys.name')
      ->get(['questions.question','catagorys.catagory_name','subcatagorys.name','questions.q_id']);
      $Count = $data->count();

      $cate=Catagory::all();
//       echo $startDate . "<br>";
// echo $endDate;
      return view('Admin.questions', compact('data','cate','Count'));
      // return view('Admin.questions', ['count' => $Count, 'data' => $data, 'cate' => $cate]);
      // print_r($data);
   }

   public function subcatagory(Request $request){
      $subatagorys=Subcatagory::where('catagorys_id','=',$request->category)->select('subcatagorys_id','name')->get();
      //dd($subatagorys->toArray());
      return response()->json(['subcategorys'=>$subatagorys]);
   }

   // public function getcdata(){
     
   // //   print_r($cate);
   //   return view('table',compact('cate'));
   // }


  

   ///////////////////////////////////// ANSWER ////////////
public function answerdata(){
   $startDate = Carbon::now()->subMonth(); // Get the date and time 24 hours ago
   $endDate = Carbon::now(); // Get the current date and time
   $getdata= Answer::join('questions','answers.question_id','=','questions.q_id')
   ->join('catagorys','questions.catagory_id','=','catagorys.id')
   ->join('subcatagorys','questions.subcatagory_id','=','subcatagorys.subcatagorys_id')
   ->where('answers.flag', '=', 0)
   ->whereBetween('answers.created_at', [$startDate, $endDate])
   ->where('catagorys.id','=',session('admin_catagory_id'))
   
    ->select('questions.question','answers.answer','catagorys.catagory_name','subcatagorys.name','answers.id',)
   ->get();
 
   $count = $getdata->count(); // Get the count value
 //dd($getdata->toArray());
   return view('Admin.answer', compact('getdata', 'count'));
   
   // print_r($getdata);
}

public function flag(Request $request){
   $id = $request->aprv;
      DB::table('answers')->where('id', $id)->update(['flag' => 1]);
      // $row = Answer::find($id);
      // $row->delete();
      
      $userId = DB::table('answers')
            ->where('id', $id)
            ->value('user_id');
            DB::table('notifications')->insert(['user_id' => $userId, 'message' => "Your Answer has been Approved", 'action_id' => $id, 'action' => "answer", 'created_at' => now(), 
        'updated_at' => now(),]);
        return redirect()->back()->with('success', 'Flag updated successfully.');
        
   
   
   }
   public function rejectflag(Request $request){
      $id = $request->reject;
      DB::table('answers')->where('id', $id)->update(['flag' => 2]);
      $userId = DB::table('answers')
      ->where('id', $id)
      ->value('user_id');
      DB::table('notifications')->insert(['user_id' => $userId, 'message' => "Your Answer has been Rejected", 'action_id' => $id, 'action' => "answer", 'created_at' => now(), 
  'updated_at' => now(),]);
      return redirect()->back()->with('success', 'Flag updated successfully.');
   }

public function approve_question(Request $request){
   $question_id=$request->question_id;
   $catagory_id=$request->catagory_id;
   $subcatagory_id=$request->subcatagory_id;
   $question=Question::where('q_id',"=",$question_id)->first();
   $question->catagory_id=$catagory_id;
   $question->subcatagory_id=$subcatagory_id;
   $question->flag=1;
   $question->save();
   return response()->json(['status'=>"your question has been approved"]);
}

public function updateQuestionFlag($q_id)
    {
      DB::table('questions')->where('q_id', $q_id)->update(['flag' => 1]);
      $userId = DB::table('questions')
            ->where('q_id', $q_id)
            ->value('user_id');
            DB::table('notifications')->insert(['user_id' => $userId, 'message' => "Your Question has been Approved", 'action_id' => $q_id, 'action' => "question", 'created_at' => now(), 
        'updated_at' => now(),]);
   // echo($userId);

        return redirect()->back()->with('success', 'Flag updated successfully.');
    }
    
    public function rejectQuestionFlag($q_id)
    {
      DB::table('questions')->where('q_id', $q_id)->update(['flag' => 2]);

      $userId = DB::table('questions')
      ->where('q_id', $q_id)
      ->value('user_id');
      DB::table('notifications')->insert(['user_id' => $userId, 'message' => "Your Question has been Rejected", 'action_id' => $q_id, 'action' => "question", 'created_at' => now(), 
  'updated_at' => now(),]);

        
        return redirect()->back()->with('success', 'Flag updated successfully.');
    }


    public function getchoice(){
      $getcat=Catagory::all();
      return view('Admin.choice',compact('getcat'));
    }

    public function CategoryName(Request $request)
    {
        $categoryName = $request->catagory_name;
        $get_catagory_name=Catagory::where('id',$categoryName)->value('catagory_name');
         $admin_id=session('admin_id');
         $request->session()->put('admin_catagory_id', $categoryName);
         $request->session()->put('admin_catagory_name', $get_catagory_name);
         $admin=admin::where('a_id',$admin_id)->first();
         $admin->category_id=$categoryName;
         if($admin->save()){
            return response()->json(['status'=>true,'value'=>$admin_id."     ".$categoryName]);
         }else{
            return response()->json(['status'=>false,'value'=>$admin_id."     ".$categoryName]);
         }
         //return view('Admin.dashboard');
         

    }
}