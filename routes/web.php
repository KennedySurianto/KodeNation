<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

// Guest Routes
Route::controller(GuestController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
});
Route::controller(AuthController::class)->group(function() {
    Route::post('/login', 'login')->name('login.post');
    Route::post('/register', 'register')->name('register.post');
});
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// Protected Routes
Route::middleware(['auth'])->group(function () {

    // Profile Route (available to all authenticated users)
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Admin Routes
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/instructors', [InstructorController::class, 'index'])->name('admin.instructors.manage');
        Route::get('/courses', [CourseController::class, 'manage'])->name('admin.courses.manage');
        Route::get('/students', [StudentController::class, 'index'])->name('admin.students.manage');
    });

    // Instructor Routes
    Route::middleware(['role:instructor'])->prefix('instructor')->group(function () {
        Route::get('/courses', [CourseController::class, 'manage'])->name('instructor.courses.manage');
        Route::get('/students', [StudentController::class, 'index'])->name('instructor.students.manage');
    });

    // Student Routes
    Route::middleware(['role:student'])->prefix('student')->group(function () {
        Route::get('/my-courses', [CourseController::class, 'myCourses'])->name('student.courses');
    });
});
