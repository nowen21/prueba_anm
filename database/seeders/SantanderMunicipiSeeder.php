<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantanderMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Barbosa",
            "Barichara",
            "Barrancabermeja",
            "Betulia",
            "Bolívar",
            "Bucaramanga",
            "Cabrera",
            "California",
            "Capitanejo",
            "Carcasí",
            "Cepitá",
            "Cerrito",
            "Charalá",
            "Charta",
            "Chima",
            "Chipatá",
            "Cimitarra",
            "Concepción",
            "Confines",
            "Contratación",
            "Coromoro",
            "Curití",
            "El Carmen de Chucurí",
            "El Guacamayo",
            "El Peñón",
            "El Playón",
            "Encino",
            "Enciso",
            "Floridablanca",
            "Galán",
            "Gámbita",
            "Girón",
            "Guaca",
            "Guadalupe",
            "Guapotá",
            "Guavatá",
            "Güepsa",
            "Hato",
            "Jesús María",
            "Jordán",
            "La Belleza",
            "La Paz",
            "Landázuri",
            "Lebrija",
            "Los Santos",
            "Macaravita",
            "Málaga",
            "Matanza",
            "Mogotes",
            "Molagavita",
            "Ocamonte",
            "Oiba",
            "Onzaga",
            "Palmar",
            "Palmas del Socorro",
            "Páramo",
            "Piedecuesta",
            "Pinchote",
            "Puente Nacional",
            "Puerto Parra",
            "Puerto Wilches",
            "Rionegro",
            "Sabana de Torres",
            "San Andrés",
            "San Benito",
            "San Gil",
            "San Joaquín",
            "San José de Miranda",
            "San Miguel",
            "San Vicente de Chucurí",
            "Santa Bárbara",
            "Santa Helena del Opón",
            "Simacota",
            "Socorro",
            "Suaita",
            "Sucre",
            "Suratá",
            "Tona",
            "Valle de San José",
            "Vélez",
            "Vetas",
            "Villanueva",
            "Zapatoca",
          ];
          
          // Número de municipios en Santander: 87
          
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>26]);
        }
    }
}
