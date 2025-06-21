@extends('layouts.app')

@section('content')
<h2>👑 Top 10 Most Famous Authors (Rating > 5)</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Author</th>
            <th>Total Votes (rating > 5)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($topAuthors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->votes }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
