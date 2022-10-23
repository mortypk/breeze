<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\CheckAge;

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
Route::get('/s',[StaffController::class,'index'])->middleware(['check_age']);
Route::get('/', function () {
    return view('welcome');
})
->name('welcome');
Route::get('/home', function () {
    return view('home');
})
->middleware(['auth'])
->name('home');

route::middleware(['auth'])->group(function(){
    Route::resource('/posts', PostController::class);
});
Route::resources([
    '/staff'=> StaffController::class,
    '/title'=> TitleController::class,
    '/student' => StudentController::class,
    '/product' => ProductController::class,
]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
