<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TeamController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//--------------halaman frontend------------------
Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/cp', function () {
    return view('frontend.contact');
});

Route::get('/team', [TeamController::class, 'index']);

//-------------latihan dasar2 route----------------
Route::get('/salam', function () {
    return '<h3>Selamat Belajar Laravel Framework</h3>';
});

Route::get('/staff/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai:'.$nama.'<br/>Divisi: '.$divisi;
});

Route::get('/person', function () {
    return view('data_person');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/staff',[StaffController::class,'dataStaff']);

//--------------halaman backend------------------
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/contact', function () {
    return view('backend.contact');
});

Route::get('/profile', function () {
    return view('backend.profile');
});