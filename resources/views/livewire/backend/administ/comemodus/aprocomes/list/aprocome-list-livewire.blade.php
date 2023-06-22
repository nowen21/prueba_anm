<div>
    @switch($cambvist)
    @case('datatabl')
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
            @can($permisox.'-crearxxx')
            <button class="btn btn-primary btn-sm  " wire:click="cambiarVista('create',0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Nuevo">
                <i class="fas fa-plus"></i>
            </button>
            @endcan
        </x-slot>
        <x-slot name="mailboxx">
            <!-- para el datatable -->
        </x-slot>
        <x-slot name="searchxx">
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Usuario" wire:model="search">
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
    @break
    @case('create')
    <livewire:backend.administ.comemodus.aprocomes.create.aprocome-create-livewire>
    </livewire:backend.administ.comemodus.aprocomes.create.aprocome-create-livewire>
    @break
    @case('view')
    <livewire:backend.administ.comemodus.aprocomes.view.aprocome-view-livewire :modeloid="$modeloid">
    </livewire:backend.administ.comemodus.aprocomes.view.aprocome-view-livewire>
    @break
    @endswitch
    @push('scriptsl')

    <script src="{{asset('js/sweetalert2_v11_7_11.js')}}"></script>
    <script>
        var alerta = 'deleteAlertJs<?= ucfirst($moduloxx) ?>Confirma';
        //  viene de la tabla 
        Livewire.on(alerta, modeloid => {
            Swal.fire({
                title: 'Está seguro/a?',
                html: '<div class="alert alert-danger" role="alert">Al eliminar este registro no se volverá a recuperar.</div>',
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminarlo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var deletexx = "deleteConfirma<?= ucfirst($moduloxx) ?>Js";
                    Livewire.emit(deletexx, modeloid);
                }
            })
        });
    </script>
    @endpush
</div>