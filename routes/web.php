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
Route::get('/', 'App\Http\Controllers\Front\FrontController@index');
Route::get('about-us', 'App\Http\Controllers\Front\FrontController@aboutus')->name('about-us');
Route::get('team', 'App\Http\Controllers\Front\FrontController@team')->name('team');
Route::get('consulting', 'App\Http\Controllers\Front\FrontController@consulting')->name('consulting');
Route::get('howcan-we-help', 'App\Http\Controllers\Front\FrontController@howcanwehelp')->name('howcan-we-help');
Route::get('solutions', 'App\Http\Controllers\Front\FrontController@solutions')->name('solutions');
Route::get('operational-excellence', 'App\Http\Controllers\Front\FrontController@operationalexcellence')->name('operational-excellence');
Route::get('marketing-services', 'App\Http\Controllers\Front\FrontController@marketingservices')->name('marketing-services');
Route::get('fund-raising', 'App\Http\Controllers\Front\FrontController@fundraising')->name('fund-raising');
Route::get('contact', 'App\Http\Controllers\Front\FrontController@contact')->name('contact');
Route::get('bookmeeting', 'App\Http\Controllers\Front\FrontController@bookmeeting')->name('bookmeeting');
Route::any('submit-form', 'App\Http\Controllers\Front\EmailController@submitForm'); 

Route::get('/calendly/redirect', [EmailController::class, 'redirectToCalendly']);
Route::get('/calendly/callback', [EmailController::class, 'handleCalendlyCallback']);
Route::post('create-meeting', 'App\Http\Controllers\Front\EmailController@createMeeting')->name('create-meeting');


