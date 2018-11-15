@extends('layouts.app')

@section('navbar-items')
<li class="nav-item">
    <a class="nav-link" href="../items">Items</a>
</li>
<li class="nav-item active">
    <a class="nav-link" href="../categories">Categories <span class="sr-only">(current)</span></a>
</li>
@endsection

@section('content')
<div class="container">
    <h1>Categories</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Shortcut</td>
                        <td>Super Category</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td><a href="#">{{ $category->name }}</a></td>
                        <td>{{ $category->shortcut }}</td>
                        <td>
                            @if(!empty($category->superCategory))
                                <a href="#">{{ $category->superCategory->name }}</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
