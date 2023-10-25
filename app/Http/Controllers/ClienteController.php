<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //forma 3 de middleware
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);

    }

    public function index()
    {
       // $cliente = cliente::all();
        $cliente = cliente::get(); //obtener todos los registros de la tabla
       
       //$cliente = Cliente::where('user_id', Auth::id())->get(); //obtiene los registros unicamente del id del User ingresado
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

        $request->merge(['user_id'=>Auth::id()]);
        Cliente::create( $request -> all());

        $cliente->productos()->attach($request->producto_id);

        //$cliente = Cliente::create( $request -> all());

        //$cliente->producto()->attach($request->producto_id);

        /**$cliente = new cliente();

        $cliente -> nombre = $request -> nombre;
        $cliente -> cantidad = $request -> cantidad;
        $cliente -> telefono = $request -> telefono;
        $cliente -> producto_men = $request -> producto_men;
       
        //$cliente -> user_id = Auth::id(); //nuevo
        $user-> Auth::user();
        $user-> clientes()->save($cliente);

       // $cliente -> save();**/


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
