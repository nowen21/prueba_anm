<?php

namespace App\Models\backend\administ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipomine extends Model
{
    use HasFactory;
    protected $fillable = [
        'mineral',
    ];
}
