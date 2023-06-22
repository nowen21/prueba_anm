<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisoSeeder extends Seeder
{
function unox($nombrexx,$permisox) : void {
    Permission::create(['name' => "$nombrexx-$permisox", 'guard_name' => 'web']);
}

    public function base($nombrexx)
    {
        $this->unox($nombrexx,'listaxxx');
        $this->unox($nombrexx,'crearxxx');
        $this->unox($nombrexx,'actualiz');
        $this->unox($nombrexx,'verxxxxx');
        $this->unox($nombrexx,'elminact');
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Restablecer roles y permisos en caché
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'administ-moduloxx', 'guard_name' => 'web']);
        // permisos para el crud de los usuarios
        $this->unox('usuariox','moduloxx');
        $this->base('usuariox'); // permisos para el crud de usuarios
        // permisos para asignar roles al usuario
        $this->unox('usuarole','listaxxx');
        $this->unox('usuarole','crearxxx');
        $this->unox('usuarole','elminact');
        // permisos para el crud del rol
        $this->unox('rolexxxx','moduloxx');
        $this->base('rolexxxx'); // permisos para el crud de roles
        // permisos para asignar permios al rol
        $this->unox('roleperm','listaxxx');
        $this->unox('roleperm','crearxxx');
        $this->unox('roleperm','elminact');

        $this->unox('permisox','listaxxx');
       // $this->base('permisox'); // permisos para el crud de permisos
        $this->unox('aprobaci','listaxxx');
        $this->unox('aprobaci','actualiz');

        $this->unox('perfilxx','actualiz');
        $this->unox('explotac','moduloxx');
        $this->base('explotac'); // permisos para el crud de roles
        
        $this->unox('aproexpl','listaxxx');
        $this->unox('aproexpl','actualiz');

        $this->unox('comercia','moduloxx');
        $this->base('comercia'); // permisos para el crud de roles

        $this->unox('aprocome','listaxxx');
        $this->unox('aprocome','actualiz');
        // asignarle todos los permisos al rol administrador
        Role::find(1)->givePermissionTo(Permission::all());
        Role::find(2)->givePermissionTo(Permission::all());
       
        // 'listaxxx','crearxxx', 'actualiz', 'verxxxxx', 'elminact'
        Role::find(5)->givePermissionTo(['administ-moduloxx','perfilxx-actualiz','explotac-moduloxx','explotac-listaxxx','explotac-crearxxx', 'explotac-actualiz', 'explotac-verxxxxx', 'explotac-elminact',]);
    }
}
