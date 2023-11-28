<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleado = empleado::all();
        //dd($admin);
        return view('empleado/indexEmpleado', compact('empleado'));
        // -> with(['admins']);
    }

    /**eaa
     * Show the form for creating a new resource.
     */
    public function create() //ContactoSave
    {

        
        return view('empleado/createEmpleado');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //ContactoSave
    {

        $request->validate([                                        
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'password' => 'required'
        ]);

        $empleado = new empleado(); //modelo clase que representa tabla  crea instancia de esa clase 
        
        $empleado -> nombre  = $request -> nombre;//acceso a los atributos de la tabla
        $empleado -> telefono = $request -> telefono;
        $empleado -> correo = $request -> correo;
        $empleado -> password = $request -> password;
        $empleado ->save();

        return redirect('/empleado');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
        return view('empleado.showEmpleado', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
        return view('empleado.editarEmpleado', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //

        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required'
            
        ]);
        $empleado -> nombre  = $request -> nombre;//acceso a los atributos de la tabla
        $empleado -> telefono = $request -> telefono;
        $empleado -> correo = $request -> correo;
        $empleado -> password = $request -> password;
        $empleado ->save();
        return redirect()->route("empleado.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
        $empleado->delete();
        return redirect()->route('empleado.index');
    }
}
