@extends('layouts.app')

@section('content')
<h2>✍️ Input Rating</h2>

<form action="{{ route('ratings.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Author</label>
        <select class="form-select" id="authorSelect" required>
            <option value="">-- Choose Author --</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}" data-books='@json($author->books)'>{{ $author->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Book</label>
        <select name="book_id" id="bookSelect" class="form-select" required>
            <option value="">-- Choose Book --</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Rating</label>
        <select name="rating" class="form-select" required>
            @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>

    <button type="submit" class="btn btn-success">Submit Rating</button>
</form>

<script>
document.getElementById('authorSelect').addEventListener('change', function () {
    const bookSelect = document.getElementById('bookSelect');
    bookSelect.innerHTML = '<option value="">-- Choose Book --</option>';

    const books = JSON.parse(this.selectedOptions[0].dataset.books || '[]');
    books.forEach(book => {
        const option = document.createElement('option');
        option.value = book.id;
        option.text = book.title;
        bookSelect.appendChild(option);
    });
});
</script>
@endsection
