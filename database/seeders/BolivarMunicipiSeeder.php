<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BolivarMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            "Cartagena", // 154
            "Achí", // 155
            "Altos del Rosario", // 156
            "Arenal", // 157
            "Arjona", // 158
            "Arroyohondo", // 159
            "Barranco de Loba", // 160
            "Calamar", // 161
            "Cantagallo", // 162
            "Cicuco", // 163
            "Córdoba", // 164
            "Clemencia", // 165
            "El Carmen de Bolívar", // 166
            "El Guamo", // 167
            "El Peñón", // 168
            "Hatillo de Loba", // 169
            "Magangué", // 170
            "Mahates", // 171
            "Margarita", // 172
            "María la Baja", // 173
            "Montecristo", // 174
            "Mompós", // 175
            "Morales", // 176
            "Norosí", // 177
            "Pinillos", // 178
            "Regidor", // 179
            "Río Viejo", // 180
            "San Cristóbal", // 181
            "San Estanislao", // 182
            "San Fernando", // 183
            "San Jacinto", // 184
            "San Jacinto del Cauca", // 185
            "San Juan Nepomuceno", // 186
            "San Martín de Loba", // 187
            "San Pablo", // 188
            "Santa Catalina", // 189
            "Santa Rosa", // 190
            "Santa Rosa del Sur", // 191
            "Simití", // 192
            "Soplaviento", // 193
            "Talaigua Nuevo", // 194
            "Tiquisio", // 195
            "Turbaco", // 196
            "Turbaná", // 197
            "Villanueva", // 198
            "Zambrano" // 199
        ];
        
        // Total de municipios: 46
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>5]);
        }
    }
}
