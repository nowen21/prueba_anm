<div class="card-body">
    <div class="form-group">
        <div class="row">
            <div class="col-3">
                {{ Form::label('tipomine_id', 'Tipo de mineral', ['class' => '']) }}
                <div class="form-control">
                    {{ $tipomine_id}}
                </div>
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
                <div class="form-control">
                    {{ $cantidad}}
                </div>
            </div>

        </div>
    </div>
</div>