@extends('search.search')

@section('results')
<div class="container">
    <h3>Items search results for '{{ $query }}'</h3><br><br>
    @if (count($items) > 0)
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
    @else
        <p>No results found!</p>
    @endif
</div>
@endsection
