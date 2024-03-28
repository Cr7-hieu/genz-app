<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('genz/index',[HomeController::class, 'index'] )->name('home_index');
Route::prefix('genz')->group(function () {
    Route::get('blog',[BlogController::class, 'blog'])->name('main_blog');
    Route::get('blog-details',[BlogController::class, 'details'])->name('main_blog-details');
});
