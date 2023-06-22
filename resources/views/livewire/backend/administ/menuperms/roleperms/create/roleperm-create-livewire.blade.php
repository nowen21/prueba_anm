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
            <a class="btn btn-info btn-sm mr-1" href="{{route('rolexxxx-listaxxx')}}" title="{{__('Volver a Roles')}}">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a class="btn btn-info btn-sm" href="{{route('roleperm-listaxxx',$modeloid)}}" title="{{__('Volver a Permisos-Rol')}}">
                <i class="fas fa-undo"></i>
            </a>
        </x-slot>
        <x-slot name="mailboxx">
            <!-- para el datatable -->
        </x-slot>
        <x-slot name="searchxx">
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Permiso" wire:model="search">
                    <div class="input-group-append">
                        <div class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="formular">
            @include($rutavist)
        </x-slot>
    </x-template.template-component>
</div>