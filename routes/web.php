<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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

// Route::get('/profile', function () {
//     return view ('profile') ;
// });

//admin

Route::prefix('admin')->group(function() {
    Route::get('event', 'App\Http\Controllers\eventController@index');
    Route::get('event/create', 'App\Http\Controllers\eventController@create');
    Route::post('event', 'App\Http\Controllers\eventController@store');
    Route::get('event/{id}/edit', 'App\Http\Controllers\eventController@edit')->name('admin.event.edit');
    Route::put('event/{id}', 'App\Http\Controllers\eventController@update')->name('admin.event.update');
    Route::delete('event/{id}', 'App\Http\Controllers\eventController@destroy')->name('admin.event.destroy');
});

Route::prefix('admin')->group(function() {
    Route::get('customer', 'App\Http\Controllers\customerController@index');
    Route::get('customer/create', 'App\Http\Controllers\customerController@create');
    Route::post('customer', 'App\Http\Controllers\customerController@store');
    Route::get('customer/{id}/edit', 'App\Http\Controllers\customerController@edit')->name('admin.customer.edit');
    Route::put('customer/{id}', 'App\Http\Controllers\customerController@update')->name('admin.customer.update');
    Route::delete('customer/{id}', 'App\Http\Controllers\customerController@destroy')->name('admin.customer.destroy');

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