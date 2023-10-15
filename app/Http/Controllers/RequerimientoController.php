<?php

namespace App\Http\Controllers;

use App\Models\Requerimiento;
use App\Models\Cliente;
use Illuminate\Http\Request;

class RequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reqs = Requerimiento::all();

        return view ('req.indexReq', compact ('reqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $cliente = Cliente::all();
        return view('req.createReq', compact('cliente'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //forma 1 de guardar
        $req = new Requerimiento();
        $req->cliente_id = $request->cliente_id;
        $req->identificador = $request->identificador;
        $req->parrafo = $request->parrafo;
        $req->save();

        //forma 2 
        /*$req = new Cliente();
        $req->cliente_id = $request->cliente_id;
        $req->identificador = $request->identificador;
        $req->parrafo = $request->parrafo;

        $cliente = Cliente::find($request->cliente_id);
        $cliente->requerimientos()->save($req);*/

        return redirect()->route('cliente.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Requerimiento $requerimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requerimiento $requerimiento)
    {
        //
    }
}
