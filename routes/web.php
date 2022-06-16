<?php

use App\Http\Controllers\Pages\ProfileController;
use App\Http\Controllers\Pages\TodoController;
use App\Http\Controllers\Pages\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('tarefas', TodoController::class);
    Route::put('tarefas/checkbox/{id}', [TodoController::class, 'checkbox'])->name('tarefas.checkbox');

    Route::resource('profiles', ProfileController::class);
    Route::resource('users', UserController::class);
    Route::get('profile', [UserController::class, 'profileUser'])->name('profile');
});


require __DIR__.'/auth.php';
