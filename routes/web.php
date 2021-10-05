<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PracticeController;

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


//public routes 
Route::get('/', [HomeController::class, 'showHome'])->name('homePage');
Route::get('/courses/list', [HomeController::class, 'showCourses'])->name('coursesPage');
Route::get('/course/{id}', [HomeController::class, 'showCourse'])->name('coursePage');
Route::get('/about', [HomeController::class, 'showAbout'])->name('aboutPage');


// admin
Route::middleware('admin')->prefix('admin')->group(function () {
    // course
    Route::prefix('course')->group(function () {
        Route::get('create', [CourseController::class, 'create'])->name('createCourse');
        Route::post('store', [CourseController::class, 'store'])->name('storeCourse');
        Route::post('edit', [CourseController::class, 'edit'])->name('editCourse');
        Route::patch('update/{$course}', [CourseController::class, 'update'])->name('updateCourse');
        Route::delete('delete/{$course}', [CourseController::class, 'destroy'])->name('destroyCourse');
    });
    // gallery
    Route::prefix('gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'show'])->name('showGalleryForm');
        Route::get('create', [GalleryController::class, 'create'])->name('createGallery');
        Route::post('store', [GalleryController::class, 'store'])->name('storeGallery');
    });
    // student
    Route::prefix('student')->group(function () {
        Route::get('/', [StudentController::class, 'show'])->name('showStudentForm');
        Route::post('create', [StudentController::class, 'create'])->name('createStudent');
    });
    // teacher
    Route::prefix('teacher')->group(function () {
        Route::get('/', [TeacherController::class, 'show'])->name('showTeacherForm');
        Route::get('create', [TeacherController::class, 'create'])->name('createTeacher');
        Route::post('store', [TeacherController::class, 'store'])->name('storeTeacher');

    });
});


Route::get('/welcome', function () {
    return view('pages.sample-static-page');
});




Route::get('/gallery', function () {
    return view('front.pages.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('front.pages.contact');
})->name('contact');


require __DIR__.'/auth.php';
