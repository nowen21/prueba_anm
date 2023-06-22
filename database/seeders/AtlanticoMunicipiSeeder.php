<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtlanticoMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Barranquilla", // 131
            "Baranoa", // 132
            "Campo de la Cruz", // 133
            "Candelaria", // 134
            "Galapa", // 135
            "Juan de Acosta", // 136
            "Luruaco", // 137
            "Malambo", // 138
            "Manatí", // 139
            "Palmar de Varela", // 140
            "Piojó", // 141
            "Polonuevo", // 142
            "Ponedera", // 143
            "Puerto Colombia", // 144
            "Repelón", // 145
            "Sabanagrande", // 146
            "Sabanalarga", // 147
            "Santa Lucía", // 148
            "Santo Tomás", // 149
            "Soledad", // 150
            "Suan", // 151
            "Tubará", // 152
            "Usiacurí" // 153
        ];
        
        // Total de municipios: 23
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>4]);
        }
    }
}
