<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoyos extends Model
{
    use HasFactory;
    protected $table='apoyo';
    protected $primarykey= 'id';
    protected $fillable=['id', 'nombre','descripcion','fechaLimite'];
    protected $guarded=[];
    public $timestamps=false;
}
