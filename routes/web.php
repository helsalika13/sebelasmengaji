<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuranWebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MasukController;

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

Route::get('/quran', [QuranWebController::class, 'quran'])->name('quran');
Route::get('/quran-surat/{id}', [QuranWebController::class, 'quransurat'])->name('quransurat');

Route::get('showlogin', [MasukController::class, 'showFormLogin'])->name('showlogin');
Route::post('ilogin', [MasukController::class, 'login'])->name('ilogin');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/ilogout', [MasukController::class, 'logout'])->name('logout');
    Route::get('/superprofile', [MasukController::class, 'profile'])->name('sprofile');
    Route::post('/update-sprofile/{id}', [MasukController::class, 'updateprofile'])->name('updatesprofile');

    //superadmin
    Route::get('/homesadmin', [SuperAdminController::class, 'index'])->name('superadmin');
    Route::get('/dataguru', [SuperAdminController::class, 'dataguru'])->name('dataguru');
    Route::get('/add-teacher', [SuperAdminController::class, 'createguru'])->name('addguru');
    Route::post('/store-teacher', [SuperAdminController::class, 'storeguru'])->name('storeguru');
    Route::get('/edit-teacher/{id}', [SuperAdminController::class, 'editguru'])->name('editguru');
    Route::post('/update-teacher/{id}', [SuperAdminController::class, 'updateguru'])->name('updateguru');
    Route::get('/delete-teacher/{id}', [SuperAdminController::class, 'deleteguru'])->name('deleteguru');
    Route::get('/akun-teacher', [SuperAdminController::class, 'akunguru'])->name('akunguru');
    Route::get('/create-akun/{nip}', [SuperAdminController::class, 'createakun'])->name('createakun');
    Route::get('/datakelas', [SuperAdminController::class, 'datakelas'])->name('datakelas');
    Route::get('/add-kelas', [SuperAdminController::class, 'createkelas'])->name('addkelas');
    Route::post('/store-kelas', [SuperAdminController::class, 'storekelas'])->name('storekelas');
    Route::get('/edit-kelas/{id}', [SuperAdminController::class, 'editkelas'])->name('editkelas');
    Route::post('/update-kelas/{id}', [SuperAdminController::class, 'updatekelas'])->name('updatekelas');
    Route::get('/delete-kelas/{id}', [SuperAdminController::class, 'deletekelas'])->name('deletekelas');

    //admin
    Route::get('/home', [AdminController::class, 'index'])->name('admin');
    Route::get('/getkelas', [AdminController::class, 'getkelas'])->name('getkelas');
    Route::get('/progress', [AdminController::class, 'progress'])->name('progress');
    Route::get('/progress/{id}', [AdminController::class, 'progresskelas'])->name('progresskelas');
    Route::get('/feedback/{id}', [AdminController::class, 'feedback'])->name('feedback');
    Route::post('/create-feedback', [AdminController::class, 'createfeedback'])->name('createfeedback');
    Route::get('/penilaian', [AdminController::class, 'penilaian'])->name('penilaian');
    Route::get('/exportexcel', [AdminController::class, 'exportexcel'])->name('exportexcel');
    Route::get('/profile', [MasukController::class, 'profile'])->name('profile');
    Route::post('/update-profile/{id}', [MasukController::class, 'updateprofile'])->name('updateprofile');
});
