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

// Route::get('people', function () {return view('people');});
Route::get('user', function () {return view('user');});
Route::get('newreview', function () {return view('newreview');});


// UDAH BACKEND ANNE
Route::post('hashtag/{isiny}', 'ReviewController@review');
Route::get('hashtag/{isiny}',['uses' => 'ReviewController@review', 'as' => 'review.eh']);
Route::get('hashtag', function () {return back();});

Route::post('makeup/{isinya}', 'ReviewController@makeupEh');
Route::get('makeup/{isinya}',['uses' => 'ReviewController@makeupEh', 'as' => 'makeup.eh']);

Route::post('brand/{isinya}', 'ReviewController@brand');
Route::get('brand/{isinya}',['uses' => 'ReviewController@brand', 'as' => 'brand.eh']);

Route::post('review/{isin}', 'ReviewController@lihatReview');
Route::get('review/{isin}',['uses' => 'ReviewController@lihatReview', 'as' => 'isiReview.eh']);

Route::post('people/{isin}', 'ReviewController@people');
Route::get('people/{isin}',['uses' => 'ReviewController@people', 'as' => 'people.eh']);
// Route::get('review', function () {return view('single');});
//Route::get('single', function () {return view('single');});
Route::get('single', 'ReviewController@single');

//Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('loginx', 'loginController@authenticate');
Route::post('registerx', 'userController@register');
Route::get('logout', 'loginController@logout');

Route::get('autocomplete', 'homeController@autocomplete');
Route::post('search', 'homeController@search');

// halaman utk review
Route::get('newreview', 'ReviewController@newreview');
Route::post('newreview', 'ReviewController@savenewreview');


Route::get('editreview/{id}',['uses' => 'ReviewController@editreview', 'as' => 'eddd.eh']);
// Route::get('editreview/{id}', 'ReviewController@editreview');
Route::post('editreview/{id}', 'ReviewController@updatereview');
Route::get('listreview', 'ReviewController@listreview');

///halaman profile
Route::get('editprofile/{id}', 'userController@editprofile');
Route::post('editprofile/{id}', 'userController@update');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
