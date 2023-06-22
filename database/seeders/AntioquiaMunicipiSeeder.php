<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AntioquiaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Abejorral", // 3
            "Abriaquí", // 4
            "Alejandría", // 5
            "Amagá", // 6
            "Amalfi", // 7
            "Andes", // 8
            "Angelópolis", // 9
            "Angostura", // 10
            "Anorí", // 11
            "Anzá", // 12
            "Apartadó", // 13
            "Arboletes", // 14
            "Argelia", // 15
            "Armenia", // 16
            "Barbosa", // 17
            "Bello", // 18
            "Belmira", // 19
            "Betania", // 20
            "Betulia", // 21
            "Briceño", // 22
            "Buriticá", // 23
            "Cáceres", // 24
            "Caicedo", // 25
            "Caldas", // 26
            "Campamento", // 27
            "Cañasgordas", // 28
            "Caracolí", // 29
            "Caramanta", // 30
            "Carepa", // 31
            "Carolina del Príncipe", // 32
            "Caucasia", // 33
            "Chigorodó", // 34
            "Cisneros", // 35
            "Ciudad Bolívar", // 36
            "Cocorná", // 37
            "Concepción", // 38
            "Concordia", // 39
            "Copacabana", // 40
            "Dabeiba", // 41
            "Donmatías", // 42
            "Ebéjico", // 43
            "El Bagre", // 44
            "El Carmen de Viboral", // 45
            "El Peñol", // 46
            "El Retiro", // 47
            "El Santuario", // 48
            "Entrerríos", // 49
            "Envigado", // 50
            "Fredonia", // 51
            "Frontino", // 52
            "Giraldo", // 53
            "Girardota", // 54
            "Gómez Plata", // 55
            "Granada", // 56
            "Guadalupe", // 57
            "Guarne", // 58
            "Guatapé", // 59
            "Heliconia", // 60
            "Hispania", // 61
            "Itagüí", // 62
            "Ituango", // 63
            "Jardín", // 64
            "Jericó", // 65
            "La Ceja", // 66
            "La Estrella", // 67
            "La Pintada", // 68
            "La Unión", // 69
            "Liborina", // 70
            "Maceo", // 71
            "Marinilla", // 72
            "Montebello", // 73
            "Murindó", // 74
            "Mutatá", // 75
            "Nariño", // 76
            "Necoclí", // 77
            "Olaya", // 78
            "Peque", // 79
            "Pueblorrico", // 80
            "Puerto Berrío", // 81
            "Puerto Nare", // 82
            "Puerto Triunfo", // 83
            "Remedios", // 84
            "Rionegro", // 85
            "Sabanalarga", // 86
            "Sabaneta", // 87
            "Salgar", // 88
            "San Andrés de Cuerquía", // 89
            "San Carlos", // 90
            "San Francisco", // 91
            "San Jerónimo", // 92
            "San José de la Montaña", // 93
            "San Juan de Urabá", // 94
            "San Luis", // 95
            "San Pedro de los Milagros", // 96
            "San Pedro de Urabá", // 97
            "San Rafael", // 98
            "San Roque", // 99
            "San Vicente", // 100
            "Santa Bárbara", // 101
            "Santa Fé de Antioquia", // 102
            "Santa Rosa de Osos", // 103
            "Santo Domingo", // 104
            "Segovia", // 105
            "Sonsón", // 106
            "Sopetrán", // 107
            "Támesis", // 108
            "Tarazá", // 109
            "Tarso", // 110
            "Titiribí", // 111
            "Toledo", // 112
            "Turbo", // 113
            "Uramita", // 114
            "Urrao", // 115
            "Valdivia", // 116
            "Valparaíso", // 117
            "Vegachí", // 118
            "Venecia", // 119
            "Vigía del Fuerte", // 120
            "Yalí", // 121
            "Yarumal", // 122
            "Yolombó", // 123
            "Yondó", // 124
            "Zaragoza" // 125
        ];

        // Total de municipios: 123
        
        $municipios = []; // despues de la coma numerar
 // Total de municipios: 123
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>2]);
        }
    }
}
