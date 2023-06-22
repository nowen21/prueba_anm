<div>
    <div class="container-fluid">
        @livewire('datatable.datatable-livewire',['model'=>"Spatie\Permission\Models\Role"])
        <!-- /.row -->
    </div>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card">


                    <div class="card-body">

                        <div class="form-group row">
                            {!! Form::label('name', 'Nombre del Rol', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('guard_name', 'Guard Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('guard_name', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">{{ __('Crear Rol') }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del Rol', ['class' => '']) !!}

                            {!! Form::text('name', null, ['class' => 'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('guard_name', 'Guard Name', ['class' => '']) !!}

                            {!! Form::text('guard_name', null, ['class' => 'form-control', 'required']) !!}

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>



        </div>

    </div>


</div>