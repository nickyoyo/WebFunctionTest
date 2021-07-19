<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AFeature;
use App\Http\Controllers\BFeature;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//A
Route::get('/AFeature', [App\Http\Controllers\AFeature::class, 'index'])->name('Ahome');
Route::get('/AFeature1', [App\Http\Controllers\AFeature::class, 'ONE'])->name('AOne');
Route::get('/AFeature2', [App\Http\Controllers\AFeature::class, 'TWO'])->name('ATwo');

//B
Route::get('/BFeature', [App\Http\Controllers\BFeature::class, 'index'])->name('Bhome');
Route::get('/BFeature1', [App\Http\Controllers\BFeature::class, 'ONE'])->name('BOne');
Route::get('/BFeature2', [App\Http\Controllers\BFeature::class, 'TWO'])->name('BTwo');