<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(){
        $data = DB::table('specialization')->paginate(10);
        return view('client.appointment.appointment', compact('data'));
    }


    public function getDoctor(Request $request){
        $id = $request->id;
        $name = $request->name;
        $data = DB::table('doctors')->where('doctor_specialist', $id)->paginate(10);
        $time = DB::table('availble_time')->get();
        $auth = Auth::user();
        return view('client.appointment.appointmentTime',['times' => $time, 'data' => $data, 'name' => $name,'user' => $auth->id]);
    }

    public function getAvailbleTime(Request $request){
        $id = $request->id;
        $name = $request->name;
        $availble_doctor = DB::table('busy_time')->where('availble_id',$id)->where('status', '1')->pluck('doctor_id')->toArray();
        $time = DB::table('availble_time')->where('id', $id)->get();
        $data = array();
        $auth = Auth::user();
        foreach ($availble_doctor as $value) {
            $doctors = DB::table('doctors')->where('id', $value)->get();

            foreach ($doctors as $doctor) {
                $data[$doctor->id] = $doctor;
            }
        }
        return view('client.appointment.appointmentTime',['times' => $time, 'data' => $data, 'name' => $name,'user' => $auth->id]);
    }

    public function postAppointment(Request $request){
        $time = $request->time;
        $day = $request->day;
        $doctor = $request->doctor;
        $user = $request->user;

        $data = DB::table('busy_time')->insert(['doctor_id' =>$doctor,'user_id' => $user, 'availble_id' => $time, 'status' => 0]);

        // $data = DB::table('busy_time')->update(['status' => 0])->where('doctor_id', $doctor)->where('availble_id',$time);
        return redirect('/');
    }

    // public function getAvailbleTime(Request $request){

    //     $validator = Validator::make($request->all(), [
    //         'date' => 'required|date',
    //     ]);

    //     $days = $request->date;


    //     if ($validator->fails()) {
    //        //var_dump("Fail");
    //     }

    //     $takeIdDay = DB::table('days')->select('id')->where('day', $days)->first();
    //     $availbleTime = DB::table('availble_time')->where('day_id', $takeIdDay->id)->get();

    //     foreach ($availbleTime as $value) {
    //         //var_dump($value->id);
    //         $status = DB::table('busy_time')->select('status')->where('availble_id', $value->id)->first();
    //         if ($status->status == 1) {
    //             var_dump($value->start_interval_time);
    //             var_dump($value->end_interval_time);
    //         }
            
    //     }
        
    //     return view('client.appointment');
    //     // $data = DB::table('ava')->select('id','pharmacy_name', 'pharmacy_address', 'pharmacy_phone', 'email')->where('id', $id)->get();
    //     // $date = $request->date;
    //     // $viewTime = 
    // }
}
