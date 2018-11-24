@extends('search.search')

@section('results')
<div class="container">
    <h3>Categories search results for '{{ $query }}'</h3><br><br>
    @if (count($categories) > 0)
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
    @else
        <p>No results found</p>
    @endif
</div>
@endsection
