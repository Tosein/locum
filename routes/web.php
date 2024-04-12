<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\LoginController;
use App\Http\Controllers\Home\SignupController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Dentist\DentistController;
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
Route::get('/dentist_signup_verify/{token}/{email}',[SignupController::class, 'dentist_signup_verify'])->name('dentist_signup_verify');

Route::post('/dentist_login_submit',[LoginController::class, 'dentist_login_submit'])->name('dentist_login_submit');
Route::get('/dentist_forget_password',[LoginController::class, 'dentist_forget_password'])->name('dentist_forget_password');
Route::get('/dentist/logout',[LoginController::class, 'dentist_logout'])->name('dentist_logout');



Route::middleware(['dentist:dentist'])->group(function(){
    Route::get('/dentist/dashboard', [DentistController::class, 'dashboard'])->name('dentist_dashboard');
    Route::get('/dentist/edit_profile', [DentistController::class, 'edit_profile'])->name('dentist_edit_profile');
    Route::post('/dentist/edit_profile/update', [DentistController::class, 'edit_profile_update'])->name('dentist_edit_profile_update');

    Route::get('/dentist/education/view', [DentistController::class, 'education'])->name('dentist_education');
    Route::get('/dentist/skill/view', [DentistController::class, 'skill'])->name('dentist_skill');
    Route::get('/dentist/experience/view', [DentistController::class, 'experience'])->name('dentist_experience');
    Route::get('/dentist/resume/view', [DentistController::class, 'resume'])->name('dentist_resume');
});




// Company
Route::post('/company_signup_submit',[SignupController::class, 'company_signup_submit'])->name('company_signup_submit');

Route::post('/company_login_submit',[LoginController::class, 'company_login_submit'])->name('company_login_submit');
Route::post('/company_login_submit',[LoginController::class, 'company_login_submit'])->name('company_login_submit');

Route::middleware(['company:company'])->group(function(){
    Route::get('/company/dashboard', [CompanyController::class, 'dashboard'])->name('company_dashboard');
    Route::get('/company/edit_profile', [CompanyController::class, 'edit_profile'])->name('company_edit_profile');
    Route::post('/dentist/edit_profile/update', [CompanyController::class, 'edit_profile_update'])->name('company_edit_profile_update');
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
