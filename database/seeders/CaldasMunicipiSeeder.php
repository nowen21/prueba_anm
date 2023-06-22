<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaldasMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Aguadas", // 323
            "Anserma", // 324
            "Aranzazu", // 325
            "Belalcázar", // 326
            "Chinchiná", // 327
            "Filadelfia", // 328
            "La Dorada", // 329
            "La Merced", // 330
            "Manizales", // 331
            "Manzanares", // 332
            "Marmato", // 333
            "Marquetalia", // 334
            "Marulanda", // 335
            "Neira", // 336
            "Norcasia", // 337
            "Pácora", // 338
            "Palestina", // 339
            "Pensilvania", // 340
            "Riosucio", // 341
            "Risaralda", // 342
            "Salamina", // 343
            "Samaná", // 344
            "San José", // 345
            "Supía", // 346
            "Victoria", // 347
            "Villamaría", // 348
            "Viterbo" // 349
        ];
        
        // Total de municipios: 27
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>7]);
        }
    }
}
