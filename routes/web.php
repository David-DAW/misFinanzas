<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('incomes', IncomeController::class);
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');

Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');

Route::post('/incomes', [IncomeController::class, 'store'])->name('incomes.store');

Route::get('/incomes/{id}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');

Route::patch('/incomes/{id}', [IncomeController::class, 'update'])->name('incomes.update');

Route::get('/incomes/{id}', [IncomeController::class, 'destroy'])->name('incomes.delete');

// Route::delete('/incomes/{id}', [IncomeController::class, 'destroy'])->name('incomes.delete');

Route::get('/incomes/{id}/show', [IncomeController::class, 'show'])->name('incomes.show');





Route::get('/outcomes', [OutcomeController::class, 'index'])->name('outcomes.index');

Route::get('/outcomes/create', [OutcomeController::class, 'create'])->name('outcomes.create');

Route::post('/outcomes', [OutcomeController::class, 'store'])->name('outcomes.store');

Route::get('/outcomes/{id}/edit', [OutcomeController::class, 'edit'])->name('outcomes.edit');

Route::patch('/outcomes/{id}', [OutcomeController::class, 'update'])->name('outcomes.update');

Route::get('/outcomes/{id}', [OutcomeController::class, 'destroy'])->name('outcomes.delete');

// Route::delete('/outcomes/{id}/delete', [OutcomeController::class, 'destroy'])->name('outcomes.delete');

Route::get('/outcomes/{id}/show', [OutcomeController::class, 'show'])->name('outcomes.show');



Route::resource('categories', CategoryController::class)
    ->parameters(['categories' => 'id']);
