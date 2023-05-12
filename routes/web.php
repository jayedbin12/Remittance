<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Registration;
use App\Http\Controllers\ClientsController;
use App\Models\Clients;

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
Route::get('/welcome', function () {
    return view('welcome'); 
});
// });
// Route::get('/registration', function () {
//     return view('registration');
// });
// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'pregistration'])->name('registration');

Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/login-user', [RegistrationController::class, 'plogin'])->name('login-user');
Route::get('/logout',[RegistrationController::class,'logout'])->name('logout');

Route::get('/home', [RegistrationController::class, 'home'])->name('home');
Route::get('/editAdmin/{register_id}', [RegistrationController::class, 'editAdmin'])->name('editAdmin');
Route::post('/update/{register_id}', [RegistrationController::class, 'update'])->name('update');
Route::get('/show', [RegistrationController::class, 'show'])->name('show');

Route::get('/clients', [ClientsController::class, 'showUsers'])->name('showUsers');
Route::get('/clients/{id}', [ClientsController::class, 'deleteUser']);