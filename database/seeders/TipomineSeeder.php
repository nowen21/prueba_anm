<?php

namespace Database\Seeders;

use App\Models\backend\administ\Tipomine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipomineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipomine::create([
            'mineral'=>'Oro',
        ]);
        Tipomine::create([
            'mineral'=>'Plata',
        ]);
        Tipomine::create([
            'mineral'=>'Esmeralda',
        ]);
        Tipomine::create([
            'mineral'=>'Carbón',
        ]);
        Tipomine::create([
            'mineral'=>'Materiales de construcción',
        ]);
    }
}
