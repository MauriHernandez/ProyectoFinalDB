<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamentos extends Model
{
    use HasFactory;
    protected $table='medicamentos';
    protected $primarykey= 'id';
    protected $fillable=['id', 'nombre','descripcion','fechaCaducidad','lote'];
    protected $guarded=[];
    public $timestamps=false;
}
