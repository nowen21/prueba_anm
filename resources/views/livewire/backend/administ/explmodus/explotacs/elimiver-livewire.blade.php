<div class="card-body">
    <div class="form-group">
        <div class="row">
            <div class="col-6">
                {{ Form::label('tipomine_id', 'Tipo de mineral', ['class' => '']) }}
                <div class="form-control">
                    {{ $tipomine_id}}
                </div>
            </div>
            <div class="col-6">
                {{ Form::label('cantidad', 'Cantidad', ['class' => '']) }}
                <div class="form-control">
                    {{ $cantidad}}
                </div>
            </div>

        </div>
    </div>


</div>
<x-template.btns-acciones-component :permisox="$permisox" :moduloxx="$moduloxx" tipobtnx="1">

</x-template.btns-acciones-component>