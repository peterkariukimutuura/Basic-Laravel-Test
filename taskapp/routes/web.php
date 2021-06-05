<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'bye'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'welcome']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {
    return view('taskapp');
});

Route::get('/posts', function () {
    return view('posts.index');
});

Route::resource('tasks', TaskController::class);

Route::get('/tasks/show', [TaskController::class, 'show'])->name('tasks.show');

/*
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/show', [TaskController::class, 'show'])->name('show');
Route::get('/tasks/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/edit', [TaskController::class, 'update'])->name('tasks.edit.update');
Route::delete('tasks/show/{task}', [TaskController::class, 'destroy'])->name('tasks.show.destroy');
*/