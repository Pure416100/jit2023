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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('Services');
});

Route::get('/day1', function () {
    return view('day1');
});
Route::get('/day2', function () {
    return view('day2');
});
Route::get('/day3', function () {
    return view('day3');
});
Route::get('/day4', function () {
    return view('day4');
});
Route::get('/day5', function () {
    return view('day5');
});

Route::get('/team', function () {
    return view('team');
});
Route::get('/choose', function () {
    return view('choose');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
