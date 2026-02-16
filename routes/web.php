<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactUsMail;
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



Route::get('innerpage', function () {
    return view('innerpage');
});

Route::get('aboutus', function () {
    return view('aboutus');
});


Route::get('services', function () {
    return view('services');
});


Route::get('contactus', function () {
    return view('contactus');
});

Route::post('contactusprocess', [ContactUsController::class, "contactUs" ]);


Route::get("testEmail", function(){
    return new App\Mail\ContactUsMail();
}); /// Testing Email