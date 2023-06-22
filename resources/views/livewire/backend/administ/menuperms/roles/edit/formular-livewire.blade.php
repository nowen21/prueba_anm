<form wire:submit.prevent="edit{{ucfirst($moduloxx)}}">
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('name', 'Nombre del rol', ['class' => '']) }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'autofocus', 'wire:model' => 'name']) }}
                    @if($errors->has('name'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
                <div class="col-6">
                    {{ Form::label('guard_name', 'Guard', ['class' => '']) }}
                    {{ Form::text('guard_name', null, ['class' => 'form-control', 'wire:model' => 'guard_name']) }}
                    @if($errors->has('guard_name'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('guard_name') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <div class="card-footer text-end">
        <a class="btn btn-info" href="{{route($volverxx)}}" title="Volver">
            <i class="fas fa-arrow-left"></i>
            {{__('Volver')}}
        </a>
        {!! Form::submit(__('Editar'), ['class' => 'btn btn-primary']) !!}
    </div>
</form>