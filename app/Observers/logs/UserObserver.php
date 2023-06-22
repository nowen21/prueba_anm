<?php

namespace App\Observers\logs;

use App\Models\backend\administ\HUser;
use App\Models\User;

class UserObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['name'] = $modeloxx->name;
        $log['email'] = $modeloxx->email;
        $log['password'] = $modeloxx->password;
        $log['document'] = $modeloxx->document;
        $log['tipodocu_id'] = $modeloxx->tipodocu_id;
        $log['departam_id'] = $modeloxx->departam_id;
        $log['municipi_id'] = $modeloxx->municipi_id;
        $log['estado_id'] = $modeloxx->estado_id;
        // campos por defecto, no borrar.
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\User  $modeloxx
     * @return void
     */
    public function updated(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\Actaencu\User  $modeloxx
     * @return void
     */
    public function deleted(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\Actaencu\User  $modeloxx
     * @return void
     */
    public function restored(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\Actaencu\User  $modeloxx
     * @return void
     */
    public function forceDeleted(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }
}
