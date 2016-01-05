@extends('layouts.main')

@section('title')
Role
@stop

@section('content')
<div class="container pd-top-32">
    <div class="mg-bottom-8">
        <a href="{{ route('role.create') }}" class="btn btn-sm btn-primary"><i class="ti-plus button-icon"></i> Create new Role</a>
    </div>

    <div class="table-responsive">
        <table class="role-table table table-hover table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Display Name</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Permissions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($collection as $model)
                    <tr>
                        <td>{{ $model->name }}</td>
                        <td>{{ $model->display_name }}</td>
                        <td>{{ $model->description }}</td>
                        <td>
                            <ul>
                                @foreach ($model->perms as $permission)
                                    <li>{{ $permission->display_name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
