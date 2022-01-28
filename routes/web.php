<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Pharmaceutical\PharmaceuticalController;
use App\Http\Controllers\Vaccine\VaccineController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Appointment\AppointmentController;
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
//Login Page
Route::get('/', function () {
    return redirect('/login');
});
//Authenitication Routes
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginstore', [AuthController::class, 'AuthCheck']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
//Admin Routes
Route::prefix('admin/')->group(function () {
    Route::get('home', [AuthController::class, 'home'])->name('admin-home');
    //profile Routes
    Route::get('profile', [AdminController::class, 'Profile'])->name('admin-profile');
    //Pharmaceuticals Routes 
    Route::get('add-pharma', [PharmaceuticalController::class, 'AddPharma'])->name('admin-add-pharma');
    Route::get('pharma-list', [PharmaceuticalController::class, 'PharmaList'])->name('admin-pharma-list');
    //Vaccine Routes 
    Route::get('add-vaccine', [VaccineController::class, 'AddVaccine'])->name('admin-add-vaccine');
    Route::get('vaccine-list', [VaccineController::class, 'VaccineList'])->name('admin-vaccine-list');
    //Patients Routes 
    Route::get('add-patient', [AppointmentController::class, 'AddPatient'])->name('admin-add-patient');
    Route::get('patient-list', [AppointmentController::class, 'PatientList'])->name('admin-patient-list');
    //Reports Routes
    Route::get('total-sales', [AppointmentController::class, 'TotalSales'])->name('admin-total-sales');
    Route::get('invoice', [AppointmentController::class, 'invoice'])->name('admin-invoice');
    Route::get('invoice-details', [AppointmentController::class, 'invoice_details'])->name('admin-invoice-details');
    Route::get('setting', [AppointmentController::class, 'setting'])->name('admin-setting');
});
