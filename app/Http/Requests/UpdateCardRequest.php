<?php

namespace App\Http\Requests;

use App\Card;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCardRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('card_edit');
    }

    public function rules()
    {
        return [
            'c_status' => [
                'required',
            ],
        ];
    }
}
