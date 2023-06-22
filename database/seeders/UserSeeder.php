<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ing. Jose Dumar Jimenez Ruiz',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'document' => '123456789',
            'tipodocu_id' => 1,
            'departam_id' => 20,
            'municipi_id' => 717,
            'estado_id' => 1,
            'user_edita_id' => 1,
            'user_crea_id' => 1
        ]); //1

        // operador minero
        User::create([
            'name' => 'Operador Minenero',
            'email' => 'operador_miniero@gmail.com',
            'password' => 'admin',
            'document' => '123456780',
            'tipodocu_id' => 1,
            'departam_id' => 20,
            'municipi_id' => 717,
            'estado_id' => 1,
            'user_edita_id' => 1,
            'user_crea_id' => 1
        ]); //2
        // autorizador minero
        User::create([
            'name' => 'Autorizador Minero',
            'email' => 'autorizador_miniero@gmail.com',
            'password' => 'admin',
            'document' => '123456781',
            'tipodocu_id' => 1,
            'departam_id' => 20,
            'municipi_id' => 717,
            'estado_id' => 1,
            'user_edita_id' => 1,
            'user_crea_id' => 1
        ]); //3

        // explotador
        User::create([
            'name' => 'Explotador Minero',
            'email' => 'explotador_minero@gmail.com',
            'password' => 'admin',
            'document' => '123456782',
            'tipodocu_id' => 1,
            'departam_id' => 20,
            'municipi_id' => 717,
            'estado_id' => 1,
            'user_edita_id' => 1,
            'user_crea_id' => 1
        ]); //4

        // Comercializador
        User::create([
            'name' => 'Comercializador',
            'email' => 'comercializador@gmail.com',
            'password' => 'admin',
            'document' => '123456783',
            'tipodocu_id' => 1,
            'departam_id' => 20,
            'municipi_id' => 717,
            'estado_id' => 1,
            'user_edita_id' => 1,
            'user_crea_id' => 1
        ]); // 5

        User::create([
            'name' => 'Javier Muricio Salamanca',
            'email' => 'amaox@gmail.com',
            'password' => '12345678',
            'document' => '12345678',
            'tipodocu_id' => 1,
            'departam_id' => 20,
            'municipi_id' => 717,
            'estado_id' => 3,
            'user_edita_id' => 1,
            'user_crea_id' => 1
        ]); // 6
    }
}
