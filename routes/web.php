<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UzerController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\EquipmentController;

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

URL::forceScheme('https');
Route::resource('/uzers', UzerController::class);
Route::resource('/manufacturers', ManufacturerController::class);
Route::resource('/purchases', PurchaseController::class);
Route::resource('/equipment', EquipmentController::class);
Route::get('/notes', function () {
    return view('notes');
});
Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});
Route::fallback(function(){
	return view('fallback');
});
Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});
