<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminProfileSettingController;

use App\Http\Controllers\Admin\LoginSecurityController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// LoginController
Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'postLogin'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/complete-registration', [RegisterController::class, 'completeRegistration'])->name('complete.registration');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', '2fa']], function(){

    // HomeController
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // UserController
    Route::resource('users', UserController::class);

    // AdminProfileSettingController
    Route::get('profile-setting', [AdminProfileSettingController::class ,'profileUpdate'])->name('admin.profile-setting.index');
    Route::put('profile-setting', [AdminProfileSettingController::class ,'update'])->name('admin.profile-setting.update');

    Route::get('/2fa',[LoginSecurityController::class, 'show2faForm']);
    Route::post('/generateSecret',[LoginSecurityController::class, 'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa',[LoginSecurityController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/disable2fa',[LoginSecurityController::class, 'disable2fa'])->name('disable2fa');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify');

    // test middleware
    Route::get('/2fa_verification', function () {
        return redirect('admin/dashboard');
    });
});