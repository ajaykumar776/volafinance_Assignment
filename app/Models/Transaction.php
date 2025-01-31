<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'trans_id';
    protected $fillable = [
        'trans_user_id',
        'trans_plaid_trans_id',
        'trans_plaid_categories',
        'trans_plaid_amount',
        'trans_plaid_category_id',
        'trans_plaid_date',
        'trans_plaid_name',
    ];
}
