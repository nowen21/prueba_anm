<div>
    <x-template.template-component :pestania='$pestania'>
        <x-slot name="tituloxx">
            {{$titumodu}}
        </x-slot>
        <x-slot name="accionxx">
            <h3 class="me-2">
                {{$tituacci}}
            </h3>
        </x-slot>
        <x-slot name="botoadic">
            <a class="btn btn-info" href="{{route($volverxx)}}" title="Volver">
                <i class="fas fa-arrow-left"></i>
                {{__('Volver')}}
            </a>
        </x-slot>
        <x-slot name="mailboxx">
            <!-- para el datatable -->
        </x-slot>
        <x-slot name="searchxx">
            <!-- para el datatable -->
        </x-slot>
        <x-slot name="formular">
            @include($rutavist)
        </x-slot>
    </x-template.template-component>
</div>