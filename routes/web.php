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

// View Home
Route::get('/', [
    'uses' => 'NotesController@welcome'
]);

// To Dashboard
Route::get('/dashboard', [
    'uses' => 'NotesController@dashboard'
]);

// Add Process
Route::get('/add', [
    'uses' => 'NotesController@add'
]);

Route::post('/add/process', [
    'uses' => 'NotesController@add_process'
]);

// Update Process
Route::get('/update/{id}', [
    'uses' => 'NotesController@update'
]);

Route::post('/update/{id}/process', [
    'uses' => 'NotesController@update_process'
]);

// Delete Process
Route::post('/delete/{id}/process', [
    'uses' => 'NotesController@delete_process'
]);

// New Addes
Route::get('/trash/{id}/process', [
    'uses' => 'NotesController@trash_process'
]);

