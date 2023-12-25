<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\PersonalFormController;

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
// Route::get('/form', [UserFormController::class, 'UserForm'])->name('user.form');
// Route::post('/form', [UserFormController::class, 'UserStore'])->name('user.store');
// Route::get('/edit', [UserFormController::class, 'UserEdit'])->name('user.edit');
// Route::get('/form', [UserFormController::class, 'Formpage'])->name('user.form');
Route::get('/master', [UserFormController::class, 'page'])->name('user.page');
// Route::get('/data', [UserFormController::class, 'UserData'])->name('user.page');
//personal data form
Route::get('/form', [PersonalFormController::class, 'FormData'])->name('user.form');
Route::post('/form', [PersonalFormController::class, 'PersonalDataStore'])->name('user.form');
Route::get('/formdata', [PersonalFormController::class, 'index'])->name('user.data');
Route::get('/edit/{id}', [PersonalFormController::class, 'FormEdit'])->name('user.edit');
Route::put('/update/{id}', [PersonalFormController::class, 'FormUpdate'])->name('user.update');




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



