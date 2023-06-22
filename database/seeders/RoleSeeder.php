<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=>'Administrador', 'guard_name'=>'web']);//1
        Role::create(['name'=>'Operador Minero', 'guard_name'=>'web']);//2
        Role::create(['name'=>'Autorizador Minero', 'guard_name'=>'web']);//3
        Role::create(['name'=>'Explotador Minero', 'guard_name'=>'web']);//4
        Role::create(['name'=>'Comercializador', 'guard_name'=>'web']);//5
    }
}
