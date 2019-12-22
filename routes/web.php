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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admindash','Admin\DashBoardController@adminIndex');
Route::get('user','checkcontroller@CheckUser');
Route::get('teacherdash','checkcontroller@CheckUser');
Route::get('teacherinbox','teacher\DashBoardController@pendingrequest');
Route::get('teacherperformance','teacher\DashBoardController@performance');
Route::get('teacheracademic','teacher\DashBoardController@academic');
Route::get('teacherprofile','teacher\DashBoardController@profileedit');
Route::post('/saveprofile','Teacher\DashBoardController@profilesave');
Route::get('/searchteacher','Student\DashboardController@searchteacher');
Route::get('/sendrequest','Student\DashboardController@sendrequest');
Route::get('/pendingrequest','Teacher\DashboardController@pendingrequest');
Route::get('/acceptrequest','Teacher\DashboardController@acceptrequest');
Route::get('/submitrating','Student\DashboardController@rating');
Route::post('/ratedone','Student\DashboardController@ratesubmit');
Route::get('/rating','Teacher\DashboardController@checkratings');
Route::get('/adminall','Admin\DashBoardController@everythingcheck');
Route::get('/submitreport','Student\DashboardController@report');
Route::post('/reportdone','Student\DashboardController@reportsubmit');
Route::post('/banteacher','Admin\DashboardController@banteacher');
Route::get('/banteacher','Admin\DashboardController@banteacher');
