@extends('layouts.app')

@section('content')
<h2>📖 Book List (Top Rated)</h2>

<form method="GET" class="row g-2 mb-3">
    <div class="col-md-4">
        <input type="text" name="search" class="form-control" placeholder="Search title or author" value="{{ request('search') }}">
    </div>
    <div class="col-md-2">
        <select name="per_page" class="form-select" onchange="this.form.submit()">
            @foreach ([10, 20, 30, 50, 100] as $value)
                <option value="{{ $value }}" {{ $perPage == $value ? 'selected' : '' }}>{{ $value }} per page</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <button class="btn btn-primary" type="submit">Search</button>
    </div>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Average Rating</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ number_format($book->ratings_avg_rating, 2) ?? 'N/A' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $books->withQueryString()->links() }}
@endsection
