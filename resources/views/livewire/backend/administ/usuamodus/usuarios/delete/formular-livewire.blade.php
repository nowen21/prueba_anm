<div class="card-body">
    <div class="form-group">
        <div class="row">
            <div class="col-6">
                {{ Form::label('name', 'Nombre del Usuario', ['class' => '']) }}
                <div id="name" class="form-control">
                    {{ $name }}
                </div>
            </div>
            <div class="col-6">
                {{ Form::label('email', 'Email', ['class' => '']) }}
                <div id="email" class="form-control">
                    {{ $email }}
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-6">
                {{ Form::label('document', 'Documento', ['class' => '']) }}
                <div id="document" class="form-control">
                    {{ $document }}
                </div>
            </div>
            <div class="col-6">
                {{ Form::label('tipodocu_id', 'Tipo de Documento', ['class' => '']) }}
                <div id="tipodocu_id" class="form-control">
                    {{ $tipodocu_id }}
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-6">
                {{ Form::label('departam_id', 'Departamento', ['class' => '']) }}
                <div id="departam_id" class="form-control">
                    {{ $departam_id }}
                </div>
            </div>
            <div class="col-6">
                {{ Form::label('municipi_id', 'Municipio', ['class' => '']) }}
                <div  class="form-control">
                    {{ $municipi_id }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-end">
    <a class="btn btn-info" href="{{route($permisox.'-listaxxx')}}" title="Volver">
        <i class="fas fa-arrow-left"></i>
       {{__('Volver')}} 
    </a>
    <button type="button" wire:click="$emit('deleteAlertJs<?= ucfirst($moduloxx) ?>ReConfirma')" class="btn btn-danger">
        <i class="fas fa-times"></i>
        {{__('Eliminar')}}
    </button>
</div>