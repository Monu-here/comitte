<?php

use App\Http\Controllers\comitteController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/',[homeController::class,'home']);

// Route::prefix('comitte')->name('comitte.')->group(function(){
// Route::get('/index',[comitteController::class,'index'])->name('index');
// Route::match(['GET','POST'],'/add',[comitteController::class,'add'])->name('add');
// Route::match(['GET', 'POST'], '/save', [comitteController::class,'save'])->name('save');


// });
Route::prefix('comitte')->name('comitte.')->group(function(){
Route::get('index',[comitteController::class,'index'])->name('index');
Route::match(["GET","POST"],'/add',[comitteController::class,"add"])->name('add');
Route::get('/delete/{id}',[comitteController::class,'delete'])->name('delete');

});
Route::prefix('member')->name('member.')->group(function(){
Route::get('/{comitte}/index', [memberController::class, 'index'])->name('index');
Route::match(["GET", "POST"], '/add', [memberController::class, 'add'])->name('add');
Route::get('/delete/{id}',[memberController::class,'delete'])->name('delete');
});


