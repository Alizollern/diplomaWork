<?php

namespace App\Http\Controllers\UserFolder;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    /**
     * @throws ValidationException
     */

    public function index(){
        return view('client.auth.login');
    }

    public function registerIndex(){
        return view('client.auth.register');
    }

    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'full_name'=>'required|string|between:1,100',
            'user_phone' => 'required|numeric',
            'date_of_birth'=>'required|date',
            'IIN' =>'required|string|size:12',
            'email'=>'required|string|email|max:100|unique:users',
            'password'=>'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' =>  'User successfully registered!',
            'User' => $user
        ],201);

    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator =  Validator::make($request->all(),[
            'email'=>'required|max:100|exists:users,email',
            'password'=>['required','string','min:6'],
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        if(! $token = auth('user-api')->attempt($validator->validated())){
            return response()->json(['error' =>  'unauthorized'], 401);
        }
        $this->createNewToken($token);
        return route('main');

    }

    public function userProfile(): \Illuminate\Http\JsonResponse
    {
        return response()->json(auth('user-api')->user());
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth('user-api')->logout();
        return response()->json(['message' => 'User successfully logged out!']);
    }


    public function refresh(): \Illuminate\Http\JsonResponse
    {
        return $this->createNewToken(auth('user-api')->refresh());
    }

    public function createNewToken($token): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => strtotime(date('Y-m-d H:i:s', strtotime("+60 min"))),
            'User' => auth('user-api')->user()
        ]);
    }
}
