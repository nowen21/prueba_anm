<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CordobaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Ayapel", // 468
            "Buenavista", // 469
            "Canalete", // 470
            "Cereté", // 471
            "Chimá", // 472
            "Chinú", // 473
            "Ciénaga de Oro", // 474
            "Cotorra", // 475
            "La Apartada", // 476
            "Lorica", // 477
            "Los Córdobas", // 478
            "Momil", // 479
            "Montería", // 480
            "Montelíbano", // 481
            "Moñitos", // 482
            "Planeta Rica", // 483
            "Pueblo Nuevo", // 484
            "Puerto Escondido", // 485
            "Puerto Libertador", // 486
            "Purísima", // 487
            "Sahagún", // 488
            "San Andrés de Sotavento", // 489
            "San Antero", // 490
            "San Bernardo del Viento", // 491
            "San Carlos", // 492
            "San José de Uré", // 493
            "San Pelayo", // 494
            "Tierralta", // 495
            "Tuchín", // 496
            "Valencia" // 497
        ];
        
        // Total de municipios: 30
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>13]);
        }
    }
}
