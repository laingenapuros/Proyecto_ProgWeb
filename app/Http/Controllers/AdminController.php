<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = admin::all();
        //dd($admin);
        return view('admin/indexAdmin', compact('admin'));
        // -> with(['admins']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //ContactoSave
    {

        
        return view('admin/createAdmin');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //ContactoSave
    {

        $admin = new admin(); //modelo clase que representa tabla  crea instancia de esa clase 
        
        $admin -> nombre  = $request -> nombre;//acceso a los atributos de la tabla
        $admin -> correo = $request -> correo;
        $admin -> password = $request -> password;
        $admin ->save();

        return redirect('/Admin');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
