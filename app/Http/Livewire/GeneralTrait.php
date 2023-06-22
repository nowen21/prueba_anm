<?php

namespace App\Http\Livewire;


/**
 * Trait GeneralTrait
 *
 * Este trait proporciona funcionalidades generales utilizadas por varias clases.
 */
trait GeneralTrait
{
    public $permisox='';
    public $vercrear=true;
    public $vercheck=true;
    public $vistopci = []; // Opciones de vista disponibles
    public $vistaxxx = 'datatabl-livewire'; // Vista actual del componente
    private $data; // Datos obtenidos del modelo

    public $opciones; // Opciones disponibles para el componente

    public $showViewModal = false; // Indicador de visibilidad del modal de visualización
    public $showDeleteModal = false; // Indicador de visibilidad del modal de eliminación

    public $modeloid = 0; // ID del modelo seleccionado
    public $modesele = null; // Modo de selección actual

    
    public $rutacarp = ''; // Carpeta de la ruta
    public $rutaview = ''; // Ruta de la vista

    public $cambvist = 'datatabl'; // Vista a la que cambiar



    /**
     * Crea una opción y la agrega al array de opciones.
     *
     * @param string $clavexxx La clave de la opción.
     * @param string $valorxxx El valor de la opción.
     * @param bool $funcionx Indica si se debe asignar una función a la opción.
     * @param array $opciones El array de opciones al que se agregará la opción.
     * @param string $padrexxx El padre de la opción.
     * @return array El array de opciones actualizado.
     */
    public function creaOpcion($clavexxx, $valorxxx, $funcionx, $opciones, $padrexxx)
    {
        // Si $funcionx es verdadero, se asigna una función a la opción
        if ($funcionx) {
            $funcionx = $clavexxx . ucfirst($this->moduloxx);
        }

        // Crea la opción y la agrega al array de opciones
        $opciones[$padrexxx][$clavexxx] = [
            $clavexxx => $valorxxx . ' ' . $this->formtitu,
            'function' => $funcionx
        ];

        return $opciones; // Devuelve el array de opciones actualizado
    }

    public function getOpcion($copiarxx,$accionxx,$opcionxx)
    {
        $respuest='';
        if (!isset($this->vistopci[$accionxx])) { 
            $copilist= $this->vistopci[$copiarxx];
            $respuest=$copilist[$copiarxx];
        }else {
            $respuest= $this->vistopci[$accionxx][$opcionxx];
        }
        return $respuest;
    }

    /**
     * Obtiene un array de opciones.
     *
     * @return array
     */
    public function getOpciones($dataxxxx)
    {
        $opciones = $dataxxxx['opciones']; // Crea un array vacío para almacenar las opciones

        // Crea y agrega la opción "Crear" al array de opciones
        $opciones = $this->creaOpcion('create', 'Nuevo', true, $opciones, $dataxxxx['padrexxx']);

        // Crea y agrega la opción "Editar" al array de opciones
        $opciones = $this->creaOpcion('edit', 'Editar', true, $opciones, $dataxxxx['padrexxx']);

        // Crea y agrega la opción "Ver" al array de opciones
        $opciones = $this->creaOpcion('view', 'Ver', false, $opciones, $dataxxxx['padrexxx']);

        // Crea y agrega la opción "Eliminar" al array de opciones
        $opciones = $this->creaOpcion('delete', 'Eliminar', true, $opciones, $dataxxxx['padrexxx']);

        // Crea y agrega la opción "Listado de " al array de opciones
        $opciones = $this->creaOpcion('datatabl', 'Listado de ', false, $opciones, $dataxxxx['padrexxx']);

        return $opciones; // Devuelve el array de opciones
    }

    /**
     * Actualiza la página actual a 1 cuando se modifica el valor de la propiedad "search".
     * Esto asegura que los resultados de la búsqueda se muestren desde el inicio de la paginación.
     */
    public function updatingSearch()
    {
        $this->resetPage();
    }

    /**
     * Construye una ruta compuesta utilizando propiedades del componente y la guarda en $this->rutaform.
     * Retorna la ruta base.
     *
     * @return string La ruta base.
     */
    public function rutacomp()
    {
        $rutacomp = $this->rutacomp . '.' . $this->rutacarp . '.'; // Concatena las propiedades rutacomp y rutacarp con un punto entre ellas
        $this->rutaform = $rutacomp . $this->vistaxxx; // Construye la ruta completa concatenando rutacomp, rutacarp y vistaxxx
        return $rutacomp; // Retorna la ruta base
    }

    /**
     * Configura las propiedades y rutas del componente al montarlo.
     *
     * @param string $componen El parámetro recibido al montar el componente.
     */
    public function getMount($tipovist)
    {
        $this->rutacarp = $this->moduloxx . 's'; // Establece la propiedad $rutacarp concatenando $moduloxx con 's'
        $rutacomp = $this->rutacomp(); // Obtiene la ruta base utilizando el método rutacomp()
        $this->rutamoda = $this->rutamoda . '.modal-livewire'; // Concatena '.modal-livewire' a la propiedad $rutamoda
        $this->rutaview = $rutacomp . $this->moduloxx . '-livewire'; // Construye la ruta de vista concatenando $rutacomp, $moduloxx y '-livewire'
        $this->opciones = $this->getOpciones(['opciones' => [], 'padrexxx' => $tipovist]); // Obtiene las opciones utilizando el método getOpciones() con un array vacío como argumento
        $this->vistopci = $this->opciones[$tipovist]; // Establece la propiedad $vistopci utilizando la opción correspondiente según $tipovist
        $this->rutablax = $rutacomp . '.tabla'; // Construye la ruta de la tabla concatenando $rutacomp y '.tabla'
        $this->rutaform = $rutacomp . $this->vistaxxx; // Construye la ruta del formulario concatenando $rutacomp y $vistaxxx
    }


    /**
     * Cambia la vista del componente de acuerdo al tipo de vista y modelo seleccionado.
     *
     * @param string $cambvist - Tipo de vista a cambiar.
     * @param int $modeloid - ID del modelo seleccionado.
     * @param string $tipovist - Tipo de vista a asignar.
     * @return void
     */
    public function cambiarVista($cambvist, $modeloid, $tipovist)
    {
        // Limpia el formulario antes de cambiar la vista
        $this->limparFormulario();

        // Variable para almacenar el complemento de la vista
        $complemen = '';

        // Verifica si se ha especificado un tipo de vista
        if ($tipovist != false) {
            // Verifica si se debe actualizar el modelo seleccionado
            if ($cambvist) {
                $this->modeloid = $modeloid;
            }
            // Asigna el tipo de vista y el título del formulario
            $this->tipovist = $tipovist;
            $this->formtitu = 'Rol-Permisos ';

            // Agrega opciones adicionales según el tipo de vista
            $this->agregaOpciones($tipovist);

            // Agrega el complemento a la variable
            $complemen = 'permroles.';
        } else {
            // Asigna el tipo de vista principal
            $this->tipovist = 'principa';
        }

        // Verifica si se ha seleccionado un modelo válido y busca el rol correspondiente
        if ($modeloid > 0) {
            $this->buscar($modeloid);
        }

        // Asigna la opción de vista actual y el tipo de vista a cambiar
        $this->vistopci = $this->opciones[$this->tipovist];
        $this->cambvist = $cambvist;

        // Asigna el nombre de la vista completa
        $this->vistaxxx = $complemen . $this->cambvist . '-livewire';

        // Actualiza la ruta del componente
        $this->rutacomp();
    }

    public function getCombo($dataxxxxx)
    {
        $comboxxxx=[''=>'Seleccione'];
        foreach ($dataxxxxx as $key => $value) {
            $comboxxxx[$value->valuexxx]=$value->optionxx;
        }
        return $comboxxxx;
    }

    
}
