<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timedoor Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <a class="navbar-brand" href="{{ route('books.index') }}">📚 Bookstore</a>
    <div class="navbar-nav">
        <a class="nav-link" href="{{ route('books.index') }}">Book List</a>
        <a class="nav-link" href="{{ route('authors.index') }}">Top Authors</a>
        <a class="nav-link" href="{{ route('ratings.create') }}">Input Rating</a>
    </div>
</nav>

<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
</div>
</body>
</html>
