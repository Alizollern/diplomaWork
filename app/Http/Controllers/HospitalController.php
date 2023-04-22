<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HospitalController extends Controller
{
    public  function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $did = Doctor::where('doctor_specialist','Surgeon')->first();
        $hsp = Hospital::create([
            'hospital_name'=> $request->hospital_name,
            'hospital_address'=> $request->hospital_address,
            'hospital_graphic'=> $request->hospital_graphic,
            'hospital_phone'=> $request->hospital_phone,
            'hospital_email'=> $request->hospital_email,
            'hospital_website'=> $request->hospital_website,
            'hospital_doctor_id'=> $did->id,
        ]);

        return response()->json(['message' => 'Hospital successfully stored!'], 200);
    }

    public function getHospital(){
        $data = \DB::table('hospitals')->paginate(10);
        return view('client.hospital', compact('data'));
    }

    public function getMedicines(){
        $data = \DB::table('hospitals')->paginate(10);
        return view('client.hospital', compact('data'));
    }
}

