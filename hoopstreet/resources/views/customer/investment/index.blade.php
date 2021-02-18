@extends('layouts.admin')
@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("customer.investment.create") }}">
            Create Investment
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Your Investments List
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Investment" style="width: 100%">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.ability.fields.id') }}
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Transaction ID
                        </th>
                        <th>
                            Accredation
                        </th>
                        
                        <th>
                            Payment Source
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($investments as $key => $investment)
                        <tr data-entry-id="{{ $investment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $investment->id ?? '' }}
                            </td>
                            <td>
                                {{ $investment->investment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $investment->transaction_id ?? '' }}
                            </td>
                         
                            <td>
                                <span class="badge badge-success">{{ $investment->accredited ?? 'YES' }}</span>
                            </td>
                            <td>
                                {{ $investment->payment_source ?? '' }}
                            </td>
                            <td>
                                {{ $investment->created_at ?? '' }}
                            </td>

                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('customer.investment.show', $investment->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                               
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
</div>
</div>

@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'


  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Investment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection