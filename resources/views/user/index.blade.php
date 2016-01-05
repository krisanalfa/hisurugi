@extends('layouts.main')

@section('content')
<div class="container pd-top-32">
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Permission</th>
                </tr>
            </thead>

            <tbody>
                @forelse($collections as $model)
                    <tr>
                        <td>{{ $model->name }}</td>
                        <td>{{ $model->email }}</td>
                        <td>
                            {{ implode(', ', $model->rolesName()) ?: 'No roles assigned' }}
                        </td>
                        <td>
                            {{ implode(', ', $model->permsName()) ?: 'No permissions assigned' }}
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
@stop
