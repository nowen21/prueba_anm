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
            <a class="btn btn-info" href="{{route('usuariox-listaxxx')}}" title="Volver">
                <i class="fas fa-arrow-left"></i>
                {{__('Volver a Usuarios')}}
            </a>
            <a class="btn btn-info" href="{{route('usuarole-listaxxx',$modeloid)}}" title="Volver">
                <i class="fas fa-arrow-left"></i>
                {{__('Volver a Roles-Usuario')}}
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