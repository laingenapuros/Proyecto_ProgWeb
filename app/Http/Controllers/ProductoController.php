<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);

    }


    public function index()
    {
        $producto = producto::all();
        //dd($clientes);
        return view('producto/indexProducto', compact('producto'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto/createProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {//validacion
        $request->validate([                                        
            'nombre' => 'required',
            'cantidad' => 'required',
            'precio' => 'required'
        ]);

        $producto = new producto();

        $producto -> nombre = $request -> nombre;
        $producto -> cantidad = $request -> cantidad;
        $producto -> precio = $request -> precio;

        $producto -> save();

        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
        
        return view('producto.showProducto', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
        return view('producto.editProducto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        ////validacion
        $request->validate([                                        
            'nombre'=>'required',
            'cantidad'=>'required',
            'precio'=>'required'
        ]);

        $producto-> nombre = $request->nombre;
        $producto-> cantidad = $request->cantidad;
        $producto-> precio = $request->precio;
        $producto ->save();
        return redirect()->route("producto.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
