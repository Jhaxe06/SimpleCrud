<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CourseController;
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

Auth::routes();

Route::get('/blogs', [ArticlesController::class, 'index'])->name('blogs');
Route::get('/', function() {
    return redirect() -> route("blogs");
    
});
Route::get('/home', function() {
    return redirect() -> route("blogs");
    
}); 

Route::get('/course', [CourseController::class,'index']) -> name('course'); 
    
// in laravel 8 we need to use use App\Http\Controllers\ArticlesController;
Route::resource('/blogs', ArticlesController::class);
Route::resource('/course', CourseController::class);


