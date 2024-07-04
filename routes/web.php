<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});
include_once __DIR__.'/api.php';
include_once __DIR__.'/dashborad.php';

//VerificationController
 
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/send-2fa-code',  [App\Http\Controllers\Auth\VerificationController::class, 'send2FACode'])->name('send-2fa-code');
Route::get('/rsend-2fa-code/{userId}',  [App\Http\Controllers\Auth\VerificationController::class, 'rsend2FACode'])->name('rsend-2fa-code');
Route::get('/verify-2fa', [App\Http\Controllers\Auth\VerificationController::class, 'showVerify2FAForm'])->name('verify-2fa');
Route::post('/verify-2fa', [App\Http\Controllers\Auth\VerificationController::class, 'verify2FACode']);
Route::get( '/logout' ,  [App\Http\Controllers\Auth\LoginController::class, 'destroy'])
->name('logout');

Route::middleware('auth')->group(function () {

Route::get('/bloges', [App\Http\Controllers\Dashboard\BlogController::class, 'index_dashboard'])->name('bloges');

Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'show']) ->name('profile');
Route::post('/profile/update', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update');
 
// Route::get('/home', function () {
//     return view('home');
// })->name('home')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});
