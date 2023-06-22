<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CesarMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Agustín Codazzi", // 425
            "Aguachica", // 426
            "Astrea", // 427
            "Becerril", // 428
            "Bosconia", // 429
            "Chiriguaná", // 430
            "Curumaní", // 431
            "El Paso", // 432
            "Gamarra", // 433
            "La Jagua de Ibirico", // 434
            "La Paz", // 435
            "Manaure Balcón del Cesar", // 436
            "Pailitas", // 437
            "Pelaya", // 438
            "Río de Oro", // 439
            "San Martín", // 440
            "Tamalameque", // 441
            "Valledupar" // 442
        ];
        
        // Total de municipios: 18
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>11]);
        }

    }
}
