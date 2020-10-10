@extends('layouts.app')

@section('content')
    <div id="sidebar" class="layout-box-cell sidebar">
        <div class="container-fluid">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/projects') }}">Projects</a></li>
                <li><a href="{{ url('admin/users') }}">Users</a></li>
            </ul>
        </div>
    </div>
    <div id="page-container" class="layout-box-cell">
        <div id="page-content" class="p-20">
            <router-view></router-view>
        </div>
    </div>
@endsection
