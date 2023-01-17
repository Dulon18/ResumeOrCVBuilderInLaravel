<?php

use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkExperienceController;
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

Route::get('user-details', [UserDetailsController::class, 'index'])->middleware('auth')->name('user_details.index');
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

// work history route start

Route::get('work-experience', [WorkExperienceController::class, 'index'])->middleware('auth')->name('work-experience.index');
Route::get('work-experience/create', [WorkExperienceController::class, 'create'])->middleware('auth')->name('work-experience.create');
Route::post('work-experience/store', [WorkExperienceController::class, 'store'])->middleware('auth')->name('work-experience.store');
Route::get('work-experience/edit/{id}', [WorkExperienceController::class, 'edit'])->middleware('auth')->name('work-experience.edit');
Route::put('work-experience/update/{id}', [WorkExperienceController::class, 'update'])->middleware('auth')->name('work-experience.update');
Route::get('work-experience/delete/{id}', [WorkExperienceController::class, 'destroy'])->middleware('auth')->name('work-experience.destroy');

// work history route end

// skills route start

Route::get('skills', [SkillController::class, 'index'])->middleware('auth')->name('skills.index');
Route::get('skills/create', [SkillController::class, 'create'])->middleware('auth')->name('skills.create');
Route::post('skills/store', [SkillController::class, 'store'])->middleware('auth')->name('skills.store');
Route::get('skills/edit/{id}', [SkillController::class, 'edit'])->middleware('auth')->name('skills.edit');
Route::put('skills/update/{id}', [SkillController::class, 'update'])->middleware('auth')->name('skills.update');
Route::get('skills/delete/{id}', [SkillController::class, 'destroy'])->middleware('auth')->name('skills.destroy');

// skills route start