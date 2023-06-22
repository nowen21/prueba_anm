<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SucreMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Buenavista",
            "Caimito",
            "Chalán",
            "Colosó",
            "Corozal",
            "Coveñas",
            "El Roble",
            "Galeras",
            "Guaranda",
            "La Unión",
            "Los Palmitos",
            "Majagual",
            "Morroa",
            "Ovejas",
            "Palmito",
            "Sampués",
            "San Benito Abad",
            "San Juan de Betulia",
            "San Marcos",
            "San Onofre",
            "San Pedro",
            "Sincé",
            "Sincelejo",
            "Sucre",
            "Tolú",
            "Tolú Viejo",
          ];
          
          // Número de municipios en Sucre: 25
          
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>28]);
        }
    }
}
