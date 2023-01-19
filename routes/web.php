<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\rounds_completed;
use App\Models\diary_day;
use App\Http\Controllers\diary_dayController;
use App\Http\Controllers\PDFController;
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

Route::get('/results', function () {
    return view('results');
});

Route::get('/store', [diary_dayController::class, 'store']);
Route::get('/store2', [diary_dayController::class, 'store2']);
Route::get('/store3', [diary_dayController::class, 'store2']);
Route::get('/store4', [diary_dayController::class, 'store4']);
Route::get('/store5', [diary_dayController::class, 'store5']);
Route::get('/store6', [diary_dayController::class, 'store6']);






Route::get('/certificate1', function () {
    return view('certificate1');
})->middleware('auth');
Route::get('/about', function () {
    return view('about');
})->middleware('auth');
Route::get('/contact', function () {
    return view('contact');
})->middleware('auth');
Route::get('/services', function () {
    return view('Services');
})->middleware('auth');

Route::get('/Menu_day', function () {
    return view('Menu_day');
});
Route::get('/home', function () {
    return view('home');
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

Route::get('/mypdf/{id}', [App\Http\Controllers\PDFController::class, 'pdf']);
Route::get('/mypdf', [App\Http\Controllers\PDFController::class, 'pdf2']);

Route::middleware(['auth:sanctum'])->get('/services', function () {
    $rounds_story = rounds_completed::all();
    return view('Services', compact(('rounds_story')));
})->name('/services');


Route::get('GoogleCallbacks', [App\Http\Controllers\HomeController::class, 'GoogleCallback']);
Route::post('ajaxRequestPost', [App\Http\Controllers\SocialAuthLoginController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
Route::post('ajaxRequestPost2', [App\Http\Controllers\SocialAuthLoginController::class, 'ajaxRequestPost2'])->name('ajaxRequest2.post');

Route::post('/profile-update', [App\Http\Controllers\HomeController::class, 'profile_update'])->name('profile-update');

