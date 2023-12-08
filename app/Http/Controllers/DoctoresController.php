<?php

namespace App\Http\Controllers;

use App\Models\Doctores;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctores = Doctores::all();
        $usuarios= Usuarios::all();
        return 
        view ('doctores.index', \compact ('doctores','usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctores = new Doctores;
        $doctores-> usuario_id = $request-> input('usuario_id');
        $doctores-> nombre = $request-> input ('nombre');
        $doctores-> apellido_paterno = $request->  input('apellido_paterno');    
        $doctores-> apellido_materno= $request-> input('apellido_materno');
        $doctores-> fecha_nacimiento= $request-> input('fecha_nacimiento');
        $doctores-> genero= $request-> input('genero');
        $doctores-> curp= $request-> input('curp');
        $doctores-> telefono= $request-> input('telefono');
        $doctores-> ocupacion= $request-> input('ocupacion');
        $doctores-> calle= $request-> input('calle');
        $doctores-> numero_exterior= $request-> input('numero_exterior');
        $doctores-> numero_interior= $request-> input('numero_interior');
        $doctores-> cod_postal= $request-> input('cod_postal');
        $doctores-> comunidad= $request-> input('comunidad');
        $doctores-> localidad= $request-> input('localidad');
        $doctores-> estado= $request-> input('estado');
        $doctores-> carrera= $request-> input('carrera');
        $doctores-> especialidad= $request-> input('especialidad');
        $doctores-> licencia= $request-> input('licencia');
        $doctores-> departamento= $request-> input('departamento');
        $doctores-> save();
        return redirect()-> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctores $doctores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctores $doctores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $doctores = Doctores::find($id);
        $doctores-> usuario_id = $request-> input('usuario_id');
        $doctores-> nombre = $request-> input ('nombre');
        $doctores-> apellido_paterno = $request->  input('apellido_paterno');    
        $doctores-> apellido_materno= $request-> input('apellido_materno');
        $doctores-> fecha_nacimiento= $request-> input('fecha_nacimiento');
        $doctores-> genero= $request-> input('genero');
        $doctores-> curp= $request-> input('curp');
        $doctores-> telefono= $request-> input('telefono');
        $doctores-> ocupacion= $request-> input('ocupacion');
        $doctores-> calle= $request-> input('calle');
        $doctores-> numero_exterior= $request-> input('numero_exterior');
        $doctores-> numero_interior= $request-> input('numero_interior');
        $doctores-> cod_postal= $request-> input('cod_postal');
        $doctores-> comunidad= $request-> input('comunidad');
        $doctores-> localidad= $request-> input('localidad');
        $doctores-> estado= $request-> input('estado');
        $doctores-> carrera= $request-> input('carrera');
        $doctores-> especialidad= $request-> input('especialidad');
        $doctores-> licencia= $request-> input('licencia');
        $doctores-> departamento= $request-> input('departamento');
        $doctores-> update();
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $doctores = Doctores::find($id);
        $doctores-> delete();
        return redirect()-> back();
    }
}
