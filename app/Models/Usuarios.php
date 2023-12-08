<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table='usuarios';
    protected $primarykey= 'id';
    protected $fillable=['id', 'correo_electronico', 'contraseña','perfil_id'];
    protected $guarded=[];
    public $timestamps=false;



    public function Usuario(){
        return $this->hasOne(Perfiles::class, 'id','perfil_id');
    }
}
