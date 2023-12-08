<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use Illuminate\Http\Request;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamentos = Medicamentos::all();
        return 
        view ('medicamentos.index', \compact ('medicamentos'));
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
        $medicamentos = new Medicamentos;
        $medicamentos-> nombre = $request-> input ('nombre');
        $medicamentos-> descripcion = $request-> input ('descripcion');
        $medicamentos-> fechaCaducidad = $request-> input('fechaCaducidad');
        $medicamentos-> lote = $request-> input('lote');
        $medicamentos-> save();
        return redirect() -> back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Medicamentos $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $medicamentos = Medicamentos::find($id);
        return 
        view ('medicamentos.info',compact ('medicamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $medicamentos = Medicamentos::find($id);
        $medicamentos-> nombre = $request-> input ('nombre');
        $medicamentos-> descripcion = $request-> input ('descripcion');
        $medicamentos-> fechaCaducidad = $request-> input('fechaCaducidad');
        $medicamentos-> lote = $request-> input('lote');
        $medicamentos-> update();
        return redirect() -> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $medicamentos = Medicamentos::find($id);
        $medicamentos-> delete();
        return redirect() -> back();
    }
}
