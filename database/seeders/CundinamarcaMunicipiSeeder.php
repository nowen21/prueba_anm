<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CundinamarcaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Agua de Dios", // 498
            "Albán", // 499
            "Anapoima", // 500
            "Anolaima", // 501
            "Apulo", // 502
            "Arbeláez", // 503
            "Beltrán", // 504
            "Bituima", // 505
            "Bojacá", // 506
            "Bogotá D.C.", // 507
            "Cabrera", // 508
            "Cachipay", // 509
            "Cajicá", // 510
            "Caparrapí", // 511
            "Cáqueza", // 512
            "Carmen de Carupa", // 513
            "Chaguaní", // 514
            "Chía", // 515
            "Chipaque", // 516
            "Choachí", // 517
            "Chocontá", // 518
            "Cogua", // 519
            "Cota", // 520
            "Cucunubá", // 521
            "El Colegio", // 522
            "El Peñón", // 523
            "El Rosal", // 524
            "Facatativá", // 525
            "Fómeque", // 526
            "Fosca", // 527
            "Funza", // 528
            "Fúquene", // 529
            "Fusagasugá", // 530
            "Gachalá", // 531
            "Gachancipá", // 532
            "Gachetá", // 533
            "Gama", // 534
            "Girardot", // 535
            "Granada", // 536
            "Guachetá", // 537
            "Guaduas", // 538
            "Guasca", // 539
            "Guataquí", // 540
            "Guatavita", // 541
            "Guayabal de Síquima", // 542
            "Guayabetal", // 543
            "Gutiérrez", // 544
            "Jerusalén", // 545
            "Junín", // 546
            "La Calera", // 547
            "La Mesa", // 548
            "La Palma", // 549
            "La Peña", // 550
            "La Vega", // 551
            "Lenguazaque", // 552
            "Machetá", // 553
            "Madrid", // 554
            "Manta", // 555
            "Medina", // 556
            "Mosquera", // 557
            "Nariño", // 558
            "Nemocón", // 559
            "Nilo", // 560
            "Nimaima", // 561
            "Nocaima", // 562
            "Paime", // 563
            "Pandi", // 564
            "Paratebueno", // 565
            "Pasca", // 566
            "Pacho", // 567
            "Puerto Salgar", // 568
            "Pulí", // 569
            "Quebradanegra", // 570
            "Quetame", // 571
            "Quipile", // 572
            "Ricaurte", // 573
            "San Antonio de Tequendama", // 574
            "San Bernardo", // 575
            "San Cayetano", // 576
            "San Francisco", // 577
            "San Juan de Río Seco", // 578
            "San Juan de Rioseco", // 579
            "San Juan de Rioseco", // 580
            "San Juan de Rioseco", // 581
            "Sasaima", // 582
            "Sesquilé", // 583
            "Sibaté", // 584
            "Silvania", // 585
            "Simijaca", // 586
            "Soacha", // 587
            "Sopó", // 588
            "Subachoque", // 589
            "Suesca", // 590
            "Supatá", // 591
            "Susa", // 592
            "Sutatausa", // 593
            "Tabio", // 594
            "Tausa", // 595
            "Tena", // 596
            "Tenjo", // 597
            "Tibacuy", // 598
            "Tibirita", // 599
            "Tocaima", // 600
            "Tocancipá", // 601
            "Topaipí", // 602
            "Ubalá", // 603
            "Ubaque", // 604
            "Ubaté", // 605
            "Une", // 606
            "Útica", // 607
            "Vergara", // 608
            "Viani", // 609
            "Villagómez", // 610
            "Villapinzón", // 611
            "Villeta", // 612
            "Viotá", // 613
            "Yacopí", // 614
            "Zipacón", // 615
            "Zipaquirá" // 616
        ];
        
        // Total de municipios: 117
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>14]);
        }
    }
}
