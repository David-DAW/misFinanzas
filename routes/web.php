<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('incomes', IncomeController::class);
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');

Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');

Route::post('/incomes', [IncomeController::class, 'store'])->name('incomes.store');

Route::get('/incomes/{id}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');

Route::patch('/incomes/{id}', [IncomeController::class, 'update'])->name('incomes.update');

Route::get('/incomes/{id}', [IncomeController::class, 'destroy'])->name('incomes.delete');

Route::get('/incomes/{id}/show', [IncomeController::class, 'show'])->name('incomes.show');

Route::get('/outcomes', [OutcomeController::class, 'index'])->name('outcomes.index');

