<?php

namespace App\Http\Livewire\Frontend;


use App\Http\Livewire\GeneralTrait;
use App\Models\backend\administ\Departam;
use App\Models\backend\administ\HUser;
use App\Models\backend\administ\Municipi;
use App\Models\backend\administ\Tipodocu;
use App\Models\User;
use Livewire\Component;

class RegisterLivewire extends Component
{
    use GeneralTrait; ///UsuarioCreaTrait;
    private $formtitu = 'Usuario';
    public $moduloxx = 'usuario';
    public $name;
    public $modesele;
    public $tipodocu = ['' => 'Seleccione'];
    public $departam = ['' => 'Seleccione'];
    public $municipi = ['' => 'Seleccione'];
    public $email = null;
    public $document = null;
    public $tipodocu_id = '';
    public $estado_id = 3;
    public $departam_id = '';
    public $municipi_id = '';
    public $password;
    public $confirmPassword;



    protected function rules()
    {

        $rulesxxx = [
            'name' => ['required',],
            'email' => ['required', 'email', 'unique:users'],
            'document' => ['required', 'unique:users'],
            'tipodocu_id' => ['required'],
            'departam_id' => ['required'],
            'municipi_id' => ['required'],
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
        ];

        return  $rulesxxx;
    }

    protected function messages()
    {
        return [
            'name.required' => 'El nombre del ' . $this->moduloxx . ' es requerido',
            'name.unique' => 'El ' . $this->moduloxx . ' ya existe',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico no es válido',
            'email.unique' => 'El correo electrónico ya está en uso',
            'document.required' => 'El documento es requerido',
            'document.unique' => 'El documento ya está en uso',
            'tipodocu_id.required' => 'El tipo de documento es requerido',
            'departam_id.required' => 'El departamento es requerido',
            'municipi_id.required' => 'El municipio es requerido',
            'password.required' => 'La contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'confirmPassword.required' => 'El campo confirmar contraseña es obligatorio.',
            'confirmPassword.same' => 'La confirmación de contraseña debe coincidir con la contraseña.',

        ];
    }

    public function cargarTipodocus()
    {
        $consulta = Tipodocu::get(['nombre as optionxx', 'id as valuexxx']);
        $this->tipodocu = $this->getCombo($consulta);
    }

    public function cargarDepartams()
    {
        $consulta =  Departam::get(['departam as optionxx', 'id as valuexxx']);
        $this->departam = $this->getCombo($consulta);
    }

    public function cargarMunicipis()
    {
        $consulta = Municipi::where('departam_id', $this->departam_id)
            ->get(['municipi as optionxx', 'id as valuexxx']);
        $this->municipi = $this->getCombo($consulta);
    }

    public function updatedDepartamId()
    {
        $this->municipi_id = '';
        $this->cargarMunicipis();
    }

    public function mount()
    {
        $this->cargarTipodocus();
        $this->cargarDepartams();
        $this->cargarMunicipis();
    }

    function guardado($objetoxx): object
    {
        $objetoxx->name = $this->name;
        $objetoxx->email = $this->email;
        $objetoxx->document = $this->document;
        $objetoxx->tipodocu_id = $this->tipodocu_id;
        $objetoxx->departam_id = $this->departam_id;
        $objetoxx->municipi_id = $this->municipi_id;
        $objetoxx->estado_id = $this->estado_id;
        $objetoxx->password = $this->document;
        $objetoxx->user_edita_id = 1;
        $objetoxx->user_crea_id = 1;
        $objetoxx->save();
        return $objetoxx;
    }

    public function createUsuario()
    {
        $this->validate();

        $objetoxx  = new User();
        $this->modesele = $this->guardado($objetoxx);

        session()->flash('message', 'Su registro se ha realizado satisfactoriamente, tan pronto el administrador apruebe su registro puede ingresar la opcion: Registro Comercializadores Minineros ');
        $this->limparFormulario();
    }
    public function render()
    {
        return view('livewire.frontend.register-livewire');
    }

    /**
     * Restablece los valores del formulario a su estado inicial.
     * Esta función se encarga de limpiar las propiedades del formulario y asignarles valores predeterminados.
     */
    public function limparFormulario()
    {
        $this->name = ''; // Restablece la propiedad $name a una cadena vacía
        $this->email = null;
        $this->document = null;
        $this->tipodocu_id = '';
        $this->departam_id = '';
        $this->municipi_id = '';
        $this->modeloid = 0; // Restablece la propiedad $modeloid a null
        $this->modesele = null; // Restablece la propiedad $modesele a null
        $this->password = '';
        $this->confirmPassword = '';
    }
}
