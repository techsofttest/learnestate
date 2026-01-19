<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursePurchaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\StudentController;


Route::get('/',[HomeController::class,'index'])->name('login');

Route::get('/about',[AboutController::class,'index']);

Route::get('/blogs',[BlogController::class,'index']);

Route::get('/blogs/{slug}',[BlogController::class,'detail']);

Route::get('/courses',[CourseController::class,'index']);

Route::get('/courses/{slug}',[CourseController::class,'detail']);

Route::get('/photo-gallery',[GalleryController::class,'photos']);

Route::get('/video-gallery',[GalleryController::class,'videos']);

Route::get('/testimonials',[TestimonialController::class,'index']);

Route::get('/contact',[ContactController::class,'index']);





//Auth Fron ENd


use App\Http\Controllers\StudentAuthController;

Route::middleware('guest:student')->group(function() {

    Route::post('/student/login', [StudentAuthController::class, 'login'])->name('student.login');

     Route::post('/student/register', [StudentAuthController::class, 'register'])
        ->name('student.register');

});

Route::middleware(['auth:student'])->group(function() {

    Route::post('/course/{course}/purchase',
        [CoursePurchaseController::class, 'purchase'])
        ->name('student.course.purchase');

    Route::get('/student/dashboard',[StudentController::class,'dashboard'])->name('student.dashboard');

    Route::get('/student/my-courses',[StudentController::class,'courses'])->name('student.courses');

     Route::get('/student/payments', [StudentController::class, 'payments'])
        ->name('student.payments');

    Route::post('/student/logout', [StudentAuthController::class, 'logout'])->name('student.logout');


});


//End


