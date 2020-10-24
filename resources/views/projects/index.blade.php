@extends('layouts.app')

@section('content')
    <router-view :projects="{{json_encode($projects)}}"></router-view>
    {{--        @foreach ($projects as $project)--}}
    {{--            {{ $project->name }}--}}
    {{--        @endforeach--}}
@endsection
