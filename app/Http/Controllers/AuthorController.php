<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{

    public function index()
    {
        $topAuthors = Author::withCount([
            'books as votes' => function ($q) {
                $q->join('ratings', 'books.id', '=', 'ratings.book_id')
                    ->where('ratings.rating', '>', 5);
            }
        ])
            ->orderByDesc('votes')
            ->limit(10)
            ->get();

        return view('authors.index', compact('topAuthors'));
    }

}
