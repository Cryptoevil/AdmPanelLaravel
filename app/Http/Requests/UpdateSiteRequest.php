<?php

namespace App\Http\Requests;

use App\Site;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSiteRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('site_edit');
    }

    public function rules()
    {
        return [
            's_url'    => [
                'required',
            ],
            's_status' => [
                'min:2',
                'max:4',
            ],
        ];
    }
}
