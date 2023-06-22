<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Acacías",                  // 705
            "Barranca de Upía",         // 706
            "Cabuyaro",                 // 707
            "Cubarral",                 // 708
            "Cumaral",                  // 709
            "El Calvario",              // 710
            "El Castillo",              // 711
            "El Dorado",                // 712
            "Fuente de Oro",            // 713
            "Granada",                  // 714
            "Guamal",                   // 715
            "La Macarena",              // 716
            "Lejanías",                 // 717
            "Mapiripán",                // 718
            "Mesetas",                  // 719
            "Puerto Concordia",         // 720
            "Puerto Gaitán",            // 721
            "Puerto López",             // 722
            "Puerto Lleras",            // 723
            "Puerto Rico",              // 724
            "Restrepo",                 // 725
            "San Carlos de Guaroa",     // 726
            "San Juan de Arama",        // 727
            "San Juanito",              // 728
            "San Martín",               // 729
            "Uribe",                    // 730
            "Villavicencio",            // 731
            "Vistahermosa"              // 732
        ];
        
        // Total de municipios: 28
        
        
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>20]);
        }
    }
}
