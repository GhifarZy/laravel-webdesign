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
Route::get('/', [landingController::class, 'index'])->name('cariData');
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
    Route::post('postAddMembers', [backendController::class, 'postAddMembers'])->name('postAddMembers');
    Route::post('postMembersInAdmin', [backendController::class, 'postMembersInAdmin'])->name('postMembersInAdmin');
    Route::get('add/{members}/Members', [backendController::class, 'addMembers']);
    Route::get('adds/{members}/Members', [backendController::class, 'addsMembers']);
    Route::get('editData/{members}/Members', [backendController::class, 'editDataMembers']);
    Route::post('updateMemberInAdmin/{members}', [backendController::class, 'updateMemberInAdmin']);
    Route::post('updateDataMembers/{members}', [backendController::class, 'updateDataMembers']);
    Route::post('updateDataGambarMembers/{members}', [backendController::class, 'updateDataGambarMembers']);
    Route::delete('deleteUser/{members}', [backendController::class, 'deleteUser']);
    Route::delete('deleteProfiles/{members}', [backendController::class, 'deleteProfiles']);

    Route::get('/dataMembersExport', [backendController::class, 'dataMembersExport'])->name('dataMembersExport');
    Route::post('/dataMembersImport', [backendController::class, 'dataMembersImport'])->name('dataMembersImport');

    // member
    Route::get('dashboardIdMembers', [backendController::class, 'indexIdMembers']);
    Route::get('edit/{members}/Members', [backendController::class, 'editMembers']);
    Route::post('postMembers', [backendController::class, 'postMembers'])->name('postMembers');
    Route::post('updateMembers/{members}', [backendController::class, 'updateMembers']);
    Route::post('updateGambarMembers/{members}', [backendController::class, 'updateGambarMembers']);
    Route::post('changePasswordBy/{members}', [backendController::class, 'changePasswordBy']);
    Route::delete('deleteMembers/{members}', [backendController::class, 'deleteMembers']);

});
