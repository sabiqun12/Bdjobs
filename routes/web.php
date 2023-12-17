<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup', [UserController::class, 'Signup'])->name('signuppage');
Route::post('/signup', [UserController::class, 'SignupStore'])->name('signup.store');

Route::get('/userlogin', [UserController::class, 'Login'])->name('loginpage');
Route::post('/userlogin', [UserController::class, 'LoginStore'])->name('login.store');

//userform
Route::get('/form', [UserFormController::class, 'UserForm'])->name('user.form');
Route::post('/form', [UserFormController::class, 'UserStore'])->name('user.store');

//only validate user can login this dashboard
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    });

});

Route::middleware(['guest'])->group(function(){
    Route::get('/bdjobs', function () {
        return view('frontend.bdjobs');
    });

});



