<?php 

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\RoutePath;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



Route::prefix('admin')->group(function () {

         Route::get('/login', [App\Http\Controllers\Dashboard\Auth\LoginController::class, 'showLoginForm'])->name('admin.login')->middleware('guest:admin');;
        Route::post('/login', [App\Http\Controllers\Dashboard\Auth\LoginController::class, 'login']);

   

    Route::get('/register', [App\Http\Controllers\Dashboard\Auth\RegisterController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('/register', [App\Http\Controllers\Dashboard\Auth\RegisterController::class, 'create'])->name('admin.register');
        Route::get( '/logout' ,  [App\Http\Controllers\Dashboard\Auth\LoginController::class, 'destroy'])
    ->name('admin.logout');
 
 
    Route::middleware('auth:admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/partners/view', [App\Http\Controllers\Dashboard\PartnerController::class, 'index'])->name('admin.partners.view');
    Route::post('/partners/add', [App\Http\Controllers\Dashboard\PartnerController::class, 'store'])->name('admin.partners.add');
    Route::delete('/partners/delete/{id}',[App\Http\Controllers\Dashboard\PartnerController::class,'destory'])->name('admin.partners.delete');
    Route::post('/partners/update',[App\Http\Controllers\Dashboard\PartnerController::class,'update'])->name('admin.partners.update');

    Route::get('/services/view', [App\Http\Controllers\Dashboard\ServiceController::class, 'view'])->name('admin.services.view');
    Route::post('/services/add', [App\Http\Controllers\Dashboard\ServiceController::class, 'store'])->name('admin.services.add');
    Route::delete('/services/delete/{id}',[App\Http\Controllers\Dashboard\ServiceController::class,'delete'])->name('admin.services.delete');
    Route::post('/services/update',[App\Http\Controllers\Dashboard\ServiceController::class,'update'])->name('admin.services.update');

    Route::get('/setting/view',[App\Http\Controllers\Dashboard\SettingController::class,'view'])->name('admin.setting.view');
    Route::post('/setting/add',[App\Http\Controllers\Dashboard\SettingController::class,'store'])->name('admin.setting.add');

    Route::get('/blogs/view', [App\Http\Controllers\Dashboard\BlogController::class, 'index'])->name('admin.blogs.view');
    Route::post('/blogs/add', [App\Http\Controllers\Dashboard\BlogController::class, 'store'])->name('admin.blogs.add');
    Route::delete('/blogs/delete/{id}',[App\Http\Controllers\Dashboard\BlogController::class,'destroy'])->name('admin.blogs.delete');
    Route::post('/blogs/update',[App\Http\Controllers\Dashboard\BlogController::class,'update'])->name('admin.blogs.update');

    
    Route::get('/advertisement/view', [App\Http\Controllers\Dashboard\AdvertisementController::class, 'index'])->name('admin.advertisement.view');
    Route::post('/advertisement/add', [App\Http\Controllers\Dashboard\AdvertisementController::class, 'store'])->name('admin.advertisement.add');
    Route::delete('/advertisement/delete/{id}',[App\Http\Controllers\Dashboard\AdvertisementController::class,'destroy'])->name('admin.advertisement.delete');
    Route::post('/advertisement/update',[App\Http\Controllers\Dashboard\AdvertisementController::class,'update'])->name('admin.advertisement.update');

    Route::get('/rating/view', [App\Http\Controllers\Dashboard\RatingController::class, 'index'])->name('admin.rating.view');
    Route::post('/rating/add', [App\Http\Controllers\Dashboard\RatingController::class, 'store'])->name('admin.rating.add');
 
    Route::get('/setting/view', [App\Http\Controllers\Dashboard\SettingController::class, 'index'])->name('admin.setting.view');
    Route::post('/setting/update',[App\Http\Controllers\Dashboard\SettingController::class,'update'])->name('admin.setting.update');
    // Route::post('/setting/add', [App\Http\Controllers\Dashboard\SettingController::class, 'store'])->name('admin.setting.add');
 
    Route::get('/order/view', [App\Http\Controllers\Dashboard\OrderController::class, 'index'])->name('admin.order.view');
  
});
   
});