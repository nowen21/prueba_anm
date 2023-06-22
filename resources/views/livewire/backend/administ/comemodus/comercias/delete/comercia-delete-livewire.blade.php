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
            <a class="btn btn-info" href="{{route($permisox.'-listaxxx')}}" title="Volver">
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
    @push('scriptsl')
    <script src="{{asset('js/sweetalert2_v11_7_11.js')}}"></script>
    <script>
        var alerta = 'deleteAlertJs<?= ucfirst($moduloxx) ?>ReConfirma';
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
                    var deletexx = "deleteReConfirma<?= ucfirst($moduloxx) ?>Js";
                    Livewire.emit(deletexx);
                }
            })
        });
    </script>
    @endpush
</div>