@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/projects') }}">Projects</a></li>
        </ul>
    </div>
    <router-view></router-view>
</div>
@endsection
