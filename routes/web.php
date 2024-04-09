<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\LoginController;
use App\Http\Controllers\Home\SignupController;
use App\Http\Controllers\Company\CompanyController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login',[LoginController::class, 'index'])->name('home_login');
Route::get('/forget-password',[LoginController::class, 'forget_password'])->name('home_forget_password');
Route::get('/create-account',[SignupController::class, 'index'])->name('home_create_account');

//Dentist
Route::post('/dentist_signup_submit',[SignupController::class, 'dentist_signup_submit'])->name('dentist_signup_submit');
// Company
Route::post('/company_signup_submit',[SignupController::class, 'company_signup_submit'])->name('company_signup_submit');

Route::post('/company_login_submit',[LoginController::class, 'company_login_submit'])->name('company_login_submit');
Route::post('/company_login_submit',[LoginController::class, 'company_login_submit'])->name('company_login_submit');

Route::middleware(['company:company'])->group(function(){
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name('company_dashboard');
});

// Admin
Route::get('/admin', [AdminHomeController::class, 'home'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin_login', [AdminHomeController::class, 'login'])->name('admin_login');
Route::post('/admin_login_submit', [AdminHomeController::class, 'admin_login_submit'])->name('admin_login_submit');
Route::get('/admin_logout', [AdminHomeController::class, 'logout'])->name('admin_logout');
Route::get('/admin_forget_password', [AdminHomeController::class, 'forget_password'])->name('admin.forget_password');
Route::get('/admin/reset-password/{token}/{email}', [AdminHomeController::class, 'admin_reset_password'])->name('admin_reset_password');
Route::post('/admin_forget_password_submit', [AdminHomeController::class, 'admin_forget_password_submit'])->name('admin_forget_password_submit');
Route::post('/admin_reset_password_submit', [AdminHomeController::class, 'admin_reset_password_submit'])->name('admin_reset_password_submit');
