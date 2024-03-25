<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class, 'index']);

Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');

Route::post('/complete/{id}', [TodoListController::class, 'complete'])->name('complete');

Route::delete('/delete/{id}', [TodoListController::class, 'deleteItem'])->name('del');

