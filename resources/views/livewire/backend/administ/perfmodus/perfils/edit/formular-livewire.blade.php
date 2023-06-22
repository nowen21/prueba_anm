<form wire:submit.prevent="edit{{ucfirst($moduloxx)}}">
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('name', 'Nombre del Usuario', ['class' => '']) }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'autofocus', 'wire:model' => 'name']) }}
                    @if($errors->has('name'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
                <div class="col-6">
                    {{ Form::label('email', 'Email', ['class' => '']) }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'wire:model' => 'email']) }}
                    @if($errors->has('email'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('document', 'Documento', ['class' => '']) }}
                    {{ Form::text('document', null, ['class' => 'form-control', 'wire:model' => 'document']) }}
                    @if($errors->has('document'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('document') }}
                    </div>
                    @endif
                </div>
                <div class="col-6">
                    {{ Form::label('tipodocu_id', 'Tipo de Documento', ['class' => '']) }}
                    {{ Form::select('tipodocu_id', $tipodocu, $tipodocu_id, ['class' => 'form-control', 'wire:model' => 'tipodocu_id']) }}
                    @if($errors->has('tipodocu_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('tipodocu_id') }}
                    </div>
                    @endif
                </div>
            </div>

        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('departam_id', 'Departamento', ['class' => '']) }}
                    {{ Form::select('departam_id', $departam, null, ['class' => 'form-control', 'wire:model' => 'departam_id']) }}
                    @if($errors->has('departam_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('departam_id') }}
                    </div>
                    @endif
                </div>
                <div class="col-6">
                    {{ Form::label('municipi_id', 'Municipio', ['class' => '']) }}
                    {{ Form::select('municipi_id', $municipi, $municipi_id, ['class' => 'form-control', 'wire:model' => 'municipi_id']) }}
                    @if($errors->has('municipi_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('municipi_id') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer text-end">
        {!! Form::submit(__('Editar'), ['class' => 'btn btn-primary']) !!}
    </div>
</form>