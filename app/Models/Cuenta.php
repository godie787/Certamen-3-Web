<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cuenta extends Model
{

    use HasFactory;
    //use SoftDeletes;
    protected $table = 'cuentas';

    public function perfil(){
        return $this->belongsTo('App\Models\Perfil');
    }
    public function imagenes(){
        return $this->hasMany('App\Models\Imagen');
    }
}
