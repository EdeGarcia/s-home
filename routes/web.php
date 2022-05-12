<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrarController;

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
//     return view('template');
// })->name('home');
Route::get('/', function () {
         return view('template');
     })->name('home');

// Route::middleware(['accessRoute:/login'])->group(function () {

// });
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('/registrar', [RegistrarController::class, 'index'])->name('registrar');
Route::post('/registrar', [RegistrarController::class, 'store'])->name('registrar.store');


