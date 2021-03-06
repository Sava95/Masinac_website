<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
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

/*
Route::get('/', function () {return view('welcome');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
*/

// Main page routes 
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/galery', [MainController::class, 'galery'])->name('galery');
Route::get('/about_us', [MainController::class, 'about_us'])->name('about_us');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/details/{id}/{prod_name}', [MainController::class, 'details'])->name('details');


// Contact us routes
Route::post('/contact-us/send-email', [ContactController::class, 'send_email'])->name('send_email');