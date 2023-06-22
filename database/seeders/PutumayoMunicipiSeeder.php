<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PutumayoMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Colón",
            "Mocoa",
            "Orito",
            "Puerto Asís",
            "Puerto Caicedo",
            "Puerto Guzmán",
            "Puerto Leguízamo",
            "San Francisco",
            "San Miguel",
            "Santiago",
            "Sibundoy",
            "Valle del Guamuez",
            "Villagarzón"
          ];
          
          // Número de municipios en Putumayo: 13
          
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>23]);
        }
    }
}
