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
Route::post('review/{isiny}', 'ReviewController@review');
Route::get('review/{isiny}',['uses' => 'ReviewController@review', 'as' => 'review.eh']);
Route::get('review', function () {return back();});

Route::post('makeup/{isinya}', 'ReviewController@makeupEh');
Route::get('makeup/{isinya}',['uses' => 'ReviewController@makeupEh', 'as' => 'makeup.eh']);

Route::post('brand/{isinya}', 'ReviewController@brand');
Route::get('brand/{isinya}',['uses' => 'ReviewController@brand', 'as' => 'brand.eh']);


//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('login', 'loginController@authenticate');
Route::post('registerx', 'userController@register');


Route::get('autocomplete', 'userController@autocomplete');
Route::get('search', 'userController@search');

// BACKEND PINA HEHEHEHE
Route::get('newreview', 'ReviewController@newreview');
Route::post('newreview', 'ReviewController@savenewreview');

Route::get('editprofile/{id}', 'userController@editprofile');
Route::post('editprofile', 'userController@updateprofile');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
