<?php
namespace App\Http\Controllers;

use App\Http\Requests\CalculateClosingBalanceRequest;
use App\Http\Requests\Calculate90DaysClosingBalanceRequest;
use App\Http\Requests\Calculate30DaysIncomeRequest;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function calculateClosingBalance(CalculateClosingBalanceRequest $request)
    {
        $userId = $request->validated()['userId'];

        $transactions = DB::table('transactions')
            ->where('trans_user_id', $userId)
            ->orderBy('trans_plaid_date', 'asc')
            ->get();

        $initialBalance = 5;
        $closingBalance = $initialBalance;

        foreach ($transactions as $transaction) {
            $closingBalance += $transaction->trans_plaid_amount;
        }

        return response()->json(['closing_balance' => $closingBalance]);
    }

    public function calculate90DaysClosingBalance(Calculate90DaysClosingBalanceRequest $request)
    {
        $userId = $request->validated()['userId'];

        $transactions = DB::table('transactions')
            ->where('trans_user_id', $userId)
            ->orderBy('trans_plaid_date', 'asc')
            ->get();

        $initialBalance = 5;
        $closingBalance = $initialBalance;
        $closingBalances = [];

        foreach ($transactions as $transaction) {
            $closingBalance += $transaction->trans_plaid_amount;
            $closingBalances[] = $closingBalance;
        }

        $averageBalance = array_sum($closingBalances) / count($closingBalances);

        return response()->json(['average_90_days_balance' => $averageBalance]);
    }

    public function calculate30DaysIncome(Calculate30DaysIncomeRequest $request)
    {
        $userId = $request->validated()['userId'];

        $transactions = DB::table('transactions')
            ->where('trans_user_id', $userId)
            ->where('trans_plaid_date', '>=', now()->subDays(30))
            ->where('trans_plaid_category_id', '!=', '18020004')
            ->where('trans_plaid_amount', '>', 15)
            ->get();

        $income = $transactions->sum('trans_plaid_amount');

        return response()->json(['last_30_days_income' => $income]);
    }
}
