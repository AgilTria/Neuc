<?php

use App\Http\Controllers\AuthController;
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
    return view('validasi_sertifikat');
});
Route::get('/instansi', function () {
    return view('instansi.index');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard/verification', function () {
    return view('admin.verification');
});
Route::get('/dashboard/edit', function () {
    return view('admin.edit');
});
Route::get('/navbar', function () {
    return view('menubar');
});
Route::get('/register', function () {
    return view('instansi.register');
});

Route::get('login', [AuthController::class, 'login']);
