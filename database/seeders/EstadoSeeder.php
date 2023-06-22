<?php

namespace Database\Seeders;

use App\Models\backend\administ\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    public function run()
    {
        $estadoTypes = [
            'Activación', //1
            'Inactivación', // 2
            'Inscripción', // 3
            'Actualización', // 4
            'Suspensión', // 5
            'Pendiente', // 6 explotación
            'Aprobado', // 7 explotación
            'Devolución', // 8
            'Venta' // 9

        ];
        foreach ($estadoTypes as $type) {
            Estado::create([
                'estado' => $type,
            ]);
        }
    }
}
