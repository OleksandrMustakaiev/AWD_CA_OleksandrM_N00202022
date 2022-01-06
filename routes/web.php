<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\User\CourseController as UserCourseController;

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

Route::get('login', [LoginController::class, 'login']);

Route::get('about', [AboutController::class, 'about']);


Route::get('/register', function () {
    return view('register');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('/user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/user/courses/', [UserCourseController::class, 'index'])->name('user.courses.index');
Route::get('/user/courses/{id}', [UserCourseController::class, 'show'])->name('user.courses.show');


Route::get('/admin/courses/', [AdminCourseController::class, 'index'])->name('admin.courses.index');
Route::get('/admin/courses/create', [AdminCourseController::class, 'create'])->name('admin.courses.create');
Route::get('/admin/courses/{id}', [AdminCourseController::class, 'show'])->name('admin.courses.show');
Route::post('/admin/courses/store', [AdminCourseController::class, 'store'])->name('admin.courses.store');
Route::get('/admin/courses/{id}/edit', [AdminCourseController::class, 'edit'])->name('admin.courses.edit');
Route::put('/admin/courses/{id}', [AdminCourseController::class, 'update'])->name('admin.courses.update');
Route::delete('/admin/courses/{id}', [AdminCourseController::class, 'destroy'])->name('admin.courses.destroy');