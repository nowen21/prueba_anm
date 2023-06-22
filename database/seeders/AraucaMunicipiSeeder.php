<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AraucaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Arauca", // 124
            "Arauquita", // 125
            "Cravo Norte", // 126
            "Fortul", // 127
            "Puerto Rondón", // 128
            "Saravena", // 129
            "Tame" // 130
        ];
        
        // Total de municipios: 7
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>3]);
        }
    }
}
