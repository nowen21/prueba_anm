<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class ModelHasRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i=1;
        $user=User::find($i);
        $user->assignRole(Role::find($i++)->name);// 1

        $user=User::find($i);
        $user->assignRole(Role::find($i++)->name);// 2

        $user=User::find($i);
        $user->assignRole(Role::find($i++)->name);// 3

        $user=User::find($i);
        $user->assignRole(Role::find($i++)->name);// 4

        $user=User::find($i);
        $user->assignRole(Role::find($i++)->name);// 5

    }
}
