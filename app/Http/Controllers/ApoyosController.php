<?php

namespace App\Http\Controllers;

use App\Models\Apoyos;
use Illuminate\Http\Request;

class ApoyosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apoyos = Apoyos::all();
        return view ('apoyos.index', \compact ('apoyos'));
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
        $apoyos = new Apoyos;
        $apoyos-> nombre = $request-> input ('nombre');
        $apoyos-> descripcion = $request-> input ('descripcion');
        $apoyos-> fechaLimite = $request-> input('fechaLimite');
        $apoyos-> save();
        return redirect() -> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Apoyos $apoyos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $apoyos = Apoyos::find($id);
        return 
        view ('apoyos.info',compact ('apoyos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $apoyos = Apoyos::find($id);
        $apoyos-> nombre = $request-> input ('nombre');
        $apoyos-> descripcion = $request-> input ('descripcion');
        $apoyos-> fechaLimite = $request-> input('fechaLimite');
        $apoyos-> update();
        return redirect() -> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $apoyos = Apoyos::find($id);
        $apoyos-> delete();
        return redirect() -> back();//
    }
}
