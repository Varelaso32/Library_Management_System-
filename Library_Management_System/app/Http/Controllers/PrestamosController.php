<?php

namespace App\Http\Controllers;

use App\Models\Prestamos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    public function index()
    {
        $prestamos = DB::table('prestamos')
            ->join('books', 'prestamos.libro_id', '=', 'books.id')
            ->join('readers', 'prestamos.lector_id', '=', 'readers.id')
            ->select(
                'prestamos.*',
                'books.id as book_id',
                'books.título as book_title',
                'books.autor as book_author',
                'readers.id as reader_id',
                'readers.nombre as reader_name',
                'readers.email as reader_email'
            )
            ->get();

        return view('prestamos.index', ['prestamos' => $prestamos]);
    }

    public function create()
    {
        $books = DB::table('books')
            ->orderBy('título')
            ->get();

        $readers = DB::table('readers')
            ->orderBy('nombre')
            ->get();

        return view('prestamos.new', ['books' => $books, 'readers' => $readers]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'libro_id' => 'required|exists:books,id',
            'lector_id' => 'required|exists:readers,id',
            'fecha_préstamo' => 'required|date',
            'fecha_devolución' => 'nullable|date|after_or_equal:fecha_préstamo',
        ]);

        $prestamo = new Prestamos();

        $prestamo->libro_id = $request->libro_id;
        $prestamo->lector_id = $request->lector_id;
        $prestamo->fecha_préstamo = $request->fecha_préstamo;
        $prestamo->fecha_devolución = $request->fecha_devolución;
        $prestamo->save();

        // Recuperar los préstamos con JOINs para mostrar en el index
        $prestamos = DB::table('prestamos')
            ->join('books', 'prestamos.libro_id', '=', 'books.id')
            ->join('readers', 'prestamos.lector_id', '=', 'readers.id')
            ->select(
                'prestamos.*',
                'books.id as book_id',
                'books.título as book_title',
                'books.autor as book_author',
                'readers.id as reader_id',
                'readers.nombre as reader_name',
                'readers.email as reader_email'
            )
            ->get();

        return view('prestamos.index', ['prestamos' => $prestamos]);
    }

    public function edit(string $id)
    {
        $prestamo = Prestamos::find($id);

        $books = DB::table('books')
            ->orderBy('título')
            ->get();

        $readers = DB::table('readers')
            ->orderBy('nombre')
            ->get();

        return view('prestamos.edit', [
            'prestamo' => $prestamo,
            'books' => $books,
            'readers' => $readers
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'libro_id' => 'required|exists:books,id',
            'lector_id' => 'required|exists:readers,id',
            'fecha_préstamo' => 'required|date',
            'fecha_devolución' => 'nullable|date|after_or_equal:fecha_préstamo',
        ]);

        $prestamo = Prestamos::find($id);
        $prestamo->libro_id = $request->libro_id;
        $prestamo->lector_id = $request->lector_id;
        $prestamo->fecha_préstamo = $request->fecha_préstamo;
        $prestamo->fecha_devolución = $request->fecha_devolución;
        $prestamo->save();

        $prestamos = DB::table('prestamos')
            ->join('books', 'prestamos.libro_id', '=', 'books.id')
            ->join('readers', 'prestamos.lector_id', '=', 'readers.id')
            ->select(
                'prestamos.*',
                'books.id as book_id',
                'books.título as book_title',
                'books.autor as book_author',
                'readers.id as reader_id',
                'readers.nombre as reader_name',
                'readers.email as reader_email'
            )
            ->get();

        return view('prestamos.index', ['prestamos' => $prestamos]);
    }
}
