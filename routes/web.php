<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuranWebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/super', function () {
    return view('layoutsSadmin.master');
});
Route::get('/quran', [QuranWebController::class, 'quran'])->name('quran');

//superadmin
Route::get('/dataguru', [SuperAdminController::class, 'dataguru'])->name('dataguru');
Route::get('/add-teacher', [SuperAdminController::class, 'createguru'])->name('addguru');
Route::post('/store-teacher', [SuperAdminController::class, 'storeguru'])->name('storeguru');
Route::get('/edit-teacher/{id}', [SuperAdminController::class, 'editguru'])->name('editguru');
Route::post('/update-teacher/{id}', [SuperAdminController::class, 'updateguru'])->name('updateguru');
Route::get('/delete-teacher/{id}', [SuperAdminController::class, 'deleteguru'])->name('deleteguru');


Auth::routes();

Route::get('/home', [AdminController::class, 'index'])->name('admin')->middleware('auth');
