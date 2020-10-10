@extends('layouts.app')

@section('content')
    <div class="layout-box-cell sidebar">
        <div class="container-fluid">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/projects') }}">Projects</a></li>
                <li><a href="{{ url('admin/users') }}">Users</a></li>
            </ul>
        </div>
    </div>
    <div class="layout-box-cell">
        <div class="container-fluid">
            <router-view></router-view>
        </div>
    </div>
@endsection
