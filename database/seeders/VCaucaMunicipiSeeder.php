<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VCaucaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Alcalá",
            "Andalucía",
            "Ansermanuevo",
            "Argelia",
            "Bolívar",
            "Buenaventura",
            "Buga",
            "Bugalagrande",
            "Caicedonia",
            "Cali",
            "Calima",
            "Candelaria",
            "Cartago",
            "Dagua",
            "El Águila",
            "El Cairo",
            "El Cerrito",
            "El Dovio",
            "Florida",
            "Ginebra",
            "Guacarí",
            "Jamundí",
            "La Cumbre",
            "La Unión",
            "La Victoria",
            "Obando",
            "Palmira",
            "Pradera",
            "Restrepo",
            "Riofrío",
            "Roldanillo",
            "San Pedro",
            "Sevilla",
            "Toro",
            "Trujillo",
            "Tuluá",
            "Ulloa",
            "Versalles",
            "Vijes",
            "Yotoco",
            "Yumbo",
            "Zarzal"
          ];
          
          // Número de municipios en Valle del Cauca: 42
          
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>31]);
        }
    }
}
