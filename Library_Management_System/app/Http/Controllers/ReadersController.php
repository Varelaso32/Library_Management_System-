<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Readers;

class ReadersController extends Controller
{
    public function index()
    {
        $readers = DB::table('readers')
            ->select('id', 'nombre', 'apellido', 'dirección', 'teléfono', 'email', 'created_at', 'updated_at')
            ->get();
    
        return view('readers.index', ['readers' => $readers]);
    }

        public function create()
    {
        return view('readers.new');
    }

    public function store(Request $request)
    {
        $reader = new Readers();

        $reader->nombre = $request->nombre;
        $reader->apellido = $request->apellido;
        $reader->dirección = $request->dirección;
        $reader->teléfono = $request->teléfono;
        $reader->email = $request->email;
        $reader->save();

        $readers = DB::table('readers')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('readers.index', ['readers' => $readers]);
    }

        
}
