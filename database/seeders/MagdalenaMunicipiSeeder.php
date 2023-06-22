<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagdalenaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Algarrobo",                 // 678
            "Aracataca",                 // 679
            "Ariguaní",                  // 680
            "Cerro de San Antonio",      // 681
            "Chivolo",                   // 682
            "Ciénaga",                   // 683
            "El Banco",                  // 684
            "El Piñón",                  // 685
            "El Retén",                  // 686
            "Fundación",                 // 687
            "Guamal",                    // 688
            "Nueva Granada",             // 689
            "Pedraza",                   // 690
            "Pijiño del Carmen",         // 691
            "Pivijay",                   // 692
            "Plato",                     // 693
            "Puebloviejo",               // 694
            "Remolino",                  // 695
            "Sabanas de San Ángel",      // 696
            "Salamina",                  // 697
            "San Sebastián de Buenavista",  // 698
            "San Zenón",                 // 699
            "Santa Ana",                 // 700
            "Santa Marta",               // 678
            "Sitionuevo",                // 701
            "Tenerife",                  // 702
            "Zapayán",                   // 703
            "Zona Bananera"              // 704
        ];
        
        // Total de municipios: 27
         
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>19]);
        }
    }
}
