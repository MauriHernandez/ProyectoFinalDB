<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use App\Models\Doctores;
use App\Models\Pacientes;
use App\Models\Apoyos;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $recetas = Receta::all();
        $doctores = Doctores::all();
        $pacientes = Pacientes::all();
        $apoyos = Apoyos::all();
        return 
        view('Recetas.index', \compact ('recetas', 'doctores', 'pacientes', 'apoyos'));
   
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
        $recetas= new Receta;
$recetas-> id_paciente = $request-> input('id_paciente');
$recetas-> id_doctor = $request-> input('id_doctor');
$recetas-> id_apoyo =$request-> input('id_apoyo');
$recetas-> motivo = $request-> input ('motivo');
$recetas-> fecha_emision = $request-> input('fecha_emision');
$recetas-> save();
return redirect()-> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receta $receta)
    {
        $recetas=  Receta::find($id);
        $recetas-> id_paciente = $request-> input('id_paciente');
        $recetas-> id_doctor = $request-> input('id_doctor');
        $recetas-> id_apoyo =$request-> input('id_apoyo');
        $recetas-> motivo = $request-> input ('motivo');
        $recetas-> fecha_emision = $request-> input('fecha_emision');
        $recetas-> update();
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receta $receta)
    {
        $recetas = Receta::find($id);
        $recetas-> delete();
        return redirect()-> back();
    }
}
