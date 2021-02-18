@extends('layouts.admin')
@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.user.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <td>
                            {{ $user->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <td>
                            {{ $user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <td>
                            {{ $user->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Roles
                        </th>
                        <td>
                            @foreach($user->roles->pluck('name') as $role)
                                <span class="badge badge-info">{{ $role }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            View all Investments of this User
                        </th>
                        <td>
                            <form action="{{ route('admin.investment.viewcustomerinvestment', $user->id) }}" method="GET">
                                <input class="btn btn-primary" type="submit" value="View All Investments" />
                            </form>
                            
                        </td>
                    </tr>
                </tbody>
            </table>

            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
</div>
</div>
@endsection