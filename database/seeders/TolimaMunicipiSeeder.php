<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TolimaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Alpujarra",
            "Alvarado",
            "Ambalema",
            "Anzoátegui",
            "Armero",
            "Ataco",
            "Cajamarca",
            "Carmen de Apicalá",
            "Casabianca",
            "Chaparral",
            "Coello",
            "Coyaima",
            "Cunday",
            "Dolores",
            "Espinal",
            "Falan",
            "Flandes",
            "Fresno",
            "Guamo",
            "Herveo",
            "Honda",
            "Ibagué",
            "Icononzo",
            "Lérida",
            "Líbano",
            "Mariquita",
            "Melgar",
            "Murillo",
            "Natagaima",
            "Ortega",
            "Palocabildo",
            "Piedras",
            "Planadas",
            "Prado",
            "Purificación",
            "Rioblanco",
            "Roncesvalles",
            "Rovira",
            "Saldaña",
            "San Antonio",
            "San Luis",
            "Santa Isabel",
            "Suárez",
            "Valle de San Juan",
            "Venadillo",
            "Villahermosa",
            "Villarrica",
          ];
          
          // Número de municipios en Tolima: 47
          
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>29]);
        }
    }
}
