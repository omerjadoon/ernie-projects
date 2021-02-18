@extends('layouts.admin')
@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <!-- <a class="btn btn-success" href="{{ route("admin.investment.create") }}">
            Create Investment
        </a> -->
    </div>
</div>
<div class="card">
    <div class="card-header">
        Investments List
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
                            Customer Name
                        </th>
                        <th>
                            Customer Email
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            State
                        </th>
                        <th>
                            Transaction ID
                        </th>
                        <th>
                            Accreditation
                        </th>
                        <th>
                            Payment Status
                        </th>
                         <th>
                            Investment Status
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
                    @foreach($data as $key => $investment)
                        <tr data-entry-id="{{ $investment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $investment->id ?? '' }}
                            </td>
                            <td>
                                {{ $investment->name ?? '' }}
                            </td>
                            <td>
                                {{ $investment->email ?? '' }}
                            </td>
                            <td>
                                {{ $investment->investment_amount ?? '' }}
                            </td>
                            <td>
                                {{ $investment->state ?? '' }}
                            </td>
                            <td>
                                {{ $investment->transaction_id ?? '' }}
                            </td>
                         
                            <td>
                                @if($investment->accredited)
                                <span class="badge badge-success">Accredited</span>
                                @endif
                                @if(!($investment->accredited))
                                    <span class="badge badge-danger">No</span>
                                @endif
                            </td>
                            <td>
                                @if($investment->payment_status)
                                <span class="badge badge-success">Paid</span>
                                @endif
                                @if(!($investment->payment_status))
                                    <span class="badge badge-danger">Unpaid</span>
                                @endif
                            </td>
                            <td>
                                @if($investment->investment_status)
                                <span class="badge badge-success">Complete</span>
                                @endif
                                @if(!($investment->investment_status))
                                    <span class="badge badge-danger">incomplete</span>
                                @endif
                            </td>
                            <td>
                                {{ $investment->payment_source ?? '' }}
                            </td>
                            <td>
                                {{ $investment->created_at ?? '' }}
                            </td>

                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.investment.show', $investment->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                
                                 @if(!($investment->payment_status))
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.investment.paid', $investment->id) }}">
                                    Mark Paid
                                </a>
                                @endif

                                <form action="{{ route('admin.investment.destroy', $investment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                               
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