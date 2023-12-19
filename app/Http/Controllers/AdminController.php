<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return view('admin.index', ['books' => $book]);
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'required|integer',
            'copies_in_circulation' => 'required|integer',
        ]);

        // Create a new book instance
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->copies_in_circulation = $request->input('copies_in_circulation');

        // Save the book
        $book->save();

        // Redirect or respond as needed
        // For example, you can redirect back to the form with a success message
        return redirect('/books')->with('success', 'Book added successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
