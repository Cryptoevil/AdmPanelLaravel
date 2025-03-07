@extends('layouts.admin')
@section('content')
@can('site_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.sites.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.site.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.site.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.site.fields.s_url') }}
                        </th>
                        <th>
                            {{ trans('cruds.site.fields.s_status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sites as $key => $site)
                        <tr data-entry-id="{{ $site->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $site->s_url ?? '' }}
                            </td>
                            <td>
                                {{ $site->s_status ?? '' }}
                            </td>
                            <td>
                                @can('site_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.sites.show', $site->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('site_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.sites.edit', $site->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('site_delete')
                                    <form action="{{ route('admin.sites.destroy', $site->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sites.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('site_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection