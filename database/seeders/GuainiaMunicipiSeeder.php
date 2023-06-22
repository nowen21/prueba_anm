<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuainiaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Inírida", // 617
            "Barranco Minas", // 618
            "Cacahual", // 619
            "La Guadalupe", // 620
            "Mapiripana", // 621
            "Morichal", // 622
            "Pana Pana", // 623
            "Puerto Colombia", // 624
            "San Felipe" // 625
        ];
        
        // Total de municipios: 9
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>15]);
        }
    }
}
