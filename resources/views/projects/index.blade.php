@extends('layouts.app')

@section('content')
    <div class="container">
{{--        @foreach ($projects as $project)--}}
{{--            {{ $project->name }}--}}
{{--        @endforeach--}}
        <router-view :projects="{{json_encode($projects)}}"></router-view>
    </div>
@endsection
