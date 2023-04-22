<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use App\Models\Medicines;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{

    public function index(): \Illuminate\Http\JsonResponse
    {
        $news = Medicines::all();
        return response()->json(['Medicines'=>$news], 200);
    }
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        try{

            $med = new Medicines();
            Medicines::create([
                'pharmacy_id' => auth('pharmacy-api')->user()->id,
                'product_name' => $request->product_name,
                'code_atx' => $request->code_atx,
                'product_level'=>$request->product_level,
                'release_form'=>$request->release_form

            ]);

             return response()->json(['Message'=>'News successfully stored!'], 200);

        } catch(\Exception $e){
//            return response()->json(['Message' => 'Something went wrong!'],500);//'Something went wrong!'], 500);
            return response()->json(['Exception' => $e], 500);
        }
    }
}
