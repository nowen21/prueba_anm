<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChocoMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Acandí", // 443
            "Bahía Solano", // 444
            "Bojayá", // 445
            "Cértegui", // 446
            "Condoto", // 447
            "El Cantón del San Pablo", // 448
            "El Carmen de Atrato", // 449
            "El Litoral del San Juan", // 450
            "Istmina", // 451
            "Juradó", // 452
            "Lloró", // 453
            "Medio Atrato", // 454
            "Medio Baudó", // 455
            "Medio San Juan", // 456
            "Nóvita", // 457
            "Nuquí", // 458
            "Quibdó", // 459
            "Río Iró", // 460
            "Río Quito", // 461
            "Riosucio", // 462
            "San José del Palmar", // 463
            "Sipí", // 464
            "Tadó", // 465
            "Unguía", // 466
            "Unión Panamericana" // 467
        ];
        
        // Total de municipios: 25
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>12]);
        }
    }
}
