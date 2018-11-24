@extends('search.search')

@section('results')
<div class="container">
    <h3>Prices search results for '{{ $query }}'</h3><br><br>
    @if (count($items) > 0)
        <h5>All those items has price of '{{ $query }}'</h5>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered table-hover datatable">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Category</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td><a href="#">{{ $item->name }}</a></td>
                            <td><a href="#">{{ $item->category->name }}</a></td>
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
