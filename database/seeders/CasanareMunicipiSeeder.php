<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CasanareMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Aguazul", // 366
            "Chámeza", // 367
            "Hato Corozal", // 368
            "La Salina", // 369
            "Maní", // 370
            "Nunchía", // 371
            "Orocué", // 372
            "Paz de Ariporo", // 373
            "Recetor", // 374
            "Sabanalarga", // 375
            "Sácama", // 376
            "San Luis de Palenque", // 377
            "Tauramena", // 378
            "Trinidad", // 379
            "Villanueva", // 380
            "Yopal" // 381
        ];
        
        // Total de municipios: 16
        
        
        // 16 municipios
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>9]);
        }
    }
}
