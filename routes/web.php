<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorFolder\DoctorController;
use App\Http\Controllers\Pharmacy\MedicinesController;
use App\Http\Controllers\Pharmacy\PharmacyController;
use App\Http\Controllers\UserFolder\MainPageController;
use App\Http\Controllers\UserFolder\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorFolder\RecieptControllers;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DoctorFolder\DoctorAuthController;
use App\Http\Controllers\DoctorFolder\SearchPatientController;
use App\Http\Controllers\AuthController;
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








// Route::get('/appoinment',[\App\Http\Controllers\AppointmentController::class,'index'])->name('appoinment.index');
// Route::get('/appoinment/doctor',[\App\Http\Controllers\AppointmentController::class,'getDoctor'])->name('appoinment.doctor');
// Route::get('/appoinment/doctorTime', [\App\Http\Controllers\AppointmentController::class,'getAvailbleTime'])->name('appointment.time');
// Route::post('/appoinment/doctorTime',[\App\Http\Controllers\AppointmentController::class,'postAppointment'])->name('users.post.appointment');
// // Route::get('/appoinment/time',[\App\Http\Controllers\AppointmentController::class,'getAvailbleTime'])->name('appoinment.time');

// Route::get('/store',[\App\Http\Controllers\])
 // Route::get('/hospital_page',[HospitalController::class,'getHospital'])->name('hospital.name');
 //  Route::get('/pharmacies_page', [MainPageController::class, 'getPharmacies'])->name('hospital.pharmacies');

// Route::get('/doctor/reciept',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'index'])->name('doctor.reciept');
// Route::post('/doctor/reciept',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'addReciept'])->name('doctor.addReciept');

// Route::get('/doctor/receipt/medicines',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'getMedicine'])->name('doctor.receipt.search');
// Route::post('/doctor/receipt/medicines',[\App\Http\Controllers\DoctorFolder\RecieptControllers::class,'addMedicine'])->name('doctor.receipt.add');
// Route::get('/doctor/receipt/medicine',[\App\Http\Controllers\DoctorFolder\ReceiptController::class,'searchMedicine'])->name('doctor.medicines.search');



Route::group(['prefix' => 'user'], function ($router) {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
});

Route::group(['middleware' => ['web'], 'prefix' => 'user'], function ($router) {
    Route::get('dashboard', [AuthController::class, 'dashboard']);
    Route::get('mainpage', [AuthController::class, 'mainpage']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [AuthController::class, 'userProfile'])->name('userprofile');
    Route::get('/appoinment',[AppointmentController::class,'index'])->name('appoinment.index');
    Route::get('/appoinment/doctor',[AppointmentController::class,'getDoctor'])->name('appoinment.doctor');
    Route::get('/appoinment/doctorTime', [AppointmentController::class,'getAvailbleTime'])->name('appointment.time');
    Route::post('/appoinment/doctorTime',[AppointmentController::class,'postAppointment'])->name('users.post.appointment');

    Route::group(['prefix' => 'show/'], function (){

    Route::get('contact',[MainPageController::class,'getContact'])->name('client.contact');
	Route::post('contact',[MainPageController::class,'contact'])->name('client.post.contact');
	Route::get('pharmacy_page', [MainPageController::class, 'getPharmacy'])->name('hospital.pharmacy');

	Route::get('medicine_page', [MainPageController::class, 'getMedicines'])->name('hospital.medicines');
	Route::get('medicine_page/search',[MainPageController::class,'search'])->name('medicines.search');

    Route::get('recipes/{id}', [MainPageController::class, 'getQrReceipt'])->name('recipes.show.qr');

	Route::get('hospital_page',[HospitalController::class,'getHospital'])->name('hospital.name');
  	Route::get('pharmacies_page', [MainPageController::class, 'getPharmacies'])->name('hospital.pharmacies');
    Route::get('myReceipt', [MainPageController::class, 'getReceipt'])->name('client.receipt');
    Route::get('receiptInfo', [MainPageController::class, 'getInformationReceipt'])->name('client.receipt.information');
  	});
});


// Doctor route 
Route::group(['prefix' => 'doctor'], function ($router) {
    Route::get('login', [DoctorAuthController::class, 'index'])->name('doctor.login');
    Route::post('postLogin', [DoctorAuthController::class, 'postLoginDoctor'])->name('login.post.doctor');
    Route::get('registration', [DoctorAuthController::class, 'registration'])->name('doctor.register');
    Route::post('post-registration', [DoctorAuthController::class, 'postRegistration'])->name('doctor.register.post');
});



Route::group(['middleware' => ['auth:doctor'], 'prefix' => 'doctor'], function ($router) {
    Route::get('mainPage', [DoctorAuthController::class, 'mainPage'])->name('mainPage');
    Route::get('logout', [DoctorAuthController::class, 'logout'])->name('doctor.logout');
    Route::get('profile', [DoctorAuthController::class, 'doctorProfile'])->name('doctorProfile');
    Route::get('contact', [DoctorAuthController::class, 'contact'])->name('doctor.contact');
    Route::get('getNotifications', [RecieptControllers::class, 'getNotifications'])->name('getNotifications');
    Route::get('getUserProfile', [RecieptControllers::class, 'getUserProfile'])->name('getUserProfile');
    Route::get('reciept',[RecieptControllers::class,'index'])->name('doctor.reciept');
    Route::post('reciept',[RecieptControllers::class,'addReciept'])->name('doctor.addReciept');
    Route::get('receipt/medicines',[RecieptControllers::class,'getMedicine'])->name('doctor.receipt.search');
    Route::post('receipt/medicines',[RecieptControllers::class,'addMedicine'])->name('doctor.receipt.add');
    Route::get('receipt/medicine',[RecieptControllers::class,'searchMedicine'])->name('doctor.medicines.search');

    Route::group(['prefix' => 'edit'], function ($router) {
        Route::get('/index',[SearchPatientController::class,'index'])->name('doctor.index');
        Route::get('/search',[SearchPatientController::class,'search'])->name('doctor.search');

        Route::get('/setReceipt', [RecieptControllers::class, 'setReceipt'])->name('setReceipt');
        Route::get('setMedicines', [RecieptControllers::class, 'setMedicines'])->name('setMedicines');
    });
});

