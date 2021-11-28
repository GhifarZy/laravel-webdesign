<?php

use App\Http\Controllers\backendController;
use App\Http\Controllers\landingController;
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

// Route::get('/', function () {
//     return view('main');
// });
Route::get('/', [landingController::class, 'index'])->name('login');
Route::get('loginAdmin', [landingController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('postLoginAdmin', [landingController::class, 'postLoginAdmin'])->name('postLoginAdmin');
Route::get('logoutAdmin', [landingController::class, 'logoutAdmin'])->name('logoutAdmin');
Route::get('loginMember', [landingController::class, 'loginMember'])->name('loginMember');
Route::post('postloginMembers', [landingController::class, 'postloginMembers'])->name('postloginMembers');
Route::get('logoutMembers', [landingController::class, 'logoutMembers'])->name('logoutMembers');

Route::get('register', [landingController::class, 'register'])->name('register');
Route::post('postRegister', [landingController::class, 'postRegister'])->name('postRegister');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboardAdmin', [backendController::class, 'index']);
    Route::get('dashboardMembers', [backendController::class, 'indexMembers']);
    Route::get('addMembers', [backendController::class, 'addMembers']);
    Route::get('editMembers', [backendController::class, 'editMembers']);
    Route::get('editDataMembers', [backendController::class, 'editDataMembers']);
    Route::get('dashboardIdMembers', [backendController::class, 'indexIdMembers']);
    Route::post('postMembers', [backendController::class, 'postMembers'])->name('postMembers');

});
