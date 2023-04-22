<?php

use App\Http\Controllers\DoctorFolder\DoctorController;
use App\Http\Controllers\Pharmacy\MedicinesController;
use App\Http\Controllers\Pharmacy\PharmacyController;
use App\Http\Controllers\UserFolder\MainPageController;
use App\Http\Controllers\UserFolder\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorFolder\ReceiptController;
use App\Http\Controllers\HospitalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('set_hospital', [HospitalController::class,'store']);

/********* Route for users ********/
Route::group(['prefix' => 'user'], function ($router) {
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
});

Route::group(['middleware' => ['auth:user-api', 'jwt.auth'], 'prefix' => 'user'], function ($router) {
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/profile', [UserController::class, 'userProfile']);
    Route::post('/refresh', [UserController::class, 'refresh']);

    Route::group(['prefix' => 'show/'], function (){
//        Route::get('medicines', [MedicinesController::class, 'index']);
//        Route::get('pharmacies', [MainPageController::class, 'index']);

//        Route::get('receipt_page', [ReceiptController::class,'index']);
        Route::get('hospital_page',[HospitalController::class,'getHospital']);
        Route::get('medicine_page', [MainPageController::class, 'getMedicines']);
        Route::get('pharmacies_page', [MainPageController::class, 'getPharmacies']);
        Route::get('pharmacy_page/{name}', [MainPageController::class, 'getPharmacy']);

        Route::get('appointment_page', [AppointmentController::class, 'getAppointments']);
    });

    Route::group(['prefix' => 'edit/'], function ($router) {
        Route::post('store/', [AppointmentController::class, 'store']);
        Route::put('update/{id}', [AppointmentController::class, 'update']);
//        Route::delete('destroy/{id}', [AppointmentController::class, 'destroy']);
    });
});


/********* Route for Doctors ********/
Route::group(['prefix' => 'doctor'], function ($router) {
    Route::post('/login', [DoctorController::class, 'login']);
    Route::post('/register', [DoctorController::class, 'register']);
});

Route::group(['middleware' => ['auth:doctor-api', 'jwt.auth'], 'prefix' => 'doctor'], function ($router) {
    Route::post('/logout', [DoctorController::class, 'logout']);
    Route::get('/profile', [DoctorController::class, 'doctorProfile']);
    Route::post('/refresh', [DoctorController::class, 'refresh']);

    Route::group(['prefix' => 'edit/receipts'], function ($router) {
        Route::get('/', [NewsController::class, 'index_for_subadmin']);
        Route::get('/{id}', [NewsController::class, 'show_for_subadmin']);
        Route::post('/', [NewsController::class, 'store']);
        Route::put('/{id}', [NewsController::class, 'update']);
        Route::delete('/{id}', [NewsController::class, 'destroy']);
    });
});


/********* Route for Pharmacies ********/
Route::group(['prefix' => 'pharmacy'], function ($router) {
    Route::post('/login', [PharmacyController::class, 'login']);
    Route::post('/register', [PharmacyController::class, 'register']);
});

Route::group(['middleware' => ['auth:pharmacy-api', 'jwt.auth'], 'prefix' => 'pharmacy'], function ($router) {
    Route::post('/logout', [PharmacyController::class, 'logout']);
    Route::get('/profile', [PharmacyController::class, 'pharmacyProfile']);
    Route::post('/refresh', [PharmacyController::class, 'refresh']);

    Route::group(['prefix'=>'show/medicines'], function () {
        Route::get('index', [MedicinesController::class, 'index']);
        Route::post('store', [MedicinesController::class , 'store']);
    });
});

