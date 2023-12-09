<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Vistas extends Controller
{
    public function pacienteDoctores()
    {
        $datos = DB::table('PacientesYDoctores')->select('nombre_paciente', 'nombre_doctor')->get();
        return view("vistas.vista1", compact("datos"));
    }
    public function pacienteRecetas()
{
    $datos = DB::table('PacientesYRecetas')->select('nombre_paciente', 'nombre_paciente_receta', 'fecha_emision_receta')->get();
    return view("vistas.vista2", compact("datos"));
}
public function doctoresRecetas()
{
    $datos = DB::table('DoctoresYRecetas')->select('nombre_doctor', 'nombre_doctor_receta', 'fecha_emision_receta')->get();
    return view("vistas.vista3", compact("datos"));
}
public function pacientesApoyos()
{
    $datos = DB::table('PacientesYApoyos')->select('nombre_paciente', 'nombre_apoyo', 'fecha_emision_apoyo')->get();
    return view("vistas.vista4", compact("datos"));
}
public function doctoresPacientesRecetas()
{
    $datos = DB::table('DoctoresConPacientesYRecetas')->select('nombre_doctor', 'nombre_paciente', 'id_receta','fecha_emision_receta')->get();
    return view("vistas.vista5", compact("datos"));
}


public function consultaUsuariosPerfiles()
{
    $datos = DB::table('usuarios')
        ->join('perfiles', 'usuarios.perfil_id', '=', 'perfiles.id')
        ->select('usuarios.correo_electronico', 'perfiles.nombre_perfil')
        ->get();

    return view('consultas.consulta1', ['datos' => $datos]);
}

public function consultaDoctoresPacientes()
{
    $datos = DB::table('info_doctores')
        ->join('recetas_medicas', 'info_doctores.id', '=', 'recetas_medicas.id_doctor')
        ->join('info_pacientes', 'recetas_medicas.id_paciente', '=', 'info_pacientes.id')
        ->select('info_doctores.nombre AS nombre_doctor', 'info_pacientes.nombre AS nombre_paciente')
        ->get();

    return view('consultas.consulta2', ['datos' => $datos]);
}
public function consultaPacientesDoctores()
{
    $datos = DB::table('info_pacientes')
        ->join('recetas_medicas', 'info_pacientes.id', '=', 'recetas_medicas.id_paciente')
        ->join('info_doctores', 'recetas_medicas.id_doctor', '=', 'info_doctores.id')
        ->select('info_pacientes.nombre AS nombre_paciente', 'info_doctores.nombre AS nombre_doctor')
        ->get();

    return view('consultas.consulta3', ['datos' => $datos]);
}



}
