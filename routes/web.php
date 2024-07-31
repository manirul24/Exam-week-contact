<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('index', ContactController::class .'@index')->name('contacts.index');
 
Route::get('/contacts/create', ContactController::class . '@create')->name('contacts.create');
 
Route::post('/contacts', ContactController::class .'@store')->name('contacts.store');
 
Route::get('/contacts/{post}', ContactController::class .'@show')->name('contacts.show');
 
Route::get('/contacts/{post}/edit', ContactController::class .'@edit')->name('contacts.edit');
 
Route::put('/contacts/{post}', ContactController::class .'@update')->name('contacts.update');
 
Route::delete('/contacts/{post}', ContactController::class .'@destroy')->name('contacts.destroy');


//Route::resource('contacts', Contact::class);
// Route::get("index",[Contact::class,'index'])->name('index');
// Route::get("create",[Contact::class,'create'])->name('create');
// Route::post("Store",[Contact::class,'Store'])->name('Store');
// Route::get("Show",[Contact::class,'Show'])->name('Show');
// Route::get("edit",[Contact::class,'edit'])->name('edit');
// Route::get("Update",[Contact::class,'Update'])->name('Update');

// Route::get("index",[ContactController::class,[ContactController::class,'index'])->name('index');//GET /contacts: List all contacts

// GET /contacts/create: Show the form to create a new contact

// POST /contacts: Store a new contact

// GET /contacts/{id}: Show a specific contact

// GET /contacts/{id}/edit: Show the form to edit a contact

// PUT /contacts/{id}: Update a contact

// DELETE /contacts/{id}: Delete a contac
