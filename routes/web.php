<?php

use Illuminate\Support\Facades\Route;

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
//login & signup
Route::get('/login ', function () {
    return view ('login') ;
});

Route::get('/signup ', function () {
    return view ('signup') ;
});

// Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function() {

// });

//homepage (before login)
Route::get('/', function () {
    return view ('index') ;
});

//user
//homepage for user(after login)

Route::get('/home', function () {
    return view ('home') ;
});

//navigation bar
Route::get('/logo', function () {
    return view ('home') ;
});

Route::get('/ticket', function () {
    return view ('ticket') ;
});

Route::get('/concert', function () {
    return view ('concert') ;
});


Route::get('/order_history', function () {
    return view ('order_history') ;
});

Route::get('/notification', function () {
    return view ('notification') ;
});

Route::get('/profile', function () {
    return view ('profile') ;
});

//admin

Route::prefix('admin')->group(function(){

    Route::controller(App\Http\Controllers\eventController::class)->group(function() {
        
        Route::get('event', 'index');
        Route::get('event/create', 'create');
        Route::post('event', 'store');
    });
});

//home

Route::get('/home_admin', function(){
    return view('admin.home');
});

//Profile

// Route::get('/profile_my_account', function () {
//     return view ('profile_my_account') ;
// });

// Route::get('/profile_my_order', function () {
//     return view ('profile_my_order') ;
// });

// Route::get('/profile_my_order/detail', function () {
//     return view ('detail_order') ;
// });

// Route::get('/profile_payment_method', function () {
//     return view ('profile_payment_method') ;
// });

// Route::get('/profile_help', function () {
//     return view ('profile_help') ;
// });

// Route::get('/profile_logout', function () {
//     return view ('landing_page') ;
// });

// Route::prefix()







