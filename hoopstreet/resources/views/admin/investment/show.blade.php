@extends('layouts.admin')
@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Investment
    </div>


    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ability.fields.id') }}
                        </th>
                        <td>
                            {{ $investment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ability.fields.name') }}
                        </th>
                        <td>
                            {{ $user[0]->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Invesment Amount
                        </th>
                        <td>
                            ${{ $investment->investment_amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            No of Shares
                        </th>
                        <td>
                            {{ (((float)$investment->investment_amount)/50) }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Transaction ID
                        </th>
                        <td>
                            {{ $investment->transaction_id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $user[0]->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Mobile
                        </th>
                        <td>
                            {{ $user[0]->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Accredited
                        </th>
                        <td>
                        @if($user[0]->accredited)
                            <span class="badge badge-success">YES</span>
                        @endif
                        @if(!($user[0]->accredited))
                            <span class="badge badge-danger">NO</span>
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Payment Source 
                        </th>
                        <td>
                            {{ $investment->payment_source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Payment Status
                        </th>
                        <td>
                        @if($investment->payment_status)
                            <span class="badge badge-success">YES</span>
                        @endif
                        @if(!($investment->payment_status))
                            <span class="badge badge-danger">NO</span>
                        @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
</div>
</div>
@endsection