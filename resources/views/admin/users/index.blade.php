@extends('layouts.app')

@section('content')
    <div class="container">
        users view
        <user-list :users="{{json_encode($users)}}"></user-list>
{{--        <router-view ></router-view>--}}
{{--        @foreach ($users as $user)--}}
{{--            {{ $user->name }}--}}
{{--        @endforeach--}}
    </div>
@endsection