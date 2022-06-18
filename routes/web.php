<?php

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', 'ContactMsg@cmsg');

Route::view('serviceBooking', 'service_booking');
Route::view('ssb', 'service_booking_successful');
Route::post('book', 'SrvcBooking@save');

Route::get('/gelogin', function () {
    return view('gemp_login');
});

Route::get('/gereg', function () {
    return view('gemp_reg');
});
Route::view('ssgem', 'sccs_page');
Route::post('gemreg', 'Gemreg@save');

Route::get('/selogin', function () {
    return view('semp_login');
});

Route::get('/sereg', function () {
    return view('semp_reg');
});
Route::view('sssem', 'sccs_page');
Route::post('semreg', 'Semreg@save');

Route::get('/clogin', function () {
    return view('cemp_login');
});

Route::get('/creg', function () {
    return view('cemp_reg');
});
Route::view('sscem', 'sccs_page');
Route::post('creg', 'Creg@save');

Route::get('/ilogin', function () {
    return view('iemp_login');
});

Route::get('/ireg', function () {
    return view('iemp_reg');
});
Route::view('ssiem', 'sccs_page');
Route::post('ireg', 'Ireg@save');

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pricing', function () {
    return view('pricing_list');
});

Route::get('/terms', function () {
    return view('terms_conditions');
});

Route::get('/admin', function () {
    return view('admin_login');
});


Route::post('/contact', 'ContactMsg@csbmt')->name('contact.submit');

Route::get('/gempayment','GePaymentController@index');
Route::get('/sepayment','SePaymentController@index');
Route::get('/iempayment','IePaymentController@index');
Route::get('/cempayment','CePaymentController@index');

Route::post('/success','paymentController@success')->name('success');

Route::post('/fail','paymentController@fail')->name('fail');