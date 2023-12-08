<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;
    protected $table='info_pacientes';
    protected $primarykey= 'id';
    protected $fillable=['id', 'usuario_id', 'nombre','apellido_paterno','apellido_materno','fecha_nacimiento',
'genero','curp','telefono','ocupacion','calle','numero_exterior','numero_interior','cod_postal','comunidad','localidad',
'estado','numero_ambulatorio','nivel_ambulatorio'];
    protected $guarded=[];
    public $timestamps=false;
    



    public function Usuario(){
        return $this->hasOne(Usuarios::class, 'id','usuario_id');
    }
}

