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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', \App\Http\Livewire\Home::class)->name('home.index');
Route::get('/todo', \App\Http\Livewire\ListaBeer::class)->name('todo.index');
Route::get('/form', \App\Http\Livewire\ContactForm::class)->name('form.index');