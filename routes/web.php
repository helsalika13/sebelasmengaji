<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuranWebController;
use App\Http\Controllers\AuthController;

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
    return view('landingpage');
});

Route::get('/showlogin', function () {
    return view('showlogin');
});
Route::get('/tes', function () {
    return view('layoutsadmin.master');
});
Route::get('/pro', function () {
    return view('adminprofile.profile');
});
Route::get('/quran', [QuranWebController::class, 'quran'])->name('quran');

Auth::routes();
Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('book/delete/{id}', [BookController::class, 'delete'])->name('deleteBook');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
