<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = cliente::all();
        //dd($clientes);
        return view('cliente/indexCliente', compact('cliente'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente/creatCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new cliente();

        $cliente -> nombre = $request -> nombre;
        $cliente -> cantidad = $request -> cantidad;
        $cliente -> telefono = $request -> telefono;
        $cliente -> catidad_men = $request -> cantidad_men;

        $cliente -> save();

        return redirect('/Cliente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
