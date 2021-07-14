<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDController ;
use App\Http\Controllers\ExcelController;
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

//PersonalData
Route::get('/PersonalData/{id}', [App\Http\Controllers\PDController ::class, 'PersonalData'])->name('PD');

//A
Route::get('/AFeature', [App\Http\Controllers\AFeature::class, 'index'])->name('Ahome');
//新增需求
Route::get('/AFeature1', [App\Http\Controllers\AFeature::class, 'ONE'])->name('AOne');
Route::get('/UploadA',[App\Http\Controllers\AFeature::class, 'AUpload'])->name('uploadA');
//顯示未處理需求Page1
Route::get('/AFeature2', [App\Http\Controllers\AFeature::class, 'TWO'])->name('ATwo');
//顯示未處理需求選擇Page後
Route::get('/AFeature2page', [App\Http\Controllers\AFeature::class, 'TWOpage'])->name('ATwopage');
//更新需求資料庫、刪掉未完成資料庫資料、新增完成資料庫資料
Route::post('/UpdateA/{id}',[App\Http\Controllers\AFeature::class, 'AUpdate'])->name('updateA');
//顯示已完成需求
Route::get('/AFeature3', [App\Http\Controllers\AFeature::class, 'Three'])->name('AThree');
//Excel輸出已完成需求
Route::post('excel/exportY',[ExcelController::class, 'exportY'])->name('exportY');
//Excel輸出待完成需求
Route::post('excel/exportF',[ExcelController::class, 'exportN'])->name('exportN');

//B
Route::get('/BFeature', [App\Http\Controllers\BFeature::class, 'index'])->name('Bhome');
Route::get('/BFeature1', [App\Http\Controllers\BFeature::class, 'ONE'])->name('BOne');
Route::get('/BFeature2', [App\Http\Controllers\BFeature::class, 'TWO'])->name('BTwo');

//設定
Route::get('/setting/{num}', [App\Http\Controllers\settingController::class, 'index'])->name('set');

