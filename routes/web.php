<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VisitController;
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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/product/{slug}',[ProductController::class,'detail'])->name('product-detail');
Route::get('/business',[BusinessController::class,'index'])->name('business');
Route::get('/news',[NewsController::class,'index'])->name('news');
Route::get('/news/{slug}',[NewsController::class,'detail'])->name('news-detail');
Route::get('/latest-news',[NewsController::class,'latest'])->name('latest-news');
Route::get('/events',[NewsController::class,'events'])->name('events');
Route::get('/literatures',[NewsController::class,'literatures'])->name('literatures');
Route::get('/visit-us',[VisitController::class,'index'])->name('visit');
Route::get('/contact-us',[ContactController::class,'index'])->name('contact');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
