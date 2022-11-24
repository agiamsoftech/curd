<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
    // return view('welcome');
    return view('home');
});

Route::post('/submittudo', [TodoController::class, 'insertTodo'])->name('submittudo');

Route::get('/viewtodo', [TodoController::class, 'viewtodo']);

Route::get('{id?}', [TodoController::class, 'edittodo']);
Route::get('delete_todo/{id?}', [TodoController::class, 'destory'])->name('delete_todo');