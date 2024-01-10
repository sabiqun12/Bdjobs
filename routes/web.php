<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\PersonalFormController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\HomevController;
use App\Http\Controllers\AutocompleteController;

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


Route::get('/master', [UserFormController::class, 'page'])->name('user.page');

//personal data form
Route::get('/form', [PersonalFormController::class, 'FormData'])->name('user.form');
Route::post('/form', [PersonalFormController::class, 'PersonalDataStore'])->name('user.form');
Route::get('/formdata', [PersonalFormController::class, 'index'])->name('user.data');
Route::get('/edit/{id}', [PersonalFormController::class, 'FormEdit'])->name('user.edit');
Route::put('/update/{id}', [PersonalFormController::class, 'FormUpdate'])->name('user.update');
Route::get('/view/{id}', [PersonalFormController::class, 'FormView'])->name('user.view');
//  Route::get('/form', [PersonalFormController::class, 'District']);
Route::get('/users/thana', [PersonalFormController::class, 'thana']);
Route::get('/formview', [HomevController::class, 'Formpage'])->name('formview');
Route::post('/datastore', [HomevController::class, 'Formpage'])->name('datastore');





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


//test route for dropdown
// Route::get('/thana', [DropdownController::class, 'dropdownpage'])->name('thana');
// Route::get('/users/thana', [DropdownController::class, 'thana']);

// Route::get('/autobox', [AutocompleteController::class, 'index'])->name('autobox');
// Route::post('/autobox/fetch', [AutocompleteController::class,'fetch'])->name('autobox.fetch');

//  Route::get('/autoname', [AutocompleteController::class, 'FormData'])->name('autoname');
Route::get('/autoname/fetch', [AutocompleteController::class,'fetch'])->name('autoname.fetch');



