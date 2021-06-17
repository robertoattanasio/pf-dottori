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
Route::get('/dottori', 'GuestController@doctors')->name('doctors');
Route::get('/chi-siamo', 'GuestController@about')->name('about');
Route::get('/faq', 'GuestController@faq')->name('faq');
Route::get('/termini-condizioni', 'GuestController@terms')->name('terms');


Auth::routes();

Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::get('/', 'AdminController@dashboard')->name('dashboard-about');
    Route::get('/modifica-profilo', 'AdminController@editUser')->name('edit-profile');
    Route::get('/sponsorizzazioni', 'AdminController@sponsorizeUser')->name('boost-profile');
    Route::put('/sponsorizzazioni', 'AdminController@addSponsorization')->name('add-sponsorization');
    Route::put('/', 'AdminController@updateUser')->name('return-edit-profile');
});
