<?php

namespace App\Rules;

use App\Models\backend\administ\Estado;
use App\Models\backend\administ\HUser;
use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UserInscripcionRule implements ValidationRule
{

    function valida($campoxxx, $value): array
    {
        // validar si hay mas de una solicitud con el mismo numero de documento
        $respuest = false;
        $mensajex = '';
        $user = User::where($campoxxx, $value)
            ->first(); // Obtener el usuario por su email en la tabla 'users'

        if ($user) {
            $estado = Estado::where('id', $user->estado_id)->first(['estado']); // Obtener el nombre del estado del usuario
            $respuest = true;
            $mensajex = "No se puede crear nuevo registro para los siguientes datos email:$user->email y documento: $user->document , ya que se encuentra en uso y el estado es: $estado->estado. Por favor contáctese con el administrador de sistema";
            // Mensaje de error indicando el estado del usuario
        }
        return ['respuest' => $respuest, 'mensajex' => $mensajex];
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $respuest = $this->valida($attribute, $value);
        if ($respuest['respuest']) {
            $fail($respuest['mensajex']);
        }
    }
}
