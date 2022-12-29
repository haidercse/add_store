<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RolePermission\PermissionController;
use App\Http\Controllers\RolePermission\RoleController;
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
// Route::prefix('admin')->group(function(){
//     Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashbaord');
// });

//admin
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashbaord');
    Route::resource('roles',RoleController::class);
    Route::resource('permissions',PermissionController::class);
});


//frontend start
Route::get('/',[HomeController::class,'index']);


require __DIR__.'/auth.php';
