<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
/* ----------------------- Admin Route ----------------------- */

Route::prefix('admin')->group(function (){

    Route::get('/login', [AdminController::class, 'Index'])->name('login_form');
    Route::post('/login/admin', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    
    Route::post('/logout', [AdminController::class, 'destroy'])
                ->name('admin.logout');
});

// Route::get('admin', function () { return view('admin.admin-dashboard'); })->middleware('checkRole:admin');


/* ----------------------- End Admin Route ----------------------- */
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

Route::get('/ticket', 'App\Http\Controllers\ticketController@index');
// Route::get('/ticket', function () {
//     return view ('ticket') ;
// });

Route::get('/ticket', function () {
    return view ('ticket');
})->name('ticket');

Route::get('/concert', function () {
    return view ('concert') ;
});

Route::get('/blackpink', function () {
    return view ('blackpink') ;
});

Route::get('/myorder', function () {
    return view ('myorder') ;
})->name('myorder');

Route::get('/signup', function () {
    return view ('signup') ;
});

Route::get('/notification', function () {
    return view ('notification') ;
})->name('notification');

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
    Route::get('ticket/{id}/edit', 'App\Http\Controllers\ticketController@edit')->name('admin.ticket.edit');
    Route::put('ticket/{id}', 'App\Http\Controllers\ticketController@update')->name('admin.ticket.update');
    Route::delete('ticket/{id}', 'App\Http\Controllers\ticketController@destroy')->name('admin.ticket.destroy');
});

Route::prefix('admin')->group(function() {
    Route::get('transaction', 'App\Http\Controllers\transactionController@index');
    Route::get('transaction/create', 'App\Http\Controllers\transactionController@create');
    Route::post('transaction', 'App\Http\Controllers\transactionController@store');
    Route::get('transaction/{id}/edit', 'App\Http\Controllers\transactionController@edit')->name('admin.transaction.edit');
    Route::put('transaction/{id}', 'App\Http\Controllers\transactionController@update')->name('admin.transaction.update');
    Route::delete('transaction/{id}', 'App\Http\Controllers\transactionController@destroy')->name('admin.transaction.destroy');
});