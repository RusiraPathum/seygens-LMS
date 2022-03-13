<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\http\controllers\AdminController;
use App\http\controllers\UserController;

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

//Base url
Route::get('/', function () {
    return view('welcome');
});

//Middleware routes
Route::middleware(['middleware'=>'PreventBackHistory'])->group( function (){
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin routes
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin', 'auth', 'PreventBackHistory']], function (){

    //Admin dashboard
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

//Teacher routes
Route::group(['prefix'=>'teacher', 'middleware'=>['isTeacher', 'auth', 'PreventBackHistory']], function (){

    //Teacher dashboard
    Route::get('dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
});

//User routes
Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function (){

    //User dashboard
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
