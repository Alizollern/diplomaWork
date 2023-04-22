<?php

namespace App\Http\Controllers\DoctorFolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecieptControllers extends Controller
{
	public $number_receipt; 

	public function index(Request $request){
        $id = $request->employee_id;
        $name = $request->full_name;
        $iin = $request->IIN;
        $avatar = $request->avatar;
        return view('doctor.reciept',['id' => $id, 'name' => $name, 'iin'=>$iin,'avatar'=> $avatar]);
    }

    public function addReciept(Request $request){
    	$receipt = \App\Models\Receipt::create([
    	'receipt_title' => $request->receipt_title,
        'receipt_comments' => $request->receipt_comments,
        'receipt_date' => $request->expired_date,
        'receipt_doctor_id' => $request->doctor,
        'receipt_user_id' => $request->patient	
]);
    	// return redirect()->route('doctor.search');
        return redirect()->action([RecieptControllers::class, 'getMedicine'], ['id' => $receipt->id]);
	}

    public function getMedicine(Request $request){
        $data = \DB::table('medicines')->paginate(10);
        $id = $request->id;
        return view('doctor.receipt.search', compact('data'))->with('receipt_id',$id);
    }

    public function addMedicine(Request $request){
        $medicine = $request->medicine_id;
        $receipt = $request->reciept_id;
        $data = \DB::table('medicine_receipts')->insert([
            'medicine_id' => $medicine,
            'receipt_id' => $receipt
            ]);
        return redirect()->action([RecieptControllers::class, 'getMedicine'], ['id' => $receipt]);
        
    }

    public function searchMedicine(Request $request){
        $data = \DB::table('medicines');
        
        $data = $data->where('product_name', 'LIKE', "%" . $request->search . "%");
        
        $data = $data->paginate(10);
        return view('doctor.receipt.search', compact('data'));
    }
}
