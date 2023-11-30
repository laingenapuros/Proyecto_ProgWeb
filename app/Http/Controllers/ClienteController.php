<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Mail\NotificaClienteCreado;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage;

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
        //$cliente = cliente::get(); //obtener todos los registros de la tabla
       
        $cliente = Cliente::with('user')->get();
        //$cliente = Cliente::with('user', 'requerimientos')->get(); //para usar y optimizar las búsquedas en la base de datos y que se muestre en la barrita de queries

       //$cliente = Cliente::where('user_id', Auth::id())->get(); //obtiene los registros unicamente del id del User ingresado
        //dd($clientes);
        return view('cliente/indexCliente', compact('cliente'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prods = Producto::all();
        return view('cliente/createCliente', compact('prods'));
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
            'producto_men'=>'required',
            'producto_id'=>'required',
            "archivo"=>'required|max:1000'
        ]);

        if(!$request->file('archivo')->isValid()){
            //$request->file('archivo')->store('imgs');
        }

        $request->merge(['user_id'=>Auth::id(), 
            'archivo_nombre' => $request->file('archivo')->getClientOriginalName(), 
            'archivo_ubicacion' => $request->file('archivo')->store('public/imgs'),
        ]);

        $cliente = Cliente::create($request -> all());

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



       Mail::to($request->user())->send(new NotificaClienteCreado($cliente));

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
        //if(! Gate::allows('admin-norma', $cliente)){
            //return abort(403);
        //};
        $prods = Producto::all();

        return view('cliente.editCliente', compact('cliente', 'prods'));
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
            'producto_men'=>'required',
            //"archivo"=>'required|max:1000'
        ]);
        
        //dd($request->except('_token', '_method'));

        //$cliente->merge(['user_id'=>Auth::id(), 
            //'archivo_nombre' => $cliente->file('archivo')->getClientOriginalName(), 
            //'archivo_ubicacion' => $cliente->file('archivo')->store('public/imgs'),
        //]);

        Cliente::where('id', $cliente->id)->update($request -> except('_token', '_method', 'producto_id'));
        $cliente->productos()->sync($request->producto_id);

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
    public function destroy(Request $request, Cliente $cliente)
    {
        //
        $cliente->requerimientos()->delete(); //1 a muchos
        //$cliente->requerimientos()->detach(); //muchos a muchos

        if($request->user()->cannot('delete', $cliente)){
            abort(403);
        }
        $cliente->delete();
        return redirect()->route('cliente.index');
    }

    public function descargar(Cliente $cliente){
        return Storage::download($cliente->archivo_ubicacion, $cliente->archivo_nombre);
    }
}
