<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\Catagory;
use Illuminate\Support\Carbon;



class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    // public function register()
    // {
    //     return view('auth.register');
    // }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:250',
    //         'email' => 'required|email|max:250|unique:admins',
    //         'password' => 'required|min:2|confirmed'
    //     ]);

       

        // admin::create([
        //     'admin_name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
    //     $admin=new admin;
    //     $admin->admin_name= $request->name;
    //     $admin->email=$request->email;
    //     $admin->password=Crypt::encryptString($request->password);
    //     $admin->save();

    //     // $credentials = $request->only('email', 'password');
    //     // Auth::attempt($credentials);
    //     // $request->session()->regenerate();
    //     //echo $admin->a_id.'<br>';
    //     $request->session()->put('admin_id',$admin->a_id);
    //     $request->session()->put('admin_name',$admin->admin_name);
    //     //echo "session value=".session('a_id');
    //     return redirect()->route('admin.categorychoice')
    //     ->withSuccess('You have successfully registered & logged in!');
    // }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $admin=admin::where('email',$request->email)->first();
       if(!$admin){
        return back()->withErrors([
            'email' => 'You are revoked as admin bro',
        ])->onlyInput('email');
       }

        $admin_catagory_id=$admin->category_id;
        $request->session()->put('admin_catagory_id', $admin_catagory_id);
        $get_catagory_name=Catagory::where('id',$admin_catagory_id)->value('catagory_name');
        $request->session()->put('admin_catagory_name', $get_catagory_name);
        $request->session()->put('admin_name',$admin->admin_name);
        $password=Crypt::decryptString($admin->password);
        
        
        if($password == $request->password &&  $admin->is_banned == '0')
        {
            $request->session()->put('admin_id',$admin->a_id);

            return redirect()->route('dashboard')
        ->withSuccess('You have successfully registered & logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records. or you are banned bro',
        ])->onlyInput('email');

    } 
    
    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        // if(Auth::check())
        // {
        //     return view('Admin.dashboard');
        // }
        
        // return redirect()->route('login')
        //     ->withErrors([
        //     'email' => 'Please login to access the dashboard.',
        // ])->onlyInput('email');
        return view('auth.dashboard');
    } 
    
    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        
      $id=$request->session()->get('admin_id');
      $data=Admin::find($id);
     // return $data;
     if($data){
     $dd=Carbon::now()->format('Y-m-d');
     $d=$dd;
     //echo ($dd);
     $data->last_active=$d;
     $data->save();
     }
     $request->session()->forget('admin_id');
        return redirect()->route('dashboard2')
            ->withSuccess('You have logged out successfully!');;
     }    

}