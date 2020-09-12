@extends('layouts.app')

@section('content')
<div class="container">
    Pappu testing component
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <example-component></example-component>
        <projects-list-component></projects-list-component>
    </div>
</div>
@endsection
