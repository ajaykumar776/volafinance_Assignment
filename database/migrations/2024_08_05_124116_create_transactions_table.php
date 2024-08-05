<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Constants\TransactionConstant;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create(TransactionConstant::TABLE_NAME, function (Blueprint $table) {
            $table->id('trans_id');
            $table->unsignedBigInteger('trans_user_id');
            $table->string('trans_plaid_trans_id');
            $table->string('trans_plaid_categories');
            $table->decimal('trans_plaid_amount', TransactionConstant::DECIMAL_TOTAL, TransactionConstant::DECIMAL_FRACTION);
            $table->unsignedBigInteger('trans_plaid_category_id');
            $table->date('trans_plaid_date');
            $table->string('trans_plaid_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(TransactionConstant::TABLE_NAME);
    }
}

