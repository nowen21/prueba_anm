<?php

namespace Database\Seeders;

use App\Models\backend\administ\Departam;
use Illuminate\Database\Seeder;

class DepartamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = [
            'Amazonas',//1
            'Antioquia',//2
            'Arauca',//3
            'Atlántico',//4
            'Bolívar',//5
            'Boyacá',//6
            'Caldas',//7
            'Caquetá',//8
            'Casanare',//9
            'Cauca',//10
            'Cesar',//11
            'Chocó',//12
            'Córdoba',//13
            'Cundinamarca',//14
            'Guainía',//15
            'Guaviare',//16
            'Huila',//17
            'La Guajira',//18
            'Magdalena',//19
            'Meta',//20
            'Nariño',//21
            'Norte de Santander',//22
            'Putumayo',//23
            'Quindío',//24
            'Risaralda',//25
            'San Andrés y Providencia',//26
            'Santander',//27
            'Sucre',//28
            'Tolima',//29
            'Valle del Cauca',//30
            'Vaupés',//31
            'Vichada'//32
        ];

        foreach ($departamentos as $departamento) {
            Departam::create([
                'departam' => $departamento
            ]);
        }
    }
}
