<?php

use App\Http\Livewire\Page\Auth\ForgotPassword;
use App\Http\Livewire\Page\Auth\Login;
use App\Http\Livewire\Page\Auth\Register;
use App\Http\Livewire\Page\Dashboard\HomePage;
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

Route::get('/', Login::class)->name('welcome');
Route::get('/login', Login::class)->name('auth.login');
Route::get('/register', Register::class)->name('auth.register');
Route::get('/forgot', ForgotPassword::class)->name('auth.forgot');

// Auth::routes();

// Route::get('/home', App\Http\Controllers\HomeController::class, 'index')->name('home');
Route::get('/home', HomePage::class)->name('home');
