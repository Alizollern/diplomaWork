<?php

namespace App\Http\Controllers\DoctorFolder;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpParser\Comment\Doc;

class DoctorAuthController extends Controller
{
    public function index()
    {
        return view('doctor.loginDoctor');
    }
     public function registration()
    {
        return view('doctor.registerDoctor');
    }

    public function postLoginDoctor(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

//        $login = $credentials[$this->email()];
//        return $login;

        if (Auth::guard('doctor')->attempt($credentials)) {
            return redirect()->intended('doctor/mainPage')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("doctor/login")->withSuccess('Oppes! You have entered invalid credentials');
    }

      public function postRegistration(Request $request)
    {
        $request->validate([
            'doctor_name'=>'required|string|between:1,100',
            'doctor_phone' => 'required|numeric|digits:11',
            'doctor_specialist' =>'required|string',
            'email'=>'required|string|email|max:100|unique:doctors',
            'password'=>'required|string|confirmed|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return Redirect("doctor/login")->withSuccess('Great! You have Successfully loggedin');
    }
    public function create(array $data)
    {
        return Doctor::create([
            'doctor_name' => $data['doctor_name'],
            'doctor_phone' => $data['doctor_phone'],
            'doctor_specialist' => $data['doctor_specialist'],
            'email'=>$data['email'],
            'password' => Hash::make($data['password']),
            'password_confirmation' => Hash::make($data['password_confirmation'])
        ]);
    }

    public  function  mainPage(){
        if(Auth::guard('doctor')->check()){
            return view('indexDoctor');
        }

        return redirect("doctor/login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
//        auth('user-api')->logout();

        return Redirect('doctor/login');
    }

    public function doctorProfile(){
        $doctor_info =  Auth::guard('doctor')->user();
        $name = $doctor_info->doctor_name;
        $spec = $doctor_info->doctor_specialist;
        $email = $doctor_info->email;
        $phone_number = $doctor_info->doctor_phone;

        $data = \DB::table('specialization')->where('id',$spec)->value('name'); 

        return view('doctor.doctorProfile',['name' => $name, 'specialist' => $data, 'email' =>$email, 'doctor_phone' => $phone_number]);
    }

    public function contact(){
        return view('doctor.contactDoctor');
    }

}
