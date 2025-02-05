<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Income;
use App\Models\Outcome;
Route::get('/incomes', function (Request $request) {
    return Income::all();
});

Route::get('/outcomes', function (Request $request) {
    return Outcome::all();
});
