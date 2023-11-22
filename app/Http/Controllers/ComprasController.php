<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Admin;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reqs = Compras::all();

        return view ('req.indexCompras', compact ('reqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $cliente = Admin::all();
        return view('req.createCompra', compact('admin'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //forma 3 rapida 
        Compras::create($request->all());
        
        //forma 1 de guardar
        /*$req = new Requerimiento();
        $req->cliente_id = $request->cliente_id;
        $req->identificador = $request->identificador;
        $req->parrafo = $request->parrafo;
        $req->save();*/

        //forma 2 
        /*$req = new Cliente();
        $req->cliente_id = $request->cliente_id;
        $req->identificador = $request->identificador;
        $req->parrafo = $request->parrafo;

        $admin = Admin::find($request->admin_id);
        $admin->requerimientos()->save($req);*/

        /*$admin = Admin::find($request->admin_id);
        $admin->requerimientos()->save($req);*/

        return redirect()->route('admin.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compras $compras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compras $compras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compras $compras)
    {
        //
    }
}