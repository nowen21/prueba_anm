<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    private $parametr = [
        'clasnavb' => '', // Clase para la barra de navegación (valor inicial: cadena vacía)
        'clasbody' => ' ', // Clase para el cuerpo (valor inicial: espacio en blanco)
        'jstempla' => [], // Plantillas JS (valor inicial: arreglo vacío)
        'csstempl' => [], // Plantillas CSS (valor inicial: arreglo vacío)
        'navbarxx' => 'layouts.adminlte.navbars.navbar', // Ruta de la plantilla de la barra de navegación
        'breadcru' => [ // Configuración para las migas de pan
            'activexx' => '', // Clase activa para el elemento actual de las migas de pan
            'linkxxxx' => [ // Enlaces de las migas de pan
                ['tituloxx' => 'Home', 'activexx' => ''], // Título y clase activa para el enlace de inicio
            ],
        ],
        'template' => 'layouts.adminlte.template', // Ruta de la plantilla general
        'sectionx' => false // Indicador de sección (valor inicial: falso)
    ];
    
    public function welcome()
    {
        $this->parametr['breadcru']['activexx']='Dasboard V1';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Dasboard V1',"activexx" => "active"];

        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';

        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        //return view('welcome');
        return view('welcome', $this->parametr);
    }
    
    
}
