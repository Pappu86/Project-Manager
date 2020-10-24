@extends('layouts.app')

@section('content')
    <router-view :users="{{json_encode($users)}}"></router-view>
    {{--        <user-list :users="{{json_encode($users)}}"></user-list>--}}
    {{--        <router-view ></router-view>--}}
    {{--        @foreach ($users as $user)--}}
    {{--            {{ $user->name }}--}}
    {{--        @endforeach--}}
@endsection
