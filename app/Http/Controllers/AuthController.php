<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('test.login');
    }

    public function registration()
    {
        return view('test.register');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('user/mainpage')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("user/login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {
//        dd($request);
        $request->validate([
            'full_name'=>'required|string|between:1,100',
            'user_phone' => 'required|numeric|digits:11',
            'date_of_birth'=>'required|date',
            'IIN' =>'required|string|size:12',
            'email'=>'required|string|email|max:100|unique:users',
            'password'=>'required|string|confirmed|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return Redirect("user/login")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("user/login")->withSuccess('Opps! You do not have access');
    }
    public  function  mainpage(){
        if(Auth::check()){
            return view('index');
        }

        return redirect("user/login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'full_name' => $data['full_name'],
            'user_phone' => $data['user_phone'],
            'date_of_birth' => $data['date_of_birth'],
            'IIN' => $data['IIN'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'password_confirmation' => Hash::make($data['password_confirmation'])
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
//        auth('user-api')->logout();

        return Redirect('user/login');
    }

    public function userProfile(){
        $user_info = Auth::user();
        $name = $user_info->full_name;
        $IIN = $user_info->IIN;
        $date_of_birth = $user_info->date_of_birth;
        $email = $user_info->email;
        $phone_number = $user_info->user_phone;
        
        return view('client.profile',['name' => $name, 'IIN' => $IIN, 'date_of_birth' => $date_of_birth, 'email' =>$email, 'user_phone' => $phone_number]);
    }

}