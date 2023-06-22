<form wire:submit.prevent="edit{{ucfirst($moduloxx)}}">
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('name', 'Nombre del Usuario', ['class' => '']) }}
                    <div class="form-control">
                        {{ $name }}
                    </div>
                </div>
                <div class="col-6">
                    {{ Form::label('email', 'Email', ['class' => '']) }}
                    <div class="form-control">
                        {{ $email }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    {{ Form::label('document', 'Documento', ['class' => '']) }}
                    <div class="form-control">
                        {{ $document }}
                    </div>
                </div>
                <div class="col-6">
                    {{ Form::label('tipodocu_id', 'Tipo de Documento', ['class' => '']) }}
                    <div class="form-control">
                        {{ $modesele->tipodocu->nombre }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    {{ Form::label('departam_id', 'Departamento', ['class' => '']) }}
                    <div class="form-control">
                        {{ $modesele->departam->departam }}
                    </div>
                </div>
                <div class="col-6">
                    {{ Form::label('municipi_id', 'Municipio', ['class' => '']) }}
                    <div class="form-control">
                        {{ $modesele->municipi->municipi }}
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
        {!! Form::submit(__('Aprobar'), ['class' => 'btn btn-primary']) !!}
    </div>
</form>