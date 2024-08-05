<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('transactions/closing-balance', [TransactionController::class, 'calculateClosingBalance']);
Route::get('transactions/90-days-closing-balance', [TransactionController::class, 'calculate90DaysClosingBalance']);
Route::get('transactions/30-days-income', [TransactionController::class, 'calculate30DaysIncome']);
