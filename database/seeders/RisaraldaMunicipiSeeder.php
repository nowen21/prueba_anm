<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RisaraldaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Apía",
            "Balboa",
            "Belén de Umbría",
            "Dosquebradas",
            "Guática",
            "La Celia",
            "La Virginia",
            "Marsella",
            "Mistrató",
            "Pereira",
            "Pueblo Rico",
            "Quinchía",
            "Santa Rosa de Cabal",
            "Santuario",
          ];
          
          // Número de municipios en Risaralda: 14
          
          
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>25]);
        }
    }
}
