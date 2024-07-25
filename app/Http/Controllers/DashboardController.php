<?php

namespace App\Http\Controllers;

use App\Mail\Gmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\Report;
class DashboardController extends Controller
{
    public function index()
    {
        $startDate = Carbon::now()->subMonth(); // Get the date and time 24 hours ago
   $endDate = Carbon::now(); // Get the current date and time
        $data = DB::table('questions')->get();
        $getCount = DB::table('questions')->Join('catagorys','questions.catagory_id','=','catagorys.id')
        ->where('questions.flag', '=', 0)
        ->whereBetween('questions.created_at', [$startDate, $endDate])
        ->where('questions.catagory_id','=',session('admin_catagory_id'))
        ->get();
        $Count=$getCount->count();
        
        $getCount2 = DB::table('answers')->Join('questions','answers.question_id','=','questions.q_id')
        ->Join('catagorys','questions.catagory_id','=','catagorys.id')
        ->where('catagorys.id','=',session('admin_catagory_id'))
        ->where('answers.flag', '=', 0)
        ->whereBetween('answers.created_at', [$startDate, $endDate])
        ->get();
        $Count2=$getCount2->count();
        $getCount3 = DB::table('reports')->where('reports.flag',null)->Join('answers','answers.id','=','reports.answer_id')->
        Join('questions','questions.q_id','=','answers.question_id')
        ->where('questions.catagory_id','=',session('admin_catagory_id'))
        ->get();
        $Count3=$getCount3->count();

        return view('admin.dashboard', ['data' => $data, 'count' => $Count, 'count2' => $Count2, 'count3' => $Count3]);
    }
    public function report()
    {

        $report=DB::table('reports')->where('reports.flag',null)->Join('answers','answers.id','=','reports.answer_id')->
        Join('questions','questions.q_id','=','answers.question_id')->where('questions.catagory_id','=',session('admin_catagory_id'))
        
    
        ->get();
       // dd($report->toArray());
        // $q_id = DB::table('questions')
        //     ->where('catagory_id', session('admin_catagory_id'))
        //     ->value('q_id');
        //     $a_id = DB::table('answers')
        //     ->where('question_id',  $q_id)
        //     ->value('id');
        // $data = DB::table('reports')->where('answer_id',  $a_id)->get();
        $data=$report;
         $Count=$report->count();
        //$Count = DB::table('reports')->count();
        return view('admin.reports', ['data' => $data, 'count' => $Count]);
    }
    public function answer()
    {
        $data = DB::table('answers')->get();

        $Count = DB::table('answers')->count();
        return view('admin.answer', ['data' => $data, 'count' => $Count]);
    }
    public function getAnswerId(Request $request)
    {
       
       
        $answerId = DB::table('answers')
            ->where('id', $request->answer_id)
            ->value('answer');
        $userId = DB::table('answers')
            ->where('id', $request->answer_id)
            ->value('user_id');
            $userMail = DB::table('newusers')
            ->where('u_id', $userId)
            ->value('email');   
        
        $mailId2 = DB::table('newusers')
            ->where('u_id', $request->mail_id2)
            ->value('email');
       
        $usrnm = DB::table('newusers')
            ->where('u_id', $request->mail_id2)
            ->value('user_name');
        return response()->json(['answer' => $answerId, 'mail2' => $mailId2, 'userMail' => $userMail, 'usrnm' => $usrnm]);
    } 
    
    public function mails(Request $request)
    {
        $mail = $request->mail;
        $mail2 = $request->mail2;
        $answ = $request->answ;
        $reason = $request->reason;
        $username = $request->usrnm;
        $rep = $request->rep;
        $aw_id = $request->aw_id;
        $report_id = $request->report_id;
        $repo=Report::where('r_id',$report_id)->first();
        $repo->flag=1;
        $repo->save();
        $approve = "Your Report is Approved";
        $deleted="Your Answer is Deleted";
     //  echo $mail.$mail2.$answ.$reason.$username.$rep.$aw_id.$report_id;
        $target_id = DB::table('answers')
        ->where('id', $aw_id)
        ->value('user_id');

       
           
            DB::table('answers')
            ->where('id', $aw_id)
            ->update(['flag' => 0]);
        
       
        DB::table('notifications')->insert(['user_id' => $rep, 'message' => $approve, 'action_id' => $report_id, 'action' => "report_reporting_user", 'created_at' => now(), 
        'updated_at' => now(),]);
        DB::table('notifications')->insert(['user_id' => $target_id, 'message' => $deleted, 'action_id' => $report_id, 'action' => "report_target_user", 'created_at' => now(), 
        'updated_at' => now(),]);
      echo $mail;
        Mail::to("nancynandani241999@gmail.com")->send(new Gmail($mail, $mail2, $answ, $reason, $username));
        return back();
       
        
    }
   
    public function delete($id, $reporting_user_id)
    {

        $reject = "Your Report is Rejected";
        DB::table('notifications')->insert(['user_id' => $reporting_user_id, 'message' => $reject, 'action_id' => $id, 'action' => "report_reporting_user", 'created_at' => now(), 
        'updated_at' => now(),]);
       

        DB::table('reports')->where('r_id', '=', $id)->delete();
        return redirect()->back();
    }
    // public function getQuestionId(Request $request)
    // {
    //     // return $request->answer_id;
    //     $answerId = DB::table('answers')
    //                     ->where('id', $request->answer_id)
    //                     ->value('answer');
    //     return response()->json(['answer' => $answerId]);
    // }
}
