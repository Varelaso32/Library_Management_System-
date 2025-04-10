<?php

namespace App\Http\Controllers;

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
}
