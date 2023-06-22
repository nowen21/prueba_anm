<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmazonasMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Leticia", // 1
            "Puerto Nariño" // 2
        ];
        
        // Número de municipios en Amazonas: 2
        
        
        foreach ($municipios as $municipio) {
            Municipi::create(['municipi'=>$municipio,'departam_id'=>1]);
        }
    }
}
