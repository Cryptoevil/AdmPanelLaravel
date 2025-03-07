<?php

namespace App\Http\Requests;

use App\Site;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySiteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('site_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:sites,id',
        ];
    }
}
