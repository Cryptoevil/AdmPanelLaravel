@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.card.title') }}
    </div>

    <div class="card-body">
        <div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_number') }}
                        </th>
                        <td>
                            {{ $card->c_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_cvv') }}
                        </th>
                        <td>
                            {{ $card->c_cvv }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_cardname') }}
                        </th>
                        <td>
                            {{ $card->c_cardname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_fullname') }}
                        </th>
                        <td>
                            {{ $card->c_fullname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_expmonth') }}
                        </th>
                        <td>
                            {{ $card->c_expmonth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_expyear') }}
                        </th>
                        <td>
                            {{ $card->c_expyear }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_email') }}
                        </th>
                        <td>
                            {{ $card->c_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_address') }}
                        </th>
                        <td>
                            {{ $card->c_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_city') }}
                        </th>
                        <td>
                            {{ $card->c_city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_state') }}
                        </th>
                        <td>
                            {{ $card->c_state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_zip') }}
                        </th>
                        <td>
                            {{ $card->c_zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_sameaddr') }}
                        </th>
                        <td>
                            {{ $card->c_sameaddr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_site') }}
                        </th>
                        <td>
                            {{ $card->c_site }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.card.fields.c_status') }}
                        </th>
                        <td>
                            {{ App\Card::C_STATUS_SELECT[$card->c_status] }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection