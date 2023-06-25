<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('home');
});

Route::get('/faq', function () {
	return view('faq');
});

Route::get('/privacy-policy', function () {
	return view('privacy');
});

Route::get('/terms-of-services', function () {
	return view('terms');
});

Route::get('/about', function () {
		return view('about');
});

Route::post('/contact', [ContactController::class, 'store']);
