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
Auth::routes();


Route::group(['middleware'=>'visitors'], function (){
    Route::get('/', function () {
        return view('index');
    });

    //Route for login page
    Route::get('/login', 'AuthenticationController@login');
    //Route to check login
    Route::post('/Login', 'AuthenticationController@LoginValidation');
});
//Route for logout
Route::post('/logout', 'AuthenticationController@logout');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
*/



//Route for logout
Route::post('/logout', 'AuthenticationController@logout');


/*
|--------------------------------------------------------------------------
| PageController Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact','PageController@ContactUS');
Route::resource('/Register','PageController');
Route::get('/Search','PageController@SearchDonor');
Route::get('/BloodRequest','PageController@BloodRequest');
Route::get('/city/showCity', 'PageController@showCity');

//Route::get('/get-city/{id}', 'PageController@getcity');
//Route::get('district/get/{id}', 'PageController@getcity');
Route::get('/states/get/{id}','PageController@getcity');
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::resource('/Message', 'MessageController');
Route::resource('/admin/Donor', 'DonorController');
Route::resource('/Blood', 'RequestController');
Route::resource('/admin/BloodRequest', 'RequestController');
Route::get('/admin/ViewRequest/{id}','RequestController@show');
Route::patch('/blood/{id}', 'RequestController@update');
Route::resource('admin/Message', 'MessageController');
Route::get('/admin/Report', 'ReportController@report');
Route::post('/viewReport', 'ReportController@viewReport');

Route::get('/report/pdf','ReportController@pdfview');
Route::get('generate-pdf', 'ReportController@pdfview')->name('generate-pdf');




/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/
//Route for User dashboard
Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/getChangePassword', 'UserController@getChangePassword');
Route::post('/postChangePassword', 'UserController@postChangePassword');
