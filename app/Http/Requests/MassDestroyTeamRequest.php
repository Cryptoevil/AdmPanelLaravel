<?php

namespace App\Http\Requests;

use App\Team;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroyTeamRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('team_delete'), 403, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:teams,id',
        ];
    }
}
