<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('courseadd',[CourseController::class, 'course'])->name('course');
Route::post('courseinsert',[CourseController::class, 'course_insert'])->name('courseinsert');
Route::get('courseview',[CourseController::class, 'course_view'])->name('courseview');
Route::get('delete_course/{id}',[CourseController::class,'course_delete'])->name('delete_course');
Route::get('course_edit/{id}',[CourseController::class,'course_edit'])->name('course_edit');
Route::post('update_course/{course}',[CourseController::class,'course_update'])->name('update_course');
