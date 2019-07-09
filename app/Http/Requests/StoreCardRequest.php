<?php

namespace App\Http\Requests;

use App\Card;
use Illuminate\Foundation\Http\FormRequest;

class StoreCardRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('card_create');
    }

    public function rules()
    {
        return [
            'c_number' => [
                'min:16',
                'max:16',
            ],
            'c_status' => [
                'required',
            ],
        ];
    }
}
