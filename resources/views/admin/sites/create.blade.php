@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.site.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sites.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('s_url') ? 'has-error' : '' }}">
                <label for="s_url">{{ trans('cruds.site.fields.s_url') }}*</label>
                <input type="text" id="s_url" name="s_url" class="form-control" value="{{ old('s_url', isset($site) ? $site->s_url : '') }}" required>
                @if($errors->has('s_url'))
                    <p class="help-block">
                        {{ $errors->first('s_url') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.site.fields.s_url_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('s_status') ? 'has-error' : '' }}">
                <label for="s_status">{{ trans('cruds.site.fields.s_status') }}</label>
                <input type="text" id="s_status" name="s_status" class="form-control" value="{{ old('s_status', isset($site) ? $site->s_status : '') }}">
                @if($errors->has('s_status'))
                    <p class="help-block">
                        {{ $errors->first('s_status') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.site.fields.s_status_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection