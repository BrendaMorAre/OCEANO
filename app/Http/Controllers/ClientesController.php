<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Clientes;
use Yajra\DataTables\DataTables;
use PDF;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all();

        return view('clientes',compact('clientes'));
    }

    public function getdata()
    {
        $clientes = Clientes::select(['id','nombre_comercial','telefono1','rfc']);

        return DataTables::of($clientes)->make();
    }

    public function generar_pdf()
    {
        $clientes = Clientes::all();
        $date = date('l jS F Y \a\t\ g:ia');
        $view = \View::make('invoice', compact('clientes', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        echo $view;
        exit;
        return $pdf->download('invoice');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Clientes();
        $cliente->nombre_comercial = $request->input('nomcomercial');
        $cliente->nombre_fiscal = $request->input('nomfiscal');
        $cliente->contacto = $request->input('contacto');
        $cliente->telefono1 = $request->input('telefono1');
        $cliente->telefono2 = $request->input('telefono2');
        $cliente->correo_cobranza = $request->input('cobranza');
        $cliente->correo_cotizaciones = $request->input('cotizaciones');
        $cliente->correo_sistemas = $request->input('sistemas');
        $cliente->correo_boletin = $request->input('boletin');
        $cliente->rfc = $request->input('rfc');
        $cliente->domicilio = $request->input('domicilio');
        $cliente->save();

        $lastInsertedId=$cliente->id;
        return view('clientes')->with('lastInsertedId',$lastInsertedId);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
