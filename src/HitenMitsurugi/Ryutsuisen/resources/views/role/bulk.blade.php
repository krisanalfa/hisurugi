@extends('layouts.main')

@section('content')
<div class="assignment-container">
    <div class="panel panel-default mg-top-32">
        <div class="panel-heading">
            <h3 class="panel-title">Bulk Create Role</h3>
        </div>
        <div class="panel-body">
            <div class="row callback-wrapper">
                <div class="inner-content">
                    <div class="col-md-4 controller-wrapper">
                        <div class="controller">
                            <h3>Available controllers</h3>
                            <div class="list-group">
                                <?php $first = true; ?>
                                <ul class="nav nav-tabs">
                                    @foreach ($routes as $controller => $actions)
                                        <?php $controllerId = mb_strtolower(str_replace('\\', '_', $controller)); ?>
                                        <li class="{{ $first ? 'active' : null }}">
                                            <a href="#{{ $controllerId }}" role="tab" data-toggle="tab" id="{{ $controllerId }}-tab" aria-controls="{{ $controllerId }}" aria-expanded="true">{{ $controller }}</a>
                                        </li>
                                        <?php $first = false; ?>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 actions-wrapper mg-bottom-16">
                        <div class="actions tab-content">
                            <?php $first = true; ?>
                            @foreach ($routes as $controller => $actions)
                                <?php $controllerId = mb_strtolower(str_replace('\\', '_', $controller)); ?>

                                <div role="tabpanel" class="tab-pane {{ $first ? 'active' : null }}" id="{{ $controllerId }}" aria-labelledby="{{ $controllerId }}-tab">
                                    <h3>Available actions in <code>{{ last(explode('\\', $controller)) }}</code></h3>

                                    @foreach ($actions as $action)
                                        <label class="block">
                                            <input type="checkbox" name="{{ $controller }}[]" value="{{ $action }}"> {{ ucfirst($action) }}
                                        </label>
                                    @endforeach
                                </div>
                                <?php $first = false; ?>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-primary"><i class="ti-save button-icon"></i> Save</button>
        </div>
    </div>
</div>
@stop
