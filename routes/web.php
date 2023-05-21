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

Route::get('/wishlist', function () {
    return view ('wishlist') ;
});

Route::get('/transaction', function () {
    return view ('transaction') ;
});

// Route::get('/order_history', function () {
//     return view ('order_history') ;
// });

Route::get('/notification', function () {
    return view ('notification') ;
});

Route::get('/profile', function () {
    return view ('profile') ;
});

//admin

Route::prefix('admin')->group(function() {
    Route::get('event', 'App\Http\Controllers\eventController@index');
    Route::get('event/create', 'App\Http\Controllers\eventController@create');
    Route::post('event', 'App\Http\Controllers\eventController@store');
});

Route::prefix('admin')->group(function() {
    Route::get('customer', 'App\Http\Controllers\customerController@index');
    Route::get('customer/create', 'App\Http\Controllers\customerController@create');
    Route::post('customer', 'App\Http\Controllers\customerController@store');
});

Route::prefix('admin')->group(function() {
    Route::get('ticket', 'App\Http\Controllers\ticketController@index');
    Route::get('ticket/create', 'App\Http\Controllers\ticketController@create');
    Route::post('ticket', 'App\Http\Controllers\ticketController@store');
});

Route::prefix('admin')->group(function() {
    Route::get('transaction', 'App\Http\Controllers\transactionController@index');
    Route::get('transaction/create', 'App\Http\Controllers\transactionController@create');
    Route::post('transaction', 'App\Http\Controllers\transactionController@store');
});





// Route::prefix('admin')->group(function() {
//     Route::get('event', 'App\Http\Controllers\eventController@index');
//     Route::get('event/create', 'App\Http\Controllers\eventController@create');
//     Route::post('event', 'App\Http\Controllers\eventController@store');
// });

//home

Route::get('/home_admin', function(){
    return view('admin.home');
});


