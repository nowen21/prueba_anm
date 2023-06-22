<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaucaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Albania", // 382
            "Almaguer", // 383
            "Argelia", // 384
            "Balboa", // 385
            "Bolívar", // 386
            "Cajibío", // 387
            "Caloto", // 388
            "Caldono", // 389
            "Corinto", // 390
            "El Tambo", // 391
            "Florencia", // 392
            "Guachené", // 393
            "Guapi", // 394
            "Guapí", // 395
            "Inzá", // 396
            "Jambaló", // 397
            "La Vega", // 398
            "López de Micay", // 399
            "Mercaderes", // 400
            "Miranda", // 401
            "Morales", // 402
            "Padilla", // 403
            "Patía", // 404
            "Páez", // 405
            "Piendamó", // 406
            "Popayán", // 407
            "Puracé", // 408
            "Puerto Tejada", // 409
            "Río Blanco", // 410
            "Rosas", // 411
            "San José de Bocayá", // 412
            "San Sebastián", // 413
            "Santa Rosa", // 414
            "Silvia", // 415
            "Santander de Quilichao", // 416
            "Sotará", // 417
            "Suárez", // 418
            "Sucre", // 419
            "Timbiquí", // 420
            "Timbío", // 421
            "Toribío", // 422
            "Totoró", // 423
            "Villa Rica" // 424
        ];
        
        // Total de municipios: 43
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>10]);
        }
    }
}
