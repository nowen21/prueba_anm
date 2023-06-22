<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NSantanderMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Ábrego",
            "Arboledas",
            "Bochalema",
            "Bucarasica",
            "Cáchira",
            "Cácota",
            "Chinácota",
            "Chitagá",
            "Convención",
            "Cúcuta",
            "Cucutilla",
            "Durania",
            "El Carmen",
            "El Tarra",
            "El Zulia",
            "Gramalote",
            "Hacarí",
            "Herrán",
            "La Esperanza",
            "La Playa",
            "Labateca",
            "Los Patios",
            "Lourdes",
            "Mutiscua",
            "Ocaña",
            "Pamplona",
            "Pamplonita",
            "Puerto Santander",
            "Ragonvalia",
            "Salazar de Las Palmas",
            "San Calixto",
            "San Cayetano",
            "Santiago",
            "Sardinata",
            "Silos",
            "Teorama",
            "Tibú",
            "Toledo",
            "Villa Caro",
            "Villa del Rosario"
          ];
          
          // Número de municipios en Norte de Santander: 38
          
      
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>22]);
        }
    }
}
