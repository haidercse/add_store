<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//frontend start
Route::get('/',[HomeController::class,'index']);


Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashbaord');


require __DIR__.'/auth.php';
