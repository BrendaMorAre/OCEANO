<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{

    public function marcaProductos()

    {

        $marcas = Marca::pluck('nombre', 'id');

        return view('productos',compact('marcas'));

    }
}
