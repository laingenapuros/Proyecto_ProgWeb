<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Empleado;
use App\Mail\NotificaEmpleadoCreado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
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
        //$admin - admin::get();
        $admin = admin::with('user')->get();
        //dd($admin);
        return view('admin/indexAdmin', compact('admin'));
        // -> with(['admins']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //ContactoSave
    {

        $empleados = Empleado::all();
        return view('admin/createAdmin', compact('empleados'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //ContactoSave
    {

        $request->validate([                                        
            'nombre' => 'required',
            'correo' => 'required',
            'password' => 'required',
            'archivo'=>'required|max:1000'

        ]);

        if(!$request->file('archivo')->isValid()){
            //$request->file('archivo')->store('imgs');
        }

        $request->merge(['user_id'=>Auth::id(), 
            'archivo_nombre' => $request->file('archivo')->getClientOriginalName(), 
            'archivo_ubicacion' => $request->file('archivo')->store('public/imgs'),
        ]);

        #Admin::create($request -> all());
        $admin = Admin::create($request -> all());
        $admin->empleados()->attach($request->empleado_id);

        /*$admin = new admin(); //modelo clase que representa tabla  crea instancia de esa clase 
        
       // $admin -> nombre  = $request -> nombre;//acceso a los atributos de la tabla
        //$admin -> correo = $request -> correo;
        //$admin -> password = $request -> password;
        //$admin ->save();*/

        Mail::to($request->user())->send(new NotificaEmpleadoCreado($admin));

        return redirect()->route('admin.index');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
        return view('admin.showAdmin', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
        $empleados = Empleado::all();
        return view('admin.editarAdmin', compact('admin','empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, Admin $admin)
    {
        //validacion
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required'
        ]);

        Admin::where('id', $admin ->id)->update($request -> except('_token', '_method','empleado_id'));
        $admin -> empleados()->sync($request->empleado_id);

        /*$admin -> nombre  = $request e-> nombre;//acceso a los atributos de la tabla
        $admin -> correo = $request -> correo;
        $admin -> password = $request -> password;*/
        //$admin ->save();
        
        return redirect()->route("admin.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Admin $admin)
    {
        //
        $admin->compras()->delete();
       // $admin -> compras() ->detach(); 


        $admin->delete();
        return redirect()->route('admin.index');
    }

    public function descargar(Admin $admin){
        return Storage::download($admin->archivo_ubicacion, $admin->archivo_nombre);
    }
}
