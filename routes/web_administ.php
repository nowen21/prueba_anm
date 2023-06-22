<?php

use App\Http\Livewire\Backend\Administ\Comemodus\Aprocomes\Edit\AprocomeEditLivewire;
use App\Http\Livewire\Backend\Administ\Comemodus\Aprocomes\List\AprocomeListLivewire;
use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\Delete\ComerciaDeleteLivewire;
use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\Edit\ComerciaEditLivewire;
use App\Http\Livewire\Backend\Administ\Comemodus\Comercias\List\ComerciaListLivewire;
use App\Http\Livewire\Backend\Administ\Explmodus\Aproexpls\Edit\AproexplEditLivewire;
use App\Http\Livewire\Backend\Administ\Explmodus\Aproexpls\List\AproexplListLivewire;
use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\Delete\ExplotacDeleteLivewire;
use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\Edit\ExplotacEditLivewire;
use App\Http\Livewire\Backend\Administ\Explmodus\Explotacs\List\ExplotacListLivewire;
use App\Http\Livewire\Backend\Administ\Menuperms\Permisos\List\PermisoListLivewire;
use App\Http\Livewire\Backend\Administ\Menuperms\Roleperms\List\RolepermListLivewire;
use App\Http\Livewire\Backend\Administ\Menuperms\Roles\Delete\RoleDeleteLivewire;
use App\Http\Livewire\Backend\Administ\Menuperms\Roles\Edit\RoleEditLivewire;
use App\Http\Livewire\Backend\Administ\Menuperms\Roles\List\RoleListLivewire;
use App\Http\Livewire\Backend\Administ\Perfmodus\Perfils\Edit\PerfilEditLivewire;
use App\Http\Livewire\Backend\Administ\Usuamodus\Aprobacis\Edit\AprobaciEditLivewire;
use App\Http\Livewire\Backend\Administ\Usuamodus\Aprobacis\List\AprobaciListLivewire;
use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\Delete\UserDeleteLivewire;
use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\Edit\UserEditLivewire;
use App\Http\Livewire\Backend\Administ\Usuamodus\Usuarios\List\UserListLivewire;
use App\Http\Livewire\Backend\Administ\Usuamodus\Usuaroles\List\UsuaroleListLivewire;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function () {

    $routexxx = 'usuariox';
    Route::middleware(['permission:' . $routexxx . '-moduloxx|'])->group(function () use ($routexxx) {
        // crud de usuarios
        $rutaxxxx = 'user';
        Route::get($rutaxxxx . 's-list', UserListLivewire::class)->name($routexxx . '-listaxxx');
        Route::get($rutaxxxx . '-delete/{id}', UserDeleteLivewire::class)->name($routexxx . '-elminact');
        Route::get($rutaxxxx . '-edit/{id}', UserEditLivewire::class)->name($routexxx . '-actualiz');

        // crud de roles-usuario
        $routexxx = 'usuarole';
        $rutaxxxx = 'usuario-role';
        Route::get($rutaxxxx . 's-list/{id}', UsuaroleListLivewire::class)->name($routexxx . '-listaxxx');

        $routexxx = 'aprobaci';
        $rutaxxxx = 'aprobaci';
        Route::get($rutaxxxx . 's-list', AprobaciListLivewire::class)->name($routexxx . '-listaxxx');
        Route::get($rutaxxxx . '-edit/{id}', AprobaciEditLivewire::class)->name($routexxx . '-actualiz');
    });

    $routexxx = 'rolexxxx';
    Route::middleware(['permission:' . $routexxx . '-moduloxx|'])->group(function () use ($routexxx) {
        // crud de roles
        $rutaxxxx = 'role';
        Route::get($rutaxxxx . 's-list', RoleListLivewire::class)->name($routexxx . '-listaxxx');
        Route::get($rutaxxxx . '-delete/{id}', RoleDeleteLivewire::class)->name($routexxx . '-elminact');
        Route::get($rutaxxxx . '-edit/{id}', RoleEditLivewire::class)->name($routexxx . '-actualiz');

        // crud de roles-usuario
        $routexxx = 'roleperm';
        $rutaxxxx = 'role-permiso';
        Route::get($rutaxxxx . 's-list/{id}', RolepermListLivewire::class)->name($routexxx . '-listaxxx');

        // crud de permisos
        $routexxx = 'permisox';
        $rutaxxxx = 'permiso';
        Route::get($rutaxxxx . 's-list', PermisoListLivewire::class)->name($routexxx . '-listaxxx');
    });

    $routexxx = 'perfilxx';
    Route::middleware(['permission:' . $routexxx . '-actualiz|'])->group(function () use ($routexxx) {
        // crud de roles
        $rutaxxxx = 'perfil';
        Route::get($rutaxxxx . '-edit', PerfilEditLivewire::class)->name($routexxx . '-actualiz');
    });


    $routexxx = 'explotac';
    Route::middleware(['permission:' . $routexxx . '-moduloxx|'])->group(function () use ($routexxx) {
         // crud de roles
         $rutaxxxx = 'explotacion';
         Route::get($rutaxxxx . 's-list', ExplotacListLivewire::class)->name($routexxx . '-listaxxx');
         Route::get($rutaxxxx . '-delete/{id}', ExplotacDeleteLivewire::class)->name($routexxx . '-elminact');
         Route::get($rutaxxxx . '-edit/{id}', ExplotacEditLivewire::class)->name($routexxx . '-actualiz');
 
         $routexxx = 'aproexpl';
         $rutaxxxx = 'apro-explotacion';
         Route::get($rutaxxxx . 's-list', AproexplListLivewire::class)->name($routexxx . '-listaxxx');
         Route::get($rutaxxxx . '-edit/{id}', AproexplEditLivewire::class)->name($routexxx . '-actualiz');
    });

    $routexxx = 'comercia';
    Route::middleware(['permission:' . $routexxx . '-moduloxx|'])->group(function () use ($routexxx) {
         // crud de roles
         $rutaxxxx = 'comercia';
         Route::get($rutaxxxx . 's-list', ComerciaListLivewire::class)->name($routexxx . '-listaxxx');
         Route::get($rutaxxxx . '-delete/{id}', ComerciaDeleteLivewire::class)->name($routexxx . '-elminact');
         Route::get($rutaxxxx . '-edit/{id}', ComerciaEditLivewire::class)->name($routexxx . '-actualiz');
 
         $routexxx = 'aprocome';
         $rutaxxxx = 'apro-comercia';
         Route::get($rutaxxxx . 's-list', AprocomeListLivewire::class)->name($routexxx . '-listaxxx');
         Route::get($rutaxxxx . '-edit/{id}', AprocomeEditLivewire::class)->name($routexxx . '-actualiz');


    });

});
