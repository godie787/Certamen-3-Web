<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $fillable = ['url'];
    use HasFactory;
    protected $table = 'imagenes';

    public function cuenta(){
        $this->belongsTo('App\Models\Cuenta');
    }
}
