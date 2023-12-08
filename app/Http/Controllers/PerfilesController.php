<?php

namespace App\Http\Controllers;

use App\Models\Perfiles;
use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfiles = Perfiles::all();
        return 
        view ('perfiles.index', \compact ('perfiles'));
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
        $perfiles = new Perfiles;
        $perfiles-> nombre_perfil = $request-> input('nombre_perfil');
        $perfiles-> save();
        return redirect()-> back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfiles $perfiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $perfiles = Perfiles::find($id);
        return view ('perfiles.info',\compact ('perfiles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $perfiles = Perfiles::find($id);
        $perfiles-> nombre_perfil = $request-> input('nombre_perfil');
        $perfiles-> update();
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $perfiles = Perfiles::find($id);
        $perfiles-> delete();
        return redirect()-> back();
    }
}
