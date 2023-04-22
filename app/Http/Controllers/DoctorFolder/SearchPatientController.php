<?php

namespace App\Http\Controllers\DoctorFolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchPatientController extends Controller
{
    public function index(){
    	$data = \DB::table('users')->paginate(10);
        return view('doctor.search', compact('data'));
    }

    public function search(Request $request){
    	$data = \DB::table('users');
        
        $data = $data->where('IIN', 'LIKE', "%" . $request->IIN . "%");
        
        $data = $data->paginate(10);
        return view('doctor.search', compact('data'));
    }
}
