<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
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
Auth::routes();
Route::get('/', function () {
    return redirect('homepage');
});

Route::get('/admin', function () {
    return redirect('login');
});
//admin
Route::get('/home', [HomeController::class, 'index']);
//user wali
Route::get('/homepage', [WebController::class, 'index']);
// Route::get('/master', function () {
//     return view('admin.layout.master');
// });
// Route::get('/home', function () {
//     return view('admin.home');
// });
// Route::get('/user', function () {
//     return view('user.page.AfterLogin');
// });
// Route::get('/coba', function () {
//     return view('user.page.login');
// });