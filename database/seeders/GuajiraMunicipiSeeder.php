<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuajiraMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Albania", // 627
            "Barrancas", // 628
            "Dibulla", // 629
            "Distracción", // 630
            "El Molino", // 631
            "Fonseca", // 632
            "Hatonuevo", // 633
            "La Jagua del Pilar", // 634
            "Maicao", // 635
            "Manaure", // 636
            "Riohacha", // 626
            "San Juan del Cesar", // 637
            "Uribia", // 638
            "Urumita", // 639
            "Villanueva" // 640
        ];
        
        // Total de municipios: 15
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>18]);
        }
    }
}
