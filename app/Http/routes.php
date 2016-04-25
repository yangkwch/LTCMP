<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@home');


Route::get('/lockscreen', function () {
    return view('lockscreen');
});

Route::get('/about','HelpController@about');

//Route::get('/createcompany',function () {
//    return view('customer.company.createcompany');
//});
Route::get('/createcompany', 'CustomerCompanyController@createcompany');

Route::post('/createcompanystore', 'CustomerCompanyController@store');

Route::get('/createcustomer', function () {
    return view('customer.contact.createcontact');
});

Route::get('/lonton', 'HelpController@lonton');
Route::get('/ltcmp', 'HelpController@ltcmp');
Route::get('/help', 'HelpController@help');