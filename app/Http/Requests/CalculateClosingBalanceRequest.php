<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculateClosingBalanceRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Implement authorization logic if needed
    }

    public function rules()
    {
        return [
            'userId' => 'required|integer|exists:transactions,trans_user_id',
        ];
    }
}

