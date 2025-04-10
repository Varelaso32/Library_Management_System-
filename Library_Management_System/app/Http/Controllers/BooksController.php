<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;


class BooksController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->select('id', 'título', 'autor', 'isbn', 'año_publicación', 'editorial', 'created_at', 'updated_at')
            ->get();
    
        return view('books.index', ['books' => $books]);
    }

        public function create()
    {
        return view('books.new');
    }

    public function store(Request $request)
    {
        $book = new Books();

        $book->título = $request->título;
        $book->autor = $request->autor;
        $book->isbn = $request->isbn;
        $book->año_publicación = $request->año_publicación;
        $book->editorial = $request->editorial;
        $book->save();

        $books = DB::table('books')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('books.index', ['books' => $books]);
    }

        public function destroy(string $id)
    {
        $book = Books::find($id);
        $book->delete();

        $books = DB::table('books')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('books.index', ['books' => $books]);
    }

        public function edit(string $id)
    {
        $book = Books::find($id);

        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, string $id)
    {
        $book = Books::find($id);

        $book->título = $request->título;
        $book->autor = $request->autor;
        $book->isbn = $request->isbn;
        $book->año_publicación = $request->año_publicación;
        $book->editorial = $request->editorial;

        $book->save();

        $books = DB::table('books')->get();

        return view('books.index', ['books' => $books]);
    }



    
}
