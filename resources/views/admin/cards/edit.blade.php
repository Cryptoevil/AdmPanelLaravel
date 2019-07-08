@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.card.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.cards.update", [$card->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('c_number') ? 'has-error' : '' }}">
                <label for="c_number">{{ trans('cruds.card.fields.c_number') }}*</label>
                <input type="text" id="c_number" name="c_number" class="form-control" value="{{ old('c_number', isset($card) ? $card->c_number : '') }}" required>
                @if($errors->has('c_number'))
                    <p class="help-block">
                        {{ $errors->first('c_number') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_number_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_cvv') ? 'has-error' : '' }}">
                <label for="c_cvv">{{ trans('cruds.card.fields.c_cvv') }}*</label>
                <input type="text" id="c_cvv" name="c_cvv" class="form-control" value="{{ old('c_cvv', isset($card) ? $card->c_cvv : '') }}" required>
                @if($errors->has('c_cvv'))
                    <p class="help-block">
                        {{ $errors->first('c_cvv') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_cvv_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_expmonth') ? 'has-error' : '' }}">
                <label for="c_expmonth">{{ trans('cruds.card.fields.c_expmonth') }}*</label>
                <input type="text" id="c_expmonth" name="c_expmonth" class="form-control" value="{{ old('c_expmonth', isset($card) ? $card->c_expmonth : '') }}" required>
                @if($errors->has('c_expmonth'))
                    <p class="help-block">
                        {{ $errors->first('c_expmonth') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_expmonth_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_expyear') ? 'has-error' : '' }}">
                <label for="c_expyear">{{ trans('cruds.card.fields.c_expyear') }}*</label>
                <input type="text" id="c_expyear" name="c_expyear" class="form-control" value="{{ old('c_expyear', isset($card) ? $card->c_expyear : '') }}" required>
                @if($errors->has('c_expyear'))
                    <p class="help-block">
                        {{ $errors->first('c_expyear') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_expyear_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_fullname') ? 'has-error' : '' }}">
                <label for="c_fullname">{{ trans('cruds.card.fields.c_fullname') }}</label>
                <input type="text" id="c_fullname" name="c_fullname" class="form-control" value="{{ old('c_fullname', isset($card) ? $card->c_fullname : '') }}">
                @if($errors->has('c_fullname'))
                    <p class="help-block">
                        {{ $errors->first('c_fullname') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_fullname_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_email') ? 'has-error' : '' }}">
                <label for="c_email">{{ trans('cruds.card.fields.c_email') }}</label>
                <input type="text" id="c_email" name="c_email" class="form-control" value="{{ old('c_email', isset($card) ? $card->c_email : '') }}">
                @if($errors->has('c_email'))
                    <p class="help-block">
                        {{ $errors->first('c_email') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_email_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_address') ? 'has-error' : '' }}">
                <label for="c_address">{{ trans('cruds.card.fields.c_address') }}</label>
                <input type="text" id="c_address" name="c_address" class="form-control" value="{{ old('c_address', isset($card) ? $card->c_address : '') }}">
                @if($errors->has('c_address'))
                    <p class="help-block">
                        {{ $errors->first('c_address') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_city') ? 'has-error' : '' }}">
                <label for="c_city">{{ trans('cruds.card.fields.c_city') }}</label>
                <input type="text" id="c_city" name="c_city" class="form-control" value="{{ old('c_city', isset($card) ? $card->c_city : '') }}">
                @if($errors->has('c_city'))
                    <p class="help-block">
                        {{ $errors->first('c_city') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_city_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_state') ? 'has-error' : '' }}">
                <label for="c_state">{{ trans('cruds.card.fields.c_state') }}</label>
                <input type="text" id="c_state" name="c_state" class="form-control" value="{{ old('c_state', isset($card) ? $card->c_state : '') }}">
                @if($errors->has('c_state'))
                    <p class="help-block">
                        {{ $errors->first('c_state') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_state_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_zip') ? 'has-error' : '' }}">
                <label for="c_zip">{{ trans('cruds.card.fields.c_zip') }}</label>
                <input type="text" id="c_zip" name="c_zip" class="form-control" value="{{ old('c_zip', isset($card) ? $card->c_zip : '') }}">
                @if($errors->has('c_zip'))
                    <p class="help-block">
                        {{ $errors->first('c_zip') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_zip_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_cardname') ? 'has-error' : '' }}">
                <label for="c_cardname">{{ trans('cruds.card.fields.c_cardname') }}</label>
                <input type="text" id="c_cardname" name="c_cardname" class="form-control" value="{{ old('c_cardname', isset($card) ? $card->c_cardname : '') }}">
                @if($errors->has('c_cardname'))
                    <p class="help-block">
                        {{ $errors->first('c_cardname') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_cardname_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_sameaddr') ? 'has-error' : '' }}">
                <label for="c_sameaddr">{{ trans('cruds.card.fields.c_sameaddr') }}</label>
                <input type="text" id="c_sameaddr" name="c_sameaddr" class="form-control" value="{{ old('c_sameaddr', isset($card) ? $card->c_sameaddr : '') }}">
                @if($errors->has('c_sameaddr'))
                    <p class="help-block">
                        {{ $errors->first('c_sameaddr') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_sameaddr_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('c_site') ? 'has-error' : '' }}">
                <label for="c_site">{{ trans('cruds.card.fields.c_site') }}</label>
                <input type="text" id="c_site" name="c_site" class="form-control" value="{{ old('c_site', isset($card) ? $card->c_site : '') }}">
                @if($errors->has('c_site'))
                    <p class="help-block">
                        {{ $errors->first('c_site') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.card.fields.c_site_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection