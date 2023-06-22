<?php

namespace Database\Seeders;

use App\Models\backend\administ\Tipodocu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipodocuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tipos de documentos colombianos
        $tiposDocumentos = [
            [
                'nombre' => 'Cédula de Ciudadanía',
                'sigla' => 'CC',
            ],
            [
                'nombre' => 'Tarjeta de Identidad',
                'sigla' => 'TI',
            ],
            [
                'nombre' => 'Cédula de Extranjería',
                'sigla' => 'CE',
            ],
            // Agregar más tipos de documentos aquí
            [
                'nombre' => 'Registro Civil de Nacimiento',
                'sigla' => 'RC',
            ],
            [
                'nombre' => 'Pasaporte',
                'sigla' => 'PAS',
            ],
            // Agregar más tipos de documentos aquí
        ];

        // Crear registros en la base de datos
        foreach ($tiposDocumentos as $tipoDocumento) {
            Tipodocu::create($tipoDocumento);
        }
    }
}
