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

Route::get('/', function () {
    return view('login');
});

 Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/addidea', function () {
    return view('manager.idea');
})->name('addidea');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/clients', [App\Http\Controllers\IdeasController::class, 'routeclient'])->name('routeclient');

Route::post('/save_idea', [App\Http\Controllers\IdeasController::class, 'ideaas'])->name('save_idea');
Route::get('/idea', [App\Http\Controllers\IdeasController::class, 'addindex'])->name('idea');

Route::get('/clientview/{id}',[App\Http\Controllers\IdeasController::class, 'clientview'])->name('clientview');
Route::get('/clientcom/{id}',[App\Http\Controllers\IdeasController::class, 'clientcom'])->name('clientcom');

Route::post('/pre', [App\Http\Controllers\IdeasController::class, 'pre'])->name('pre');

Route::get('/clienthome', [App\Http\Controllers\IdeasController::class, 'clienthome'])->name('clienthome');

Route::get('/home', [App\Http\Controllers\IdeasController::class, 'routeideas'])->name('home');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
