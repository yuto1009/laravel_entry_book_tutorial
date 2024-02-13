<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('/', function () {
    return view('welcome');

});

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::post('hello', 'App\Http\Controllers\HelloController@post');
Route::get('hello/add', 'App\Http\Controllers\HelloController@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController@create');
Route::get('hello/edit', 'App\Http\Controllers\HelloController@edit');
Route::post('hello/edit', 'App\Http\Controllers\HelloController@update');
Route::get('hello/del', 'App\Http\Controllers\HelloController@del');
Route::post('hello/del', 'App\Http\Controllers\HelloController@remove');
Route::get('hello/show', 'App\Http\Controllers\HelloController@show');
Route::get('person', 'App\Http\Controllers\PersonController@index');
Route::get('person/find', 'App\Http\Controllers\PersonController@find');
Route::post('person/find', 'App\Http\Controllers\PersonController@search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
