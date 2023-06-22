<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaupesMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $municipios = [
            "Carurú",
            "Mitú",
            "Taraira",
            "Papunaua",
            "Yavaraté",
          ];
          
          // Número de municipios en Vaupés: 5
          
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>30]);
        }
    }
}
