<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PohvalaController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\CategoryController;

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

Route::get('/',[CategoryController::class,'index'])->name('pocetna');
Route::get('/problem/create/{id}',[ProblemController::class,'create'])->name('createProblem');
Route::post('/problem/store',[ProblemController::class,'store'])->name('storeProblem');
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::get('/admin/index',[UserController::class,'index'])->name('adminPanel')->middleware('auth');
Route::get('/pohvale/index',[PohvalaController::class,'index'])->name('pohvaleIndex');
/*Route::get('/admin/admini',function(){
    return view('admin.admini');
});*/
Route::get('/admin/create',[UserController::class,'create'])->name('adminCreate')->middleware('auth');
Route::post('/admin/store',[UserController::class,'store'])->name('adminStore')->middleware('auth');
Route::get('/admin/list', [UserController::class, 'list'])->name('adminList')->middleware('auth');
Route::get('/admin/edit/{id}', [UserController::class, 'edit'])->name('adminEdit')->middleware('auth');
Route::put('/admin/edit/{id}', [UserController::class, 'update'])->name('adminUpdate')->middleware('auth');
Route::delete('/admin/delete/{id}', [UserController::class, 'destroy'])->name('adminDelete')->middleware('auth');

Route::post('/logout',[UserController::class,'logout'])->name('odjava')->middleware('auth');
Route::post('/admin/authenticate',[UserController::class,'authenticate'])->name('prijava');
Route::get('/subCategory/{id}', [ProblemController::class, 'subCat']);
Route::get('/problemi/index',[ProblemController::class,'index'])->name('problemiIndex')->middleware('auth');
Route::get('/pohvala/edit/{id}',[PohvalaController::class,'edit'])->name('pohvalaEdit')->middleware('auth');
Route::post('/pohvala/update/{id}',[PohvalaController::class,'update'])->name('updatePohvala')->middleware('auth');
Route::get('/problem/edit/{id}',[ProblemController::class,'edit'])->name('problemEdit')->middleware('auth');
Route::put('/problem/update/{id}',[ProblemController::class,'update'])->name('updateProblem')->middleware('auth');

Route::delete('/pohvala/delete/{id}',[PohvalaController::class,'destroy'])->name('pohvalaDelete')->middleware('auth');
Route::delete('/problem/delete/{id}',[ProblemController::class,'destroy'])->name('problemDelete')->middleware('auth');

Route::get('/problem/odabrani',[ProblemController::class,'odabrani'])->name('odabrani')->middleware('auth');
Route::get('/problem/neodabrani',[ProblemController::class,'neodabrani'])->name('neodabrani')->middleware('auth');
Route::get('/pohvale/odabrani',[PohvalaController::class,'odabrani'])->name('odobrenePohvale')->middleware('auth');
Route::get('/pohvale/neodabrani',[PohvalaController::class,'neodabrani'])->name('neodobrenePohvale')->middleware('auth');