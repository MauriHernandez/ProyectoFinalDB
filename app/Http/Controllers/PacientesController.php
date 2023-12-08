<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Pacientes::all();
        $usuarios= Usuarios::all();
        return 
        view ('pacientes.index', \compact ('pacientes','usuarios'));
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
        $pacientes = new Pacientes;
        $pacientes-> usuario_id = $request-> input('usuario_id');
        $pacientes-> nombre = $request-> input ('nombre');
        $pacientes-> apellido_paterno = $request->  input('apellido_paterno');    
        $pacientes-> apellido_materno= $request-> input('apellido_materno');
        $pacientes-> fecha_nacimiento= $request-> input('fecha_nacimiento');
        $pacientes-> genero= $request-> input('genero');
        $pacientes-> curp= $request-> input('curp');
        $pacientes-> telefono= $request-> input('telefono');
        $pacientes-> ocupacion= $request-> input('ocupacion');
        $pacientes-> calle= $request-> input('calle');
        $pacientes-> numero_exterior= $request-> input('numero_exterior');
        $pacientes-> numero_interior= $request-> input('numero_interior');
        $pacientes-> cod_postal= $request-> input('cod_postal');
        $pacientes-> comunidad= $request-> input('comunidad');
        $pacientes-> localidad= $request-> input('localidad');
        $pacientes-> estado= $request-> input('estado');
        $pacientes-> numero_ambulatorio= $request-> input('numero_ambulatorio');
        $pacientes-> nivel_ambulatorio= $request-> input('nivel_ambulatorio');
        $pacientes-> numero_telefono= $request-> input('numero_telefono');
        $pacientes-> save();
        return redirect()-> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $pacientes = Pacientes::find($id);
        $pacientes-> usuario_id = $request-> input('usuario_id');
        $pacientes-> nombre = $request-> input ('nombre');
        $pacientes-> apellido_paterno = $request->  input('apellido_paterno');    
        $pacientes-> apellido_materno= $request-> input('apellido_materno');
        $pacientes-> fecha_nacimiento= $request-> input('fecha_nacimiento');
        $pacientes-> genero= $request-> input('genero');
        $pacientes-> curp= $request-> input('curp');
        $pacientes-> telefono= $request-> input('telefono');
        $pacientes-> ocupacion= $request-> input('ocupacion');
        $pacientes-> calle= $request-> input('calle');
        $pacientes-> numero_exterior= $request-> input('numero_exterior');
        $pacientes-> numero_interior= $request-> input('numero_interior');
        $pacientes-> cod_postal= $request-> input('cod_postal');
        $pacientes-> comunidad= $request-> input('comunidad');
        $pacientes-> localidad= $request-> input('localidad');
        $pacientes-> estado= $request-> input('estado');
        $pacientes-> numero_ambulatorio= $request-> input('numero_ambulatorio');
        $pacientes-> nivel_ambulatorio= $request-> input('nivel_ambulatorio');
        $pacientes-> numero_telefono= $request-> input('numero_telefono');
        $pacientes-> update();
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $pacientes = Pacientes::find($id);
        $pacientes-> delete();
        return redirect()-> back();
    }
}
