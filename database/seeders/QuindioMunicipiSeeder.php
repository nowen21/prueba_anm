<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuindioMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $municipios = [
            "Armenia",
            "Calarcá",
            "Circasia",
            "Córdoba",
            "Filandia",
            "Génova",
            "La Tebaida",
            "Montenegro",
            "Pijao",
            "Quimbaya",
            "Salento"
          ];
          
          // Número de municipios en Quindío: 11
          
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>24]);
        }
    }
}
