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
            <div class="form-group {{ $errors->has('c_status') ? 'has-error' : '' }}">
                <label for="c_status">{{ trans('cruds.card.fields.c_status') }}*</label>
                <select id="c_status" name="c_status" class="form-control" required>
                    <option value="" disabled {{ old('c_status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Card::C_STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('c_status', $card->c_status) === (string)$key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('c_status'))
                    <p class="help-block">
                        {{ $errors->first('c_status') }}
                    </p>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection