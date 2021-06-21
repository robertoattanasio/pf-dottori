<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\User;

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

Route::get('/', 'GuestController@index')->name('index');
Route::post('/', 'GuestController@filter_specialization')->name('filter-specialization');
// Route::get('/dottori', 'GuestController@doctors')->name('doctors');
Route::get('/info-specialista/{id}', 'GuestController@infoDoctor')->name('infoDoctor');
Route::get('/contatta/{id}', 'GuestController@contactIt')->name('contact-it');
Route::get('/request/{id}', 'GuestController@sendRequest')->name('return-contact-it');
Route::get('/review/{id}', 'GuestController@sendReview')->name('return-review-it');
Route::get('/recensisci/{id}', 'GuestController@reviewIt')->name('review-it');
Route::get('/chi-siamo', 'GuestController@about')->name('about');
Route::get('/faq', 'GuestController@faq')->name('faq');
Route::get('/termini-condizioni', 'GuestController@terms')->name('terms');


Auth::routes();

Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::get('/', 'AdminController@dashboard')->name('dashboard-about');
    Route::get('/recensioni', 'AdminController@reviews')->name('reviews');
    Route::get('/messaggi', 'AdminController@messages')->name('messages');
    Route::get('/infomessaggio/{email_patient}', 'AdminController@infoMessage')->name('info-message');
    Route::post('/messaggio-inviato', 'AdminController@messageSent')->name('message-sent');
    Route::get('/statistiche', 'AdminController@statistics')->name('statistics');
    Route::get('/modifica-profilo', 'AdminController@editUser')->name('edit-profile');
    Route::get('/sponsorizzazioni', 'AdminController@sponsorizeUser')->name('boost-profile');
    Route::put('/sponsorizzazioni', 'AdminController@addSponsorization')->name('add-sponsorization');
    Route::put('/', 'AdminController@updateUser')->name('return-edit-profile');
});
