<?php

use App\Http\Controllers\BalanceController;
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
Route::get('balances/{userId}', [BalanceController::class, 'calculateBalances']);
Route::get('income/{userId}', [BalanceController::class, 'calculateIncome']);
Route::get('debit-count/{userId}', [BalanceController::class, 'calculateDebitTransactionCount']);
Route::get('debit-amount-weekend/{userId}', [BalanceController::class, 'sumDebitAmountWeekend']);
Route::get('income-above-amount_15/{userId}', [BalanceController::class, 'sumIncomeAboveAmount']);