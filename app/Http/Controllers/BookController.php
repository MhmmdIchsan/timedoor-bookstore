<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $search = $request->get('search');

        $query = Book::with('author')
            ->withAvg('ratings', 'rating')
            ->when($search, function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                    ->orWhereHas('author', fn($q) => $q->where('name', 'like', "%$search%"));
            })
            ->orderByDesc('ratings_avg_rating');

        $books = $query->paginate($perPage);

        return view('books.index', compact('books', 'perPage', 'search'));
    }

}
