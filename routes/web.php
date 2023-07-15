<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\frontendcontroller;

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
    return view('Home');
});

Route::get('/login',[AuthController::class,'loginPage'])->name('login');
Route::get('/registration',[AuthController::class,'registrationPage'])->name('registration');
Route::post('/login',[AuthController::class,'loginPost'])->name('login.post');
Route::post('/registration',[AuthController::class,'registrationPost'])->name('registration.post');
Route::get('/logout',[AuthController::class,'logOut'])->name('logout');



Route::get('/home',[frontendcontroller::class,'homePage'])->name('home');
Route::get('/blog',[blogcontroller::class,'blogPage'])->name('blog');
Route::post('/blogstore',[blogcontroller::class,'store'])->name('blog.store');
Route::get('/blogread/{id}',[blogcontroller::class,'readMore']);
Route::post('/blogeditstore',[blogcontroller::class,'blogEditStore']);
Route::get('/blogdelete/{id}',[blogcontroller::class,'delete']);

Route::group(['middleware'=>'auth'],function()
{
    Route::get('/blogcreate',[blogcontroller::class,'blogCreate'])->name('blog.create');
    Route::get('/blogedit/{id}',[blogcontroller::class,'blogEditPage']);
});