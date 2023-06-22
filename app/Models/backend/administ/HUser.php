<?php

namespace App\Models\backend\administ;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\backend\administ\Departam;
use App\Models\backend\administ\Municipi;
use App\Models\backend\administ\Tipodocu;
use Illuminate\Database\Eloquent\Model;

class HUser extends Model
{
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_old',
        'name',
        'email',
        'password',
        'document',
        'tipodocu_id',
        'departam_id',
        'municipi_id',
        'estado_id',
        'user_edita_id',
        'user_crea_id',
        'metodoxx',
        'rutaxxxx',
        'ipxxxxxx'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
  

    public function tipodocu()
    {
       return $this->belongsTo(Tipodocu::class);
    }

    public function departam()
    {
       return $this->belongsTo(Departam::class);
    }
    public function municipi()
    {
       return $this->belongsTo(Municipi::class);
    }
}
