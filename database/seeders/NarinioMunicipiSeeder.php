<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NarinioMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Albán",
            "Aldana",
            "Ancuyá",
            "Arboleda",
            "Barbacoas",
            "Belén",
            "Buesaco",
            "Chachagüí",
            "Colón",
            "Consaca",
            "Contadero",
            "Córdoba",
            "Cuaspud",
            "Cumbal",
            "Cumbitara",
            "El Charco",
            "El Peñol",
            "El Rosario",
            "El Tablón",
            "El Tambo",
            "Francisco Pizarro",
            "Funes",
            "Guachucal",
            "Guaitarilla",
            "Gualmatán",
            "Iles",
            "Imués",
            "Ipiales",
            "La Cruz",
            "La Florida",
            "La Llanada",
            "La Tola",
            "La Unión",
            "Leiva",
            "Linares",
            "Los Andes",
            "Magüí",
            "Mallama",
            "Mosquera",
            "Nariño"
          ];
          
         
          
        // Número de municipios 37
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>21]);
        }
    }
}
