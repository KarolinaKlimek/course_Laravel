<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
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

Route::prefix('admin')->group(function (){
    Route::get('/test/{name}/{number?}', function ($name, $number=333) {
        return "Hi you beautiful " . $name . " -- " . $number;
    })->name('testRoute');
});

// kontroler Doctors, metoda index
Route::get('doctors/',[DoctorController::class, 'powitanie']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
