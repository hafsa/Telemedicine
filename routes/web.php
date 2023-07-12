<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\doctor\DoctorDashboardController;
use App\Http\Controllers\superadmin\SuperAdminDoctorController;
use App\Http\Controllers\superadmin\SuperAdminDashboardController;
use App\Http\Controllers\superadmin\SuperAdminUsersController;
use App\Http\Controllers\superadmin\SuperAdminSpecializationController;
use App\Http\Controllers\superadmin\SuperAdminBannerController;
use App\Http\Controllers\superadmin\SuperAdminSymptomsController;
use App\Http\Controllers\frontend\FrontEndHomeController;


Route::get('getdata',function(){
    $hours = HoursHelper::create('11:00', '14:00', 30, 'Y-m-d g:i A', [
        ['11:30', '12:00'],['12:15', '12:30'],
    ]);
    // $hours = HoursHelper::create('2023-05-25 08:00', '2023-06-10 08:30', 15, 'Y-m-d g:i A');
    dd($hours);
});
Route::get('/',[FrontEndHomeController::class,'index'])->name('home');
Route::get('doctor-details/{doctorid}',[FrontEndHomeController::class,'doctoreDetails'])->name('doctoreDetails');
Route::get('doctors',[FrontEndHomeController::class,'alldoctores'])->name('alldoctores');
Route::get('renderalldoctores',[FrontEndHomeController::class,'renderalldoctores'])->name('renderalldoctores');
Route::get('doctor-schedule/{doctorid}/{type}',[FrontEndHomeController::class,'doctoreScheduleDetails'])->name('doctoreScheduleDetails');
Auth::routes();

Route::prefix('/superadmin')->group(function () {
    Route::get('/login',[LoginController::class,'showsuperadminLoginForm'])->name('superadmin.login-view');
    Route::post('/login',[LoginController::class,'superadminLogin'])->name('superadmin.login');
    Route::post('/logout', [LoginController::class, 'superadminlogout'])->name('superadmin.logout')->middleware('auth:superadmin');

    Route::get('/dashboard',[SuperAdminDashboardController::class ,'index'])->name('superadmin.dashboard')->middleware('auth:superadmin');
    Route::resource('doctors', SuperAdminDoctorController::class)->middleware('auth:superadmin');
    Route::get('/doctor-list', [SuperAdminDoctorController::class ,'index'])->name('superadmin.doctorlist')->middleware('auth:superadmin');
    
    Route::resource('users', SuperAdminUsersController::class)->middleware('auth:superadmin');
    Route::get('/user-list', [SuperAdminUsersController::class ,'index'])->name('superadmin.userslist')->middleware('auth:superadmin');

    Route::resource('specialization', SuperAdminSpecializationController::class)->middleware('auth:superadmin');
    Route::get('/specialization-list',[SuperAdminSpecializationController::class ,'index'])->name('superadmin.specializationlist')->middleware('auth:superadmin');

    Route::resource('banner', SuperAdminBannerController::class)->middleware('auth:superadmin');
    Route::get('/banner-list',[SuperAdminBannerController::class ,'index'])->name('superadmin.bannerlist')->middleware('auth:superadmin');

    Route::resource('symptom', SuperAdminSymptomsController::class)->middleware('auth:superadmin');
    Route::get('/symptoms-list',[SuperAdminSymptomsController::class ,'index'])->name('superadmin.symptomslist')->middleware('auth:superadmin');
});

Route::prefix('/doctor')->group(function () {
    Route::get('/login',[LoginController::class,'showDoctorLoginForm'])->name('doctor.login-view');
    Route::post('/login',[LoginController::class,'doctorLogin'])->name('doctor.login');

    Route::get('/register',[RegisterController::class,'showDoctorRegisterForm'])->name('doctor.register-view');
    Route::post('/register',[RegisterController::class,'createDoctor'])->name('doctor.register');

    Route::get('/dashboard',[DoctorDashboardController::class ,'index'])->name('doctor.dashboard')->middleware('auth:doctor');
    Route::post('/logout', [LoginController::class, 'logout'])->name('doctorLogout')->middleware('auth:doctor');
});


