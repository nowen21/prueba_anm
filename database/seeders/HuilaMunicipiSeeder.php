<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HuilaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Acevedo",        // 642
            "Agrado",         // 643
            "Aipe",           // 644
            "Algeciras",      // 645
            "Altamira",       // 646
            "Baraya",         // 647
            "Campoalegre",    // 648
            "Colombia",       // 649
            "Elías",          // 650
            "Garzón",         // 651
            "Gigante",        // 652
            "Guadalupe",      // 653
            "Hobo",           // 654
            "Íquira",         // 655
            "Isnos",          // 656
            "La Argentina",   // 657
            "La Plata",       // 658
            "Nátaga",         // 659
            "Neiva",          // 641
            "Oporapa",        // 660
            "Paicol",         // 661
            "Palermo",        // 662
            "Palestina",      // 663
            "Pital",          // 664
            "Pitalito",       // 665
            "Rivera",         // 666
            "Saladoblanco",   // 667
            "San Agustín",    // 668
            "Santa María",    // 669
            "Suaza",          // 670
            "Tarqui",         // 671
            "Tello",          // 672
            "Teruel",         // 673
            "Tesalia",        // 674
            "Timaná",         // 675
            "Villavieja",     // 676
            "Yaguará"         // 677
        ];
        
        // Total de municipios: 37

        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>17]);
        }
    }
}
