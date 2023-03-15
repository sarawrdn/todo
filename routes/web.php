<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Route : /tasks
| Method : GET
| Function : index (in Controller)
| name : task.index
|--------------------------------------------------------------------------
*/
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index');

/*
|--------------------------------------------------------------------------
| Route : /create
| Method : GET
| Function : create (in Controller)
| name : task.create
|--------------------------------------------------------------------------
*/
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('task.create');

/*
|--------------------------------------------------------------------------
| Route : /create
| Method : POST
| Function : store (in Controller)
| name : task.store
|--------------------------------------------------------------------------
*/
Route::post('/tasks/create', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');

/*
|--------------------------------------------------------------------------
| Route : /tasks/{id}
| Method : GET
| Function : show(in Controller)
| name : task.show
|--------------------------------------------------------------------------
*/
Route::get('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'show'])->name('task.show');

/*
|--------------------------------------------------------------------------
| Route : /tasks/{id}/edit
| Method : GET
| Function : edit(in Controller)
| name : task.edit
|--------------------------------------------------------------------------
*/
Route::get('/tasks/{task}/edit', [App\Http\Controllers\TaskController::class, 'edit'])->name('task.edit');

/*
|--------------------------------------------------------------------------
| Route : /tasks/{id}/edit
| Method : POST
| Function : update(in Controller)
| name : task.update
|--------------------------------------------------------------------------
*/
Route::post('/tasks/{task}/edit', [App\Http\Controllers\TaskController::class, 'update'])->name('task.update');

/*
|--------------------------------------------------------------------------
| Route : /tasks/{id}/delete
| Method : GET
| Function : destroy (in Controller)
| name : task.delete
|--------------------------------------------------------------------------
*/
Route::get('/tasks/{task}/delete', [App\Http\Controllers\TaskController::class, 'destroy'])->name('task.delete');