<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    //
    public function index()
    {
        $book = Book::all();
        return view('books.index', ['books' => $book]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|numeric',
            'copies_in_circulation' => 'required|numeric',
        ]);

        Book::create($request->all());

        return redirect('/books/create')->with('status', 'Book added successfully!');
    }

   
}
