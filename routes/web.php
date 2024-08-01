<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

 
Route::get('/', ContactController::class .'@index')->name('index');


Route::get('index', ContactController::class .'@index')->name('contacts.index');
 
Route::get('/contacts/create', ContactController::class . '@create')->name('contacts.create');
 
Route::post('/contacts', ContactController::class .'@store')->name('contacts.store');
 
Route::get('/contacts/{post}', ContactController::class .'@show')->name('contacts.show');
 
Route::get('/contacts/{post}/edit', ContactController::class .'@edit')->name('contacts.edit');
 
Route::put('/contacts/{post}', ContactController::class .'@update')->name('contacts.update');
 
Route::delete('/contacts/{post}', ContactController::class .'@destroy')->name('contacts.destroy');

 
