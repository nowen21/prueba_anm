<?php

namespace Database\Seeders;

use App\Models\backend\administ\Municipi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoyacaMunicipiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $municipios = [
            "Tunja", // 200
            "Almeida", // 201
            "Aquitania", // 202
            "Arcabuco", // 203
            "Belén", // 204
            "Berbeo", // 205
            "Betéitiva", // 206
            "Boavita", // 207
            "Boyacá", // 208
            "Briceño", // 209
            "Buena Vista", // 210
            "Busbanzá", // 211
            "Caldas", // 212
            "Campohermoso", // 213
            "Cerinza", // 214
            "Chinavita", // 215
            "Chiquinquirá", // 216
            "Chíquiza", // 217
            "Chiscas", // 218
            "Chita", // 219
            "Chitaraque", // 220
            "Chivatá", // 221
            "Chivor", // 222
            "Ciénega", // 223
            "Cómbita", // 224
            "Coper", // 225
            "Corrales", // 226
            "Covarachía", // 227
            "Cubará", // 228
            "Cucaita", // 229
            "Cuítiva", // 230
            "Duitama", // 231
            "El Cocuy", // 232
            "El Espino", // 233
            "Firavitoba", // 234
            "Floresta", // 235
            "Gachantivá", // 236
            "Gámeza", // 237
            "Garagoa", // 238
            "Guacamayas", // 239
            "Guateque", // 240
            "Guayatá", // 241
            "Güicán", // 242
            "Iza", // 243
            "Jenesano", // 244
            "Jericó", // 245
            "La Capilla", // 246
            "La Uvita", // 247
            "La Victoria", // 248
            "Labranzagrande", // 249
            "Macanal", // 250
            "Maripí", // 251
            "Miraflores", // 252
            "Mongua", // 253
            "Monguí", // 254
            "Moniquirá", // 255
            "Motavita", // 256
            "Muzo", // 257
            "Nobsa", // 258
            "Nuevo Colón", // 259
            "Oicatá", // 260
            "Otanche", // 261
            "Pachavita", // 262
            "Páez", // 263
            "Paipa", // 264
            "Pajarito", // 265
            "Panqueba", // 266
            "Pauna", // 267
            "Paya", // 268
            "Paz de Río", // 269
            "Pesca", // 270
            "Pisba", // 271
            "Puerto Boyacá", // 272
            "Quípama", // 273
            "Ramiriquí", // 274
            "Ráquira", // 275
            "Rondón", // 276
            "Saboyá", // 277
            "Sáchica", // 278
            "Samacá", // 279
            "San Eduardo", // 280
            "San José de Pare", // 281
            "San Luis de Gaceno", // 282
            "San Mateo", // 283
            "San Miguel de Sema", // 284
            "San Pablo de Borbur", // 285
            "Santa María", // 286
            "Santa Rosa de Viterbo", // 287
            "Santa Sofía", // 288
            "Santana", // 289
            "Sativanorte", // 290
            "Sativasur", // 291
            "Siachoque", // 292
            "Soatá", // 293
            "Socotá", // 294
            "Socha", // 295
            "Sogamoso", // 296
            "Somondoco", // 297
            "Sora", // 298
            "Soracá", // 299
            "Sotaquirá", // 300
            "Susacón", // 301
            "Sutamarchán", // 302
            "Sutatenza", // 303
            "Tasco", // 304
            "Tenza", // 305
            "Tibaná", // 306
            "Tibasosa", // 307
            "Tinjacá", // 308
            "Tipacoque", // 309
            "Toca", // 310
            "Togüí", // 311
            "Tópaga", // 312
            "Tota", // 313
            "Tununguá", // 314
            "Turmequé", // 315
            "Tuta", // 316
            "Tutazá", // 317
            "Úmbita", // 318
            "Ventaquemada", // 319
            "Villa de Leyva", // 320
            "Viracachá", // 321
            "Zetaquira" // 322
        ];
        
        // Total de municipios: 123
        
        foreach ($municipios as $key => $value) {
            Municipi::create(['municipi'=>$value,'departam_id'=>6]);
        }
    }
}
