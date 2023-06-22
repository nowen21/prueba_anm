<?php

namespace App\Models\backend\administ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercia extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad',
        'tipomine_id',
        'estado_id',
        'tipoapro_id',
        'user_id'
    ];
    
    function tipomine() : object {
        return $this->belongsTo(Tipomine::class);
    }
}
