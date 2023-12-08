<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    use HasFactory;
    protected $table='perfiles';
    protected $primarykey= 'id';
    protected $fillable=['id', 'nombre_perfil'];
    protected $guarded=[];
    public $timestamps=false;
}
