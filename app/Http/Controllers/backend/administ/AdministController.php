<?php

namespace App\Http\Controllers\backend\administ;

use App\Http\Controllers\Controller;


class AdministController extends Controller
{
    private $parametr=[
        'componen'=>[
            'rolexxxx'=>[
                'backend.administ.roles.role-livewire',
                '',
                'tituloxx'=>'Roles',
            ],
            'permisox'=>[
                'backend.administ.permisos.permiso-livewire',
                '',
                'tituloxx'=>'Permisos',
            ],
            'permrole'=>[
                'backend.administ.permroles.permrole-livewire',
                '',
                'tituloxx'=>'Roles y Permisos',
            ]
        ],
        'componex'=>''
    ];

    public function roles()
    {
        $this->parametr['componen']['rolexxxx'][1]='active';
        $this->parametr['componex']=$this->parametr['componen']['rolexxxx'][0];
        return View('backend.administ.menuperm',$this->parametr);
    }

    public function permisos()
    {
        $this->parametr['componen']['permisox'][1]='active';
        $this->parametr['componex']=$this->parametr['componen']['permisox'][0];
        return View('backend.administ.menuperm',$this->parametr);
    }

    public function permroles()
    {
        $this->parametr['componen']['permrole'][1]='active';
        $this->parametr['componex']=$this->parametr['componen']['permrole'][0];
        return View('backend.administ.menuperm',$this->parametr);
    }

    public function usuarios()
    {
        $this->parametr['componen']['permrole'][1]='active';
        $this->parametr['componex']=$this->parametr['componen']['permrole'][0];
        return View('backend.administ.menuperm',$this->parametr);
    }
}
