<?php

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
    return view('welcome');
});
Route::get('home','homeController@index1');
Route::get('makeup-face', function () {return view('makeup.makeup-face');});
Route::get('makeup-lips', function () {return view('makeup.makeup-lips');});
Route::get('makeup-lips-kylie', function () {return view('makeup.makeup-lips-kylie');});
Route::get('makeup-eyes', function () {return view('makeup.makeup-eyes');});
Route::get('makeup-kits', function () {return view('makeup.makeup-kits');});

Route::get('personalcare-bath', function () {return view('personalcare.personalcare-bath');});
Route::get('personalcare-body', function () {return view('personalcare.personalcare-bath');});
Route::get('personalcare-handsfeets', function () {return view('personalcare.personalcare-hands-feets');});

Route::get('skincare-cleanser', function () {return view('skincare.skincare-cleanser');});
Route::get('skincare-lipcare', function () {return view('skincare.skincare-lip');});
Route::get('skincare-moisturizer', function () {return view('skincare.skincare-moisturizer');});

Route::get('about-us', function () {return view('about');});
Route::get('contact-us', function () {return view('contact');});

// Route::get('simple', function () {return view('single');});

Route::get('single', function () {return view('single');});
Route::get('people', function () {return view('people');});
Route::get('user', function () {return view('user');});
Route::get('newreview', function () {return view('newreview');});


// UDAH BACKEND ANNE
Route::post('review', 'ReviewController@review');
//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', 'loginController@authenticate');
Route::post('register', 'userController@register');
