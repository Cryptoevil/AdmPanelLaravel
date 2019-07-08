@extends('layouts.admin')
@section('content')
@can('card_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.cards.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.card.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.card.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_cvv') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_expmonth') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_expyear') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_fullname') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_address') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_city') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_state') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_zip') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_cardname') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_sameaddr') }}
                        </th>
                        <th>
                            {{ trans('cruds.card.fields.c_site') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cards as $key => $card)
                        <tr data-entry-id="{{ $card->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $card->c_number ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_cvv ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_expmonth ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_expyear ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_fullname ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_email ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_address ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_city ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_state ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_zip ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_cardname ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_sameaddr ?? '' }}
                            </td>
                            <td>
                                {{ $card->c_site ?? '' }}
                            </td>
                            <td>
                                @can('card_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.cards.show', $card->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('card_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.cards.edit', $card->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('card_delete')
                                    <form action="{{ route('admin.cards.destroy', $card->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.cards.massDestroy') }}",
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
@can('card_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection