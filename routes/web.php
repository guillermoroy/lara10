<?php

use App\Http\Controllers\ContactController;
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


Route::get('/home', function () {
    return view('home'); //calling blade file
});

//sample for age route from Middleware folder
Route::get('/about', function () {
    echo 'Message for about'; //display message only
})->middleware('check');

Route::get('/contact', [ContactController::class, 'index']);