<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    protected $table='citas_medicas';
    protected $primarykey= 'id';
    protected $fillable=['id', 'id_paciente', 'numero_afiliacion_paciente','fecha_cita','sala_consulta','id_doctor',
'motivo_cita'];
    protected $guarded=[];
    public $timestamps=false;
    



    public function Paciente(){
        return $this->hasOne(Pacientes::class, 'id','id_paciente');
    }
    public function Doctor(){
        return $this->hasOne(Doctores::class, 'id','id_doctor');
    }
}
