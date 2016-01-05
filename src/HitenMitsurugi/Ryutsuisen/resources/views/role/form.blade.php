@extends('layouts.main')

@section('title')
Role
@stop

@section('content')
<div class="container pd-top-32">
    <form action="{{ route('role.store') }}" method="POST" role="form" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : null }}">
            <label class="has-required col-sm-2 control-label"><i class="input-required">*</i> <span>Name</span></label>

            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Role Name" name="name" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @else
                    <span class="help-block">This field is required</span>
                @endif
            </div>
        </div>

        <div class="form-group {{ $errors->has('display_name') ? 'has-error' : null }}">
            <label class="col-sm-2 control-label">Display Name</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Role Display Name" name="display_name" value="{{ old('display_name') }}" />
                @if ($errors->has('display_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('display_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group {{ $errors->has('description') ? 'has-error' : null }}">
            <label class="col-sm-2 control-label">Description</label>

            <div class="col-sm-10">
                <textarea type="text" class="form-control" placeholder="Role Description" name="description">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default"><i class="ti-save button-icon"></i> Save</button>
            </div>
        </div>
    </form>
</div>
@stop
