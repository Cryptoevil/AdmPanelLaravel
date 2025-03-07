<?php

namespace App\Http\Requests;

use App\Card;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyCardRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('card_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:cards,id',
        ];
    }
}
