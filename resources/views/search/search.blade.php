@extends('layouts.app')

@section('navbar-items')
<li class="nav-item">
    <a class="nav-link" href="../items">Items</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="../categories">Categories</a>
</li>
@endsection

@section('content')
    @yield('results')
@endsection