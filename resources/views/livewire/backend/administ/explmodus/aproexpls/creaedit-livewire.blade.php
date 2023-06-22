<form wire:submit.prevent="{{$funcionx}}">
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                {{ Form::label('tipomine_id', 'Tipo de mineral', ['class' => '']) }}
                {{ Form::select('tipomine_id', $tipomine, null, ['class' => 'form-control', 'wire:model' => 'tipomine_id']) }}
                @if($errors->has('tipomine_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipomine_id') }}
                </div>
                @endif
                </div>
                <div class="col-6">
                    {{ Form::label('cantidad', 'Cantidad', ['class' => '']) }}
                    {{ Form::text('cantidad', null, ['class' => 'form-control', 'autofocus', 'wire:model' => 'cantidad']) }}
                    @if($errors->has('cantidad'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('cantidad') }}
                    </div>
                    @endif
                </div>
                
            </div>
        </div>
    

    </div>

    <div class="card-footer text-end">
        <a class="btn btn-info" href="{{route($permisox.'-listaxxx')}}" title="Volver">
            <i class="fas fa-arrow-left"></i>
            {{__('Volver')}}
        </a>
        <button class="btn btn-primary   " type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Nuevo">
            <i class="fas fa-check"></i> Guardar
        </button>
    </div>

</form>