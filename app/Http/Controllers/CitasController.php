<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Doctores;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Citas::all();
        $doctores = Doctores::all();
        $pacientes = Pacientes::all();
        return 
        view('citas.index', \compact ('citas', 'doctores', 'pacientes'));
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
      
$citas= new Citas;
$citas-> id_paciente = $request-> input('id_paciente');
$citas->numero_afiliacion_paciente = $request-> input('numero_afiliacion_paciente');
$citas-> fecha_cita =$request-> input('fecha_cita');
$citas-> sala_consulta = $request-> input ('sala_consulta');
$citas-> id_doctor = $request-> input('id_doctor');
$citas-> motivo_cita = $request-> input('motivo_cita');
$citas-> save();
return redirect()-> back();
           }

    /**
     * Display the specified resource.
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
      $citas = Citas::find($id);
        $citas-> id_paciente = $request-> input('id_paciente');
$citas->numero_afiliacion_paciente = $request-> input('numero_afiliacion_paciente');
$citas-> fecha_cita =$request-> input('fecha_cita');
$citas-> sala_consulta = $request-> input ('sala_consulta');
$citas-> id_doctor = $request-> input('id_doctor');
$citas-> motivo_cita = $request-> input('motivo_cita');
$citas-> update();
return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $citas = Citas::find($id);
        $citas-> delete();
        return redirect()-> back();
    }
}