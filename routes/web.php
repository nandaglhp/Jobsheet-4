<?php

use App\Http\Controllers\productController;
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
//jobsheet
Route::get('/hello', function(){
    return view('hello', ['name' => 'Ananda']);
});
Route::get('/child', function(){
    return view('child');
});
//praktikum 1
Route::get('/home', function(){ return view('home'); })-> name('home');
Route::get('/products',[productController::class, 'index']) -> name('products');
Route::get('/gallery', function(){ return view('gallery'); })-> name('gallery');
Route::get('/services', function(){ return view('services'); })-> name('services');
Route::get('/about', function(){ return view('about'); })-> name('about');
Route::get('/contact', function(){ return view('contact'); })-> name('contact');
