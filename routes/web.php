<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

auth()->loginUsingId(13);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/reports', function () {
    return 'you can view reports';
})->middleware('can:view_reports');

Route::get('/conversations', 'ConversationController@index');
Route::get('/conversations/{conversation}', 'ConversationController@show')->middleware('can:view,conversation');

Route::post('best-replies/{reply}', 'ConversationBestReplyController@store');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/payments/create', 'PaymentsController@create')->middleware('auth');
Route::post('/payments', 'PaymentsController@store')->middleware('auth');



Route::get('/notification', 'UserNotificationsController@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
