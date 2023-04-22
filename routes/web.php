<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorFolder\DoctorController;
use App\Http\Controllers\Pharmacy\MedicinesController;
use App\Http\Controllers\Pharmacy\PharmacyController;
use App\Http\Controllers\UserFolder\MainPageController;
use App\Http\Controllers\UserFolder\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorFolder\ReceiptController;
use App\Http\Controllers\HospitalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("main");

// Route::get('/doctorlogin',[\App\Http\Controllers\DoctorFolder\DoctorController::class, 'showLoginForm'])->name('getDoctorLogin');
// Route::post('/doctorlogin',[\App\Http\Controllers\DoctorFolder\DoctorController::class, 'login'])->name('dLogin');

Route::get('/doctor',[\App\Http\Controllers\DoctorFolder\SearchPatientController::class,'index'])->name('doctor');
Route::get('/doctor/search',[\App\Http\Controllers\DoctorFolder\SearchPatientController::class,'search'])->name('doctor.search');

//Route::get('/registration',[\App\Http\Controllers\UserFolder\UserController::class,'registerIndex'])->name('user.index.register');
//Route::post('/registration',[\App\Http\Controllers\UserFolder\UserController::class,'register'])->name('user.register');

Route::get('/appoinment',[\App\Http\Controllers\AppointmentController::class,'index'])->name('appoinment.index');
Route::get('/appoinment/time',[\App\Http\Controllers\AppointmentController::class,'getAvailbleTime'])->name('appoinment.time');

// Route::get('/store',[\App\Http\Controllers\])
 // Route::get('/hospital_page',[HospitalController::class,'getHospital'])->name('hospital.name');
 //  Route::get('/pharmacies_page', [MainPageController::class, 'getPharmacies'])->name('hospital.pharmacies');

Route::get('/doctor/reciept',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'index'])->name('doctor.reciept');
Route::post('/doctor/reciept',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'addReciept'])->name('doctor.addReciept');

Route::get('/doctor/receipt/medicines',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'getMedicine'])->name('doctor.receipt.search');
Route::post('/doctor/receipt/medicines',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'addMedicine'])->name('doctor.receipt.add');
Route::get('/doctor/receipt/medicine',[\App\Http\Controllers\DoctorFolder\ReceiptController::class,'searchMedicine'])->name('doctor.medicines.search');

// Route::group(['middleware' => ['auth:user-api', 'jwt.auth'], 'prefix' => 'user'], function ($router) {
//     Route::post('/logout', [UserController::class, 'logout']);
//     Route::get('/profile', [UserController::class, 'userProfile']);
//     Route::post('/refresh', [UserController::class, 'refresh']);

//     Route::group(['prefix' => 'show/'], function (){
// //        Route::get('medicines', [MedicinesController::class, 'index']);
// //        Route::get('pharmacies', [MainPageController::class, 'index']);

// //        Route::get('receipt_page', [ReceiptController::class,'index']);
//        // Route::get('hospital_page',[HospitalController::class,'getHospital'])->name('hospital.name');
// Route::get('medicine_page', [MainPageController::class, 'getMedicines'])->name('hospital.medicines');
// Route::get('/medicine_page/search',[MainPageController::class,'search'])->name('medicines.search');
//         //Route::get('pharmacies_page', [MainPageController::class, 'getPharmacies'])->name('hospital.pharmacies');
//         //Route::get('pharmacy_page/{name}', [MainPageController::class, 'getPharmacy'])->name('hospital.pharmacy');

//         //Route::get('appointment_page', [AppointmentController::class, 'getAppointments']);
//     });

//     Route::group(['prefix' => 'edit/'], function ($router) {
//         Route::post('store/', [AppointmentController::class, 'store']);
//         Route::put('update/{id}', [AppointmentController::class, 'update']);
// //        Route::delete('destroy/{id}', [AppointmentController::class, 'destroy']);
//     });
// });

// /********* Route for Doctors ********/
// Route::group(['prefix' => 'doctor'], function ($router) {
// 	 Route::get('/login',[\App\Http\Controllers\DoctorFolder\DoctorController::class, 'showLoginForm'])->name('getDoctorLogin');
//     Route::post('/login', [DoctorController::class, 'login'])->name('dLogin');
//     Route::post('/register', [DoctorController::class, 'register']);
// });

// Route::group(['middleware' => ['auth:doctor-api', 'jwt.auth'], 'prefix' => 'doctor'], function ($router) {
//     Route::post('/logout', [DoctorController::class, 'logout']);
//     Route::get('/profile', [DoctorController::class, 'doctorProfile']);
//     Route::post('/refresh', [DoctorController::class, 'refresh']);

//     Route::group(['prefix' => 'edit/receipts'], function ($router) {
//         Route::get('/', [NewsController::class, 'index_for_subadmin'])->name('doctor');
//         Route::get('/{id}', [NewsController::class, 'show_for_subadmin']);
//         Route::post('/', [NewsController::class, 'store']);
//         Route::put('/{id}', [NewsController::class, 'update']);
//         Route::delete('/{id}', [NewsController::class, 'destroy']);
//     });
// });


// /********* Route for Pharmacies ********/
// Route::group(['prefix' => 'pharmacy'], function ($router) {
//     Route::post('/login', [PharmacyController::class, 'login']);
//     Route::post('/register', [PharmacyController::class, 'register']);
// });

// Route::group(['middleware' => ['auth:pharmacy-api', 'jwt.auth'], 'prefix' => 'pharmacy'], function ($router) {
//     Route::post('/logout', [PharmacyController::class, 'logout']);
//     Route::get('/profile', [PharmacyController::class, 'pharmacyProfile']);
//     Route::post('/refresh', [PharmacyController::class, 'refresh']);

//     Route::group(['prefix'=>'show/medicines'], function () {
//         Route::get('index', [MedicinesController::class, 'index']);
//         Route::post('store', [MedicinesController::class , 'store']);
//     });
// });

Route::group(['prefix' => 'user'], function ($router) {
    Route::get('login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
    Route::post('post-login', [\App\Http\Controllers\AuthController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [\App\Http\Controllers\AuthController::class, 'postRegistration'])->name('register.post');
});

Route::group(['middleware' => ['web'], 'prefix' => 'user'], function ($router) {
    Route::get('dashboard', [\App\Http\Controllers\AuthController::class, 'dashboard']);
    Route::get('mainpage', [\App\Http\Controllers\AuthController::class, 'mainpage']);
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [\App\Http\Controllers\AuthController::class, 'userProfile'])->name('userprofile');

    Route::group(['prefix' => 'show/'], function (){

    Route::get('contact',[MainPageController::class,'getContact'])->name('client.contact');
	Route::post('contact',[MainPageController::class,'contact'])->name('client.post.contact');
	Route::get('pharmacy_page', [MainPageController::class, 'getPharmacy'])->name('hospital.pharmacy');

	Route::get('medicine_page', [MainPageController::class, 'getMedicines'])->name('hospital.medicines');
	Route::get('medicine_page/search',[MainPageController::class,'search'])->name('medicines.search');

	Route::get('hospital_page',[HospitalController::class,'getHospital'])->name('hospital.name');
  	Route::get('pharmacies_page', [MainPageController::class, 'getPharmacies'])->name('hospital.pharmacies');
    Route::get('myReceipt', [MainPageController::class, 'getReceipt'])->name('client.receipt');
  	});
});


