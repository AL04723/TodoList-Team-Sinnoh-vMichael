<?php
use App\Http\Controllers\TodoLaravelController;
use Illuminate\Support\Facades\Route;







Route::get('/', [TodoLaravelController::class, 'index'])->name('index');
Route::post('/', [TodoLaravelController::class, 'store'])->name('store');
Route::delete('/{todolist:id}', [TodoLaravelController::class, 'destroy'])->name('destroy');
