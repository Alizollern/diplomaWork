<?php

namespace App\Http\Controllers\UserFolder;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class MainPageController extends Controller
{
    //
    public function index(): \Illuminate\Http\JsonResponse
    {
        $ph =  Pharmacy::all();
        return response()->json(['Pharmacies' => $ph],200);
    }

    public function getMedicines()
    {
        $data = DB::table('medicines')->paginate(10);
        return view('client.medicines', compact('data'));
    }

    public function getPharmacies()
    {
        $data = DB::table('pharmacies')->paginate(10);
        return view('client.pharmacies', compact('data'));
    }

    public function getPharmacy(Request $request)
    {
        $id = $request->id;
        $data = DB::table('pharmacies')->select('id','pharmacy_name', 'pharmacy_address', 'pharmacy_phone', 'email')->where('id', $id)->get();
           
        return view('client.pharmacy_page',['data' => $data]);

    }

     public function search(Request $request){
        $data = \DB::table('medicines');

        $data = $data->where('product_name', 'LIKE', "%" . $request->name . "%");
        
        $data = $data->paginate(10);
        return view('client.medicines', compact('data'));
    }

    public function getContact(){
        
        return view('client.contact');
    }

    public function contact(Request $request){
    //     // // try {
    //     // //     DB::insert('insert into comments (email,comment ) values (?, ?)', [$email, $sms]);
    //     // //     $queryStatus = "Successful";
    //     // // } catch(Exception $e) {
    //     // //     $queryStatus = "Not success";
    //     // // }
    //     // return view('client.contact');
     }

    public function getReceipt(Request $request){
        $user_info = Auth::user();
        $id = $user_info->id;
        $data = DB::table('receipts')->where('receipt_user_id', $id)->get();
        return view('client.receipts')->with('data',$data);
    }
}
