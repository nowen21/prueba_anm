<?php

namespace App\Models\backend\administ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipi extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'minicipi',
        'departam_id'
    ];
}
