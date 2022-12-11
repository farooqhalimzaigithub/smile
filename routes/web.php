<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\front\FrontController;
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

Route::get('/', function () {
	// return view('layouts.app');
     // return view('back.layouts.master');
    return redirect()->route('/home');
})->middleware('auth');
// Route::get('/', function () {
//     return view('admin.back.layouts.master');
//      return redirect()->route('home');
// });


// Route::get('/', 'htmlcontroller@homepage')->name('home');
//Front Routes
// Route::get('/', 'App/Controllers/front/Frontcontroller@app')->name('app');
Route::get('/',[Frontcontroller::class,'app']);
// Route::get('/',[Frontcontroller::class,'donatepage']);
// Route::post('donations', 'htmlcontroller@donate')->name('donation');
// Route::get('', 'htmlcontroller@donatepage');

// ==============================resource routes=============================
Route::resource('donations', 'DonationController');
// Route::resource('users', 'UserController');
Route::resource('events', 'EventController');
Route::resource('plans', 'PlanController');
Route::resource('sliders', 'SliderController');
Route::resource('gelleries', 'GellaryController');




// ==============================resource routes=============================

// Route::get('login', 'UserController@customlogin');


Route::get('about', 'htmlcontroller@aboutpage');







Route::get('education', 'htmlcontroller@educationpage');

Route::get('educationdetail', 'htmlcontroller@educationdetailpage');

Route::get('medical', 'htmlcontroller@medicalpage');

Route::get('medicaldetail', 'htmlcontroller@medicaldetailpage');

Route::get('poverty', 'htmlcontroller@povertypage');

Route::get('povertydetail', 'htmlcontroller@povertydetailpage');

Route::get('upcomingevent', 'htmlcontroller@upcomingeventpage');

Route::get('upcomingeventdetail', 'htmlcontroller@upcomingeventdetailpage');

Route::get('completedevent', 'htmlcontroller@completedeventpage');

Route::get('completedeventdetail', 'htmlcontroller@completedeventdetailpage');

Route::get('blog', 'htmlcontroller@blogpage');

Route::get('blogdetail', 'htmlcontroller@blogdetailpage');

Route::get('successstories', 'htmlcontroller@successstoriespage');

Route::get('successstoriesdetail', 'htmlcontroller@successstoriesdetailpage');

Route::get('register', 'htmlcontroller@registerpage');

Route::get('login', 'htmlcontroller@loginpage');

Route::get('contact', 'htmlcontroller@contactpage');

Route::get('termofuse', 'htmlcontroller@termpage');

Route::get('privacy&policy', 'htmlcontroller@privacypage');

// Route::get('donate', 'htmlcontroller@donatepage');
// Route::post('donate', 'htmlcontroller@donate')->name('donation');
Route::get('/donation-approved/{id}',[AdminController::class,'approved']);



Route::get('faqs', 'htmlcontroller@faqspage');

Route::get('readmore', 'htmlcontroller@readmorepage');

//admin
Route::get('admin',[AdminController::class,'home']);



/*Route::get('volunteer', 'htmlcontroller@volunteerpage');*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


