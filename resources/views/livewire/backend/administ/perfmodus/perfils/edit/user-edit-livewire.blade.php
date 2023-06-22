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