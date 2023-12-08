<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Models\Perfiles;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuarios::all();
        $perfiles = Perfiles::all();
        return 
        view ('usuarios.index', \compact ('usuarios','perfiles')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new Usuarios;
        $usuarios-> perfil_id =$request-> input('perfil_id');
        $usuarios-> correo_electronico = $request-> input('correo_electronico');
        $usuarios-> contraseña = $request-> input('contraseña');
        $usuarios-> save();
        return redirect ()-> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $usuarios =  Usuarios::find($id);
        $usuarios-> perfil_id =$request-> input('perfil_id');
        $usuarios-> correo_electronico = $request-> input('correo_electronico');
        $usuarios-> contraseña = $request-> input('contraseña');
        $usuarios-> update();
        return redirect ()-> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $usuarios =  Usuarios::find($id);
        $usuarios-> delete();
        return redirect ()-> back();
    }
}
