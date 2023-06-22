<?php

namespace App\Http\Livewire\Backend\Administ\Permroles;

use App\Http\Livewire\Datatable\Traits\DatatableTrait;
use App\Http\Livewire\GeneralTrait;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class PermroleLivewire extends Component
{
    use DatatableTrait, WithPagination, PermroleCreaTrait, GeneralTrait;
    public $tipovist = 'permisos';
    public $moduloxx = 'permrole';
    private $formtitu = 'Rol-Permisos';

    public $rutacomp = 'livewire.backend.administ'; // Ruta base del componente
    public $rutaform = 'livewire.backend.administ'; // Ruta del formulario
    public $rutamoda = 'livewire.backend.administ'; // Ruta del modal
    public $rutablax = 'livewire.backend.administ'; // Ruta de la tabla

    /**
     * Establece los listeners (escuchadores) del componente Livewire.
     * Los listeners permiten que el componente "escuche" eventos emitidos por otros componentes o partes del sistema.
     */
    protected $listeners = [
        'deleteConfirmaPermroleJs' => 'deleteConfirmaPermroleJs', // Listener para el evento 'deletePermroleComponent'
    ];


    /**
     * Restablece los valores del formulario a su estado inicial.
     * Esta función se encarga de limpiar las propiedades del formulario y asignarles valores predeterminados.
     */
    public function limparFormularioPermrole()
    {
        $this->name = ''; // Restablece la propiedad $name a una cadena vacía
        $this->guard_name = ''; // Restablece la propiedad $guard_name a una cadena vacía
        $this->modeloid = null; // Restablece la propiedad $modeloid a null
        $this->modesele = null; // Restablece la propiedad $modesele a null
    }

    public function agregaOpciones($tipovist)
    {
        $this->opciones = $this->getOpciones(['opciones' => $this->opciones, 'padrexxx' => $tipovist]);
    }

    /**
     * Cambia la vista del componente y realiza acciones asociadas.
     *
     * @param string $cambvist El nombre de la vista a cambiar.
     * @param int $modeloid El ID del modelo (opcional).
     * @param bool $tipovist El tipo de vista (opcional).
     * @return void
     */
    public function cambairVistaPermrole($cambvist, $modeloid, $tipovist)
    {
        // Limpia el formulario
        $this->limparFormularioPermrole();
       
        // Verifica si se proporciona un tipo de vista y lo asigna al componente
        if ($tipovist != false) {
            $this->tipovist = $tipovist;
            $this->agregaOpciones($tipovist);
        }

        // Busca el modelo si se proporciona un ID válido
        if ($modeloid > 0) {
            $this->buscarPermrole($modeloid);
        }
        

        // Configura las variables de vista y ruta
        $this->vistopci = $this->opciones[$this->tipovist];


        $this->cambvist = $cambvist;

        $this->vistaxxx = $this->cambvist . '-livewire';
        
        $this->rutacomp();
    }



    /**
     * Busca y asigna los valores correspondientes a las propiedades del formulario basados en el ID del modelo.
     *
     * @param int $modeloid El ID del modelo a buscar.
     */
    public function buscarPermrole($modeloid)
    {
        $this->modeloid = $modeloid; // Asigna el ID del modelo a la propiedad $modeloid
        $this->modesele = Role::findOrFail($modeloid); // Busca el modelo {{ $this->formtitu }} por su ID y lo asigna a la propiedad $modesele
        $this->name = $this->modesele->name; // Asigna el valor de la propiedad "name" del modelo a la propiedad $name
        $this->guard_name = $this->modesele->guard_name; // Asigna el valor de la propiedad "guard_name" del modelo a la propiedad $guard_name
    }

    /**
     * Inicializa el componente Livewire.
     *
     * @param string $componen El nombre del componente.
     */
    public function mount($componen)
    {
       
        $this->opciones['permisos'] = [ // Agrega una opción al array 'permisos' dentro de $this->opciones
            'permisos' => 'Listado de Permiso', // La clave 'permisos' tiene el valor 'Listado de Permiso'
            'function' => 'permisos' . ucfirst($this->moduloxx) // La clave 'function' tiene el valor 'permisos' seguido del nombre del módulo en formato UpperCamelCase
        ];
        $this->getMount($componen,$this->tipovist); // Llama al método getMount() con el parámetro $componen para realizar la inicialización del componente
    }



    /**
     * Confirma y elimina un rol utilizando los datos recibidos desde JavaScript.
     *
     * @param array $dataxxxx Arreglo que contiene los parámetros para confirmar y eliminar el rol.
     *                        Los parámetros incluidos son: 'modeloid', 'tipovist' y 'vienexxx'.
     */
    public function deleteConfirmaPermroleJs($dataxxxx)
    {
        // Extraer el ID del modelo del arreglo $dataxxxx
        $modeloid = $dataxxxx['modeloid'];

        // Extraer el tipo de vista del arreglo $dataxxxx
        $tipovist = $dataxxxx['tipovist'];

        // Extraer el valor de 'vienexxx' del arreglo $dataxxxx
        $vienexxx = $dataxxxx['vienexxx'];

        // Llamar al método deletePermrole pasando los parámetros extraídos
        $this->deletePermrole($modeloid, $tipovist, $vienexxx);
    }



    /**
     * Elimina un {{ $this->formtitu }}.
     */
    public function deletePermrole($modeloid, $tipovist, $vienexxx)
    {
        // Limpia el formulario
        $this->limparFormularioPermrole();
        // Muestra la confirmación cuando se hace clic en el botón "Eliminar" de la tabla

        if ($vienexxx == 0) {
            $this->emit('deleteAlertJs' . ucfirst($this->moduloxx) . 'Confirma', $modeloid);
        }
        // abrir la vista del eliminado
        elseif ($vienexxx == 1) {
            $this->cambairVistaPermrole('delete', $modeloid, $tipovist);
        }
        // Muestra la reconfirmación cuando se hace clic en el botón "Eliminar" del formulario
        elseif ($vienexxx == 2) {
            $this->emit('deleteAlertJs' . ucfirst($this->moduloxx) . 'ReConfirma', $modeloid);
        }
        // se realiza el eliminado del {{ $this->formtitu }}
        else {
            $modeloid = Role::findOrFail($modeloid); // Busca el $this->formtitu correspondiente al 
            $modeloid->delete(); // Elimina el $this->formtitu
            $this->rutacomp(); // Actualiza la ruta del componente
            session()->flash('message', $this->formtitu . ' eliminado con éxito.'); // Muestra un mensaje de éxito

            $this->cambairVistaPermrole('datatabl', 0, $tipovist);
        }
    }

    /**
     * Edita un {{ $this->formtitu }} existente.
     */
    public function editPermrole()
    {
        $rol = Role::find($this->modeloid); // Busca el {{ $this->formtitu }} por su ID
        if ($rol) {
            $this->validate(); // Valida los datos del formulario
            $rol->update(['name' => $this->name, 'guard_name' => $this->guard_name]); // Actualiza los atributos del {{ $this->formtitu }}
            $this->modeloid = $rol->id; // Actualiza el ID del {{ $this->formtitu }} en el componente
            $this->name = $rol->name; // Actualiza el nombre del {{ $this->formtitu }} en el componente
            $this->guard_name = $rol->guard_name; // Actualiza el guard name del {{ $this->formtitu }} en el componente
            session()->flash('message', $this->formtitu . ' Editado con éxito.'); // Muestra un mensaje de éxito
        }
    }


    /**
     * Obtiene los datos de los {{ $this->formtitu }}s y los prepara para su visualización en la interfaz de usuario.
     */
    public function dataPermrole()
    {
        $this->data = Role::query()
            ->where('name', 'like', '%' . $this->search . '%') // Filtra los {{ $this->formtitu }}s por el nombre
            ->orderBy($this->sortField, $this->sortDirection) // Ordena los {{ $this->formtitu }}s según los campos de ordenación
            ->paginate(5); // Pagina los resultados
        foreach ($this->data as $row) {
            $row->selected = ($row->id == $this->modeloid); // Agrega la propiedad 'selected' para indicar el rol seleccionado
        }
    }

    /**
     * Renderiza el componente y muestra los datos en la vista correspondiente.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->dataPermrole(); // Obtiene los datos de los {{ $this->formtitu }}s
        return view($this->rutaview, ['data' => $this->data]); // Retorna la vista con los datos
    }
}
