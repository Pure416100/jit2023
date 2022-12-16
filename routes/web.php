<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\blog;
use App\Models\Hospital;
use App\Models\QuestionTest;
use App\Models\Result;
use App\Models\report_Admin;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\userController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\QuestionTestController;
use App\Http\Controllers\SocialAuthFacebookController;
use App\Http\Controllers\case_studyController;
use App\Http\Controllers\comment_cstdController;
use App\Http\Controllers\notificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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


Route::get('/', function () {
    return view('index');
});

Route::get('/email', function () {
    return view('email');
});


Route::get('/about', function () {
    return view('about');
})->middleware('auth');
Route::get('/contact', function () {
    return view('contact');
})->middleware('auth');
Route::get('/services', function () {
    return view('Services');
})->middleware('auth');
Route::get('/day1', function () {
    return view('day1');
})->middleware('auth');
Route::get('/day2', function () {
    return view('day2');
})->middleware('auth');
Route::get('/day3', function () {
    return view('day3');
})->middleware('auth');
Route::get('/day4', function () {
    return view('day4');
})->middleware('auth');
Route::get('/day5', function () {
    return view('day5');
})->middleware('auth');

Route::get('/team', function () {
    return view('team');
})->middleware('auth');

Route::get('/choose', function () {
    return view('choose');
});

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('GoogleCallbacks', [App\Http\Controllers\HomeController::class, 'GoogleCallback']);
Route::post('ajaxRequestPost', [App\Http\Controllers\SocialAuthLoginController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
Route::post('ajaxRequestPost2', [App\Http\Controllers\SocialAuthLoginController::class, 'ajaxRequestPost2'])->name('ajaxRequest2.post');

Route::post('/profile-update', [App\Http\Controllers\HomeController::class, 'profile_update'])->name('profile-update');

