<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    
    public function create()
    {
        return view('book.create');
    }

    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'book_name' => 'required|max:255',
            'isbn_no'   => 'required|alpha_num',
            'book_price'=> 'required|numeric',
        ]);
        $book = Book::create($validateData);

        return redirect('/books')->with('success', 'Book is saved!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('book.edit', compact('book'));
    }

    
    public function update(Request $request, $id)
    {

        $validateData = $request->validate([
            'book_name' => 'required|max:255',
            'isbn_no'   => 'required|alpha_num',
            'book_price'=> 'required|numeric',
        ]);
        Book::whereId($id)->update($validateData);

        return redirect('/books')->with('success', 'Book has been updated!');
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book has been deleted!');
    }
}
