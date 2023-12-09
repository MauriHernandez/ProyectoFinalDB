<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    
    public function create()
    {
        $ubicacionDescarga = getcwd() . DIRECTORY_SEPARATOR . "RespaldoBD_" . date("Y-m-d") . "_Hospital.sql";
        $salida = "";
        $codigoSalida = 0;
        $comando = sprintf("%s --user=\"%s\" --password=\"%s\" %s > %s", env("UBICACION_MYSQLDUMP"), env("DB_USERNAME"), env("DB_PASSWORD"), env("DB_DATABASE"), $ubicacionDescarga);
        exec($comando, $salida, $codigoSalida);
        if ($codigoSalida !== 0) {
            return "Código de salida distinto de 0, se obtuvo código (" . $codigoSalida . "). Revise los ajustes e intente de nuevo";
        }
        return response()->download($ubicacionDescarga)->deleteFileAfterSend(true);
    }
   
}