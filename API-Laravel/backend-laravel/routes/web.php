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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('Userss/index', [UsersController::class, 'index'])->name('Userss.index');
// Route::get('Customers/index', [CustomerController::class, 'index'])->name('Customers.index');
// Route::get('Transactions/index', [TransactionsController::class, 'index'])->name('Transactions.index');