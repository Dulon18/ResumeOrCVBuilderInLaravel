<?php

use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\EducationController;
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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user details route start

Route::get('user-details/create',[UserDetailsController::class,'create'])->middleware('auth')->name('user_details.create');
Route::post('user-details/store',[UserDetailsController::class,'store'])->middleware('auth')->name('user_details.store');

//user details route end


//user Education route start

Route::get('user-edu/create',[EducationController::class,'create'])->name('user_education.create')->middleware('auth');
//Route::post('user-details/store',[UserDetailsController::class,'store'])->name('user_details.store')->middleware('auth');

//user Education route end