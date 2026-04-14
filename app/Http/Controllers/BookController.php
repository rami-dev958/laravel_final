<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::where('status', 1)->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year_published' => 'required|integer'
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'year_published' => $request->year_published,
            'status' => 1 
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id); 
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year_published' => 'required|integer'
        ]);

        $book = Book::findOrFail($id);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year_published' => $request->year_published
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);

        $book->status = 0; 
        $book->save();

        return redirect('/');
    }
}