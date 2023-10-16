<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //forma 3 de middleware
    /* public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);

    }*/

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
        return view('cliente/createCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //validacion
        $request->validate([                                        
            'nombre'=>'required',
            'cantidad'=>'required',
            'telefono'=>'required',
            'producto_men'=>'required'
        ]);

       Cliente::create( $request -> all());

        /**$cliente = new cliente();

        $cliente -> nombre = $request -> nombre;
        $cliente -> cantidad = $request -> cantidad;
        $cliente -> telefono = $request -> telefono;
        $cliente -> producto_men = $request -> producto_men;

        $cliente -> save();**/

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //dd($cliente);
        return view('cliente.showCliente', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
        return view('cliente.editCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        ////validacion
        $request->validate([                                        
            'nombre'=>'required',
            'cantidad'=>'required',
            'telefono'=>'required',
            'producto_men'=>'required'
        ]);
        
        //dd($request->except('_token', '_method'));
        Cliente::where('id', $cliente->id)->update($request -> except('_token', '_method'));

        /**$cliente-> nombre = $request->nombre;
        $cliente-> cantidad = $request->cantidad;
        $cliente-> telefono = $request->telefono;
        $cliente-> producto_men = $request->producto_men;
        $cliente ->save();**/

        return redirect()->route("cliente.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
