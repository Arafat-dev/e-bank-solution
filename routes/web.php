<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\userController;
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

Route::get('/', [PageController::class, 'index'])->name('accueil');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class,'register'])->name('inscription');
Route::post('/User/register/', [userController::class,'store'])->name('user.register');

Route::post('/user/login', [LoginController::class, 'connect'])->name('user.login ');

Route::get('/dashbord', [userController::class, 'dashbord'])->name('user.dashbord');


// Route Admin

Route::get('/list/users', [userController::class,'listeUSers'])->name('list');


Route::get('/admin/dashbord', [PageController::class, 'AdminDashbord'])->name('admin.dashbord');
Route::get('/user/depot', [userController::class,'register'])->name('user.edeposit.index');
Route::get('/user/depot/historique', [userController::class,'register'])->name('user.edeposit.history');


