<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    protected $table='recetas_apoyo';
    protected $primarykey= 'id';
    protected $fillable=['id', 'id_paciente', 'id_doctor','motivo', 'fecha_emision','id_apoyo'];
    protected $guarded=[];
    public $timestamps=false;
    



    public function Paciente(){
        return $this->hasOne(Pacientes::class, 'id','id_paciente');
    }
    public function Doctor(){
        return $this->hasOne(Doctores::class, 'id','id_doctor');
    }
    public function Apoyo(){
        return $this->hasOne(Apoyos::class, 'id','id_apoyo');
    }
}
