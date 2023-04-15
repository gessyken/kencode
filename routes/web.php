<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Models\Course;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::middleware(['auth'])->group(
    function () {
        Route::get('/courses', function ()
        {
            $courses = Course::all();
            return view('courses', compact('courses'));
        })->name('courses');

        Route::get('/teachers', function ()
        {
            $teachers = Teacher::all();
            return view('teachers', compact('teachers'));
        })->name('teachers');

        Route::get('/pricing', function ()
        {
            return view('pricing');
        })->name('pricing');
});