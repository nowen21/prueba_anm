<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaquetaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Florencia", // 350
            "Albania", // 351
            "Belén de los Andaquíes", // 352
            "Cartagena del Chairá", // 353
            "Curillo", // 354
            "El Doncello", // 355
            "El Paujil", // 356
            "La Montañita", // 357
            "Milán", // 358
            "Morelia", // 359
            "Puerto Rico", // 360
            "San José del Fragua", // 361
            "San Vicente del Caguán", // 362
            "Solano", // 363
            "Solita", // 364
            "Valparaíso" // 365
        ];
        
        // Total de municipios: 16

        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>8]);
        }
    }
}
