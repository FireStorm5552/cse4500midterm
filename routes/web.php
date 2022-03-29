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
    return view('welcome');
});

URL::forceScheme('https');
Route::get('/equipment', function () {
    return view('equipment');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/purchases', function () {
    return view('purchases');
});
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