@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('messages.dashboard') }}</div>

                <div class="panel-body">
                    {{ trans('userinterface.welcome') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
