@extends('layouts.admin')
@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} Investment
    </div>

    <div class="card-body">
        <form action="{{ route("customer.investment.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="investment_amount">Investment amount * (min: $500, max: $50000000)</label>
                
                <input type="number" placeholder="$500" value="500" class="form-control" id="investment_amount" name="investment_amount" required min="500" max="50000000" step="50" required>
                @if($errors->has('investment_amount'))
                    <em class="invalid-feedback">
                        {{ $errors->first('investment_amount') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.ability.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="payment_source">Pay By*</label>
                <select id="payment_source" name="payment_source" class="form-control"  required>
                    <option value="card">Credit/Debit Card</option>
                    <option value="bank">Bank Payment</option>
                </select> 
                @if($errors->has('payment_source'))
                    <em class="invalid-feedback">
                        {{ $errors->first('payment_source') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.ability.fields.name_helper') }}
                </p>
            </div>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
</div>
</div>
@endsection