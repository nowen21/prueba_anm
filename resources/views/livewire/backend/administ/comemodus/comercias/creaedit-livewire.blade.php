
    <div class="card-body">
        <div class="form-group">
            <div class="row">
                <div class="col-3">
                {{ Form::label('tipomine_id', 'Tipo de mineral', ['class' => '']) }}
                {{ Form::select('tipomine_id', $tipomine, null, ['class' => 'form-control', 'wire:model' => 'tipomine_id']) }}
                @if($errors->has('tipomine_id'))
                <div class="invalid-feedback d-block">
                    {{ $errors->first('tipomine_id') }}
                </div>
                @endif
                </div>
                <div class="col-3">
                    {{ Form::label('totalxxx', 'Total', ['class' => '']) }}
                    <div class="form-control">
                        {{ $totalxxx}}
                    </div>
                </div>
                <div class="col-3">
                    {{ Form::label('disponib', 'Disponibilidad', ['class' => '']) }}
                    <div class="form-control">
                        {{ $disponib}}
                    </div>
                </div>
                <div class="col-3">
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
