<?php

namespace App\Http\Controllers\Pharmacy;


use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PharmacyController extends Controller
{

    /**
     * @throws ValidationException
     */
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'pharmacy_name'=>'required|string|between:1,100',
            'pharmacy_phone' => 'required|numeric|digits:11',
            'pharmacy_address'=>'required|string|between:1,200',
            'email'=>'required|string|email|max:100|unique:pharmacies',
            'password'=>'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $pharmacy = Pharmacy::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' =>  'Pharmacy successfully registered!',
            'Pharmacy' => $pharmacy
        ],201);

    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator =  Validator::make($request->all(),[
            'email'=>'required|max:100|exists:pharmacies,email',
            'password'=>['required','string','min:6'],
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        if(! $token = auth('pharmacy-api')->attempt($validator->validated())){
            return response()->json(['error' =>  'unauthorized'], 401);
        }
        return $this->createNewToken($token);
    }

    public function pharmacyProfile(): \Illuminate\Http\JsonResponse
    {
        return response()->json(auth('pharmacy-api')->user());
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth('pharmacy-api')->logout();
        return response()->json(['message' => 'Pharmacy successfully logged out!']);
    }


    public function refresh(): \Illuminate\Http\JsonResponse
    {
        return $this->createNewToken(auth('pharmacy-api')->refresh());
    }

    public function createNewToken($token): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => strtotime(date('Y-m-d H:i:s', strtotime("+60 min"))),
            'Pharmacy' => auth('pharmacy-api')->user()
        ]);
    }
}
