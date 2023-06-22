<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(EstadoSeeder::class);
        $this->call(DepartamSeeder::class);
        $this->call(AmazonasMunicipiSeeder::class); // 1
        $this->call(AntioquiaMunicipiSeeder::class); // 2
        $this->call(AraucaMunicipiSeeder::class); // 3
        $this->call(AtlanticoMunicipiSeeder::class); // 4
        $this->call(BolivarMunicipiSeeder::class); // 5
        $this->call(BoyacaMunicipiSeeder::class); // 6
        $this->call(CaldasMunicipiSeeder::class); // 7
        $this->call(CaquetaMunicipiSeeder::class); // 8
        $this->call(CasanareMunicipiSeeder::class); // 9
        $this->call(CaucaMunicipiSeeder::class); // 10
        $this->call(CesarMunicipiSeeder::class); // 11
        $this->call(ChocoMunicipiSeeder::class); // 12
        $this->call(CordobaMunicipiSeeder::class); // 13
        $this->call(CundinamarcaMunicipiSeeder::class); // 14
        $this->call(GuainiaMunicipiSeeder::class); // 15
        $this->call(GuajiraMunicipiSeeder::class); // 16
        $this->call(GuaviareMunicipiSeeder::class); // 17
        $this->call(HuilaMunicipiSeeder::class); // 18
        $this->call(MagdalenaMunicipiSeeder::class); // 19
        $this->call(MetaMunicipiSeeder::class); // 20
        $this->call(NarinioMunicipiSeeder::class); // 21
        $this->call(NSantanderMunicipiSeeder::class); // 22
        $this->call(PutumayoMunicipiSeeder::class); // 23
        $this->call(QuindioMunicipiSeeder::class); // 24
        $this->call(RisaraldaMunicipiSeeder::class); // 25
        $this->call(SantanderMunicipiSeeder::class); // 26
        $this->call(SAProvidenciaMunicipiSeeder::class); // 27
        $this->call(SucreMunicipiSeeder::class); // 28
        $this->call(TolimaMunicipiSeeder::class); // 29
        $this->call(VaupesMunicipiSeeder::class); // 30
        $this->call(VCaucaMunicipiSeeder::class); // 31
        $this->call(VichadaMunicipiSeeder::class); // 32
        
        $this->call(RoleSeeder::class);
        $this->call(PermisoSeeder::class);

        $this->call(TipodocuSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ModelHasRolSeeder::class);
        $this->call(TipomineSeeder::class);

    }
}
