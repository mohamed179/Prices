@extends('layouts.app')

@section('navbar-items')
<li class="nav-item active">
    <a class="nav-link" href="../items">Items <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="../categories">Categories</a>
</li>
@endsection

@section('content')
<div class="container">
    <h1>Items</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Category</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td><a href="#">{{ $item->name }}</a></td>
                        <td><a href="#">{{ $item->category->name }}</a></td>
                        <td>{{ $item->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
