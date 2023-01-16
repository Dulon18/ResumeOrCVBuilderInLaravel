<?php

use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\EducationController;
use Illuminate\Support\Facades\Auth;
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

Route::get('user-details/create', [UserDetailsController::class, 'create'])->middleware('auth')->name('user_details.create');
Route::post('user-details/store', [UserDetailsController::class, 'store'])->middleware('auth')->name('user_details.store');

//user details route end


//user Education route start

Route::get('user-edu', [EducationController::class, 'index'])->middleware('auth')->name('user-edu.index');
Route::get('user-edu/create', [EducationController::class, 'create'])->middleware('auth')->name('user_education.create');
Route::post('user-edu/store', [EducationController::class, 'store'])->middleware('auth')->name('user_edu.store');
Route::get('user-edu/edit/{id}', [EducationController::class, 'edit'])->middleware('auth')->name('user_edu.edit');
Route::put('user-edu/update/{id}', [EducationController::class, 'update'])->middleware('auth')->name('user_edu.update');
Route::get('user-edu/delete/{id}', [EducationController::class, 'destroy'])->middleware('auth')->name('user_edu.destroy');

//user Education route end