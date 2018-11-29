<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class MenuController extends Controller
{

    public function index()
    {
        return view('layouts.menu');
    }
    public function usuarios(){
        return view('usuarios');
    }

    public function empleados(){
        return view('empleados');
    }

    public function clientes(){
        return view('clientes');
    }

    public function proveedores(){
        return view('proveedores');
    }

    public function productos(){
        return view('productos');
    }

    public function servicios(){
        return view('servicios');
    }

    public function nuevaCotizacion()
    {
        $clientes = Clientes::pluck('nombre_fiscal', 'id');
        $empresas = Clientes::pluck('nombre_comercial', 'id');

        return view('cotizacion.crearCotizacion',compact('clientes', 'empresas'));
    }
}
