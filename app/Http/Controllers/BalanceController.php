<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;

class BalanceController extends Controller
{
    public function calculateBalances($userId)
    {
        $initialBalance = 5;
        $transactions = Transaction::where('trans_user_id', $userId)
            ->where('trans_plaid_date', '>=', Carbon::now()->subDays(90))
            ->orderBy('trans_plaid_date')
            ->get(['trans_user_id', 'trans_plaid_date', 'trans_plaid_amount']);

        $dailyBalances = [];
        $userBalance = $initialBalance;

        foreach ($transactions as $transaction) {
            $date = Carbon::parse($transaction->trans_plaid_date)->toDateString();

            // Initialize daily balance for each date
            if (!isset($dailyBalances[$date])) {
                $dailyBalances[$date] = 0;
            }

            // Update daily balance and user balance
            $dailyBalances[$date] += $transaction->trans_plaid_amount;
            $userBalance += $transaction->trans_plaid_amount;
        }

        // Convert daily balances to collection format for response
        $dailyBalancesCollection = collect();
        foreach ($dailyBalances as $date => $balance) {
            $dailyBalancesCollection->push([
                'Transaction_Date' => $date,
                'daily_balance' => round($balance, 4),
            ]);
        }

        // Calculate 90 days average balance
        $averageBalance = round($dailyBalancesCollection->avg('daily_balance'), 4);

        // Calculate average balance for the first 30 
        $first30DaysBalance = $dailyBalancesCollection->filter(function ($balance) {
            return Carbon::parse($balance['Transaction_Date'])->between(Carbon::now()->subDays(90), Carbon::now()->subDays(60));
        })->avg('daily_balance');

         // Calculate average balance for last 30 days
        $last30DaysBalance = $dailyBalancesCollection->filter(function ($balance) {
            return Carbon::parse($balance['Transaction_Date'])->between(Carbon::now()->subDays(30), Carbon::now());
        })->avg('daily_balance');

        return response()->json([
            'daily_closing_balance_of_90_days' => $dailyBalancesCollection,
            '90_days_average_balance' => $averageBalance,
            'first_30_days_average_balance' => round($first30DaysBalance, 4),
            'last_30_days_average_balance' => round($last30DaysBalance, 4),
        ]);
    }

    public function calculateIncome($userId)
    {
        $income = Transaction::where('trans_user_id', $userId)
            ->where('trans_plaid_date', '>=', Carbon::now()->subDays(30))
            ->where('trans_plaid_category_id', '!=', 18020004)
            ->where('trans_plaid_amount', '>', 0)
            ->sum('trans_plaid_amount');

        return response()->json([
            'last_30_days_income' => round($income, 4),
        ]);
    }

    public function calculateDebitTransactionCount($userId)
    {
        $debitCount = Transaction::where('trans_user_id', $userId)
            ->where('trans_plaid_date', '>=', Carbon::now()->subDays(30))
            ->where('trans_plaid_amount', '<', 0)
            ->count();

        return response()->json([
            'debit_transaction_count' => $debitCount,
        ]);
    }

    public function sumDebitAmountWeekend($userId)
    {
        $debitAmountWeekend = Transaction::where('trans_user_id', $userId)
            ->where('trans_plaid_date', '>=', Carbon::now()->subDays(30))
            ->where(function ($query) {
                $query->whereRaw('DAYOFWEEK(trans_plaid_date) IN (1, 7)') // Sunday = 1, Saturday = 7
                    ->orWhereRaw('DAYOFWEEK(trans_plaid_date) = 6'); // Friday = 6
            })
            ->where('trans_plaid_amount', '<', 0)
            ->sum('trans_plaid_amount');

        return response()->json([
            'debit_amount_weekend' => round($debitAmountWeekend, 4),
        ]);
    }

    public function sumIncomeAboveAmount($userId)
    {
        $incomeAboveAmount = Transaction::where('trans_user_id', $userId)
            ->where('trans_plaid_amount', '>', 15)
            ->where('trans_plaid_amount', '>', 0)
            ->sum('trans_plaid_amount');

        return response()->json([
            'income_above_amount' => round($incomeAboveAmount, 4),
        ]);
    }
}
