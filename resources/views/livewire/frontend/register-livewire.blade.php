<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form wire:submit.prevent="createUsuario">
        @csrf


        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <i class="fas fa-user"></i>
                    {{ Form::label('name', 'Nombre del Usuario', ['class' => '']) }}
                    {{ Form::text('name', null, ['class' => 'form-control '. ($errors->has('name') ? ' is-invalid' : ''), 'autofocus', 'wire:model' => 'name']) }}
                    @if($errors->has('name'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('name') }}
                    </div>
                    @endif
                </div>
                <div class="col-6">
                    <ion-icon name="mail-outline"></ion-icon>
                    {{ Form::label('email', 'Email', ['class' => '']) }}
                    {{ Form::email('email', null, ['class' => 'form-control '. ($errors->has('email') ? ' is-invalid' : ''), 'wire:model' => 'email']) }}
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
                    <i class="fas fa-address-card"></i>
                    {{ Form::label('document', 'Documento', ['class' => '']) }}
                    {{ Form::text('document', null, ['class' => 'form-control'.($errors->has('document') ? ' is-invalid' : ''),'wire:model ' => 'document']) }}
                    @if($errors->has('document'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('document') }}
                    </div>
                    @endif
                </div>
                <div class="col-6">
                    <i class="fas fa-file-alt"></i>
                    {{ Form::label('tipodocu_id', 'Tipo de Documento', ['class' => '']) }}
                    {{ Form::select('tipodocu_id', $tipodocu, $tipodocu_id, ['class' => 'form-control '. ($errors->has('tipodocu_id') ? ' is-invalid' : ''), 'wire:model' => 'tipodocu_id']) }}
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
                    <i class="fas fa-map-marker-alt"></i>
                    {{ Form::label('departam_id', 'Departamento', ['class' => '']) }}
                    {{ Form::select('departam_id', $departam, null, ['class' => 'form-control '. ($errors->has('departam_id') ? ' is-invalid' : ''), 'wire:model' => 'departam_id']) }}
                    @if($errors->has('departam_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('departam_id') }}
                    </div>
                    @endif
                </div>
                <div class="col-6">
                    <i class="fas fa-map-pin"></i>
                    {{ Form::label('municipi_id', 'Municipio', ['class' => '']) }}
                    {{ Form::select('municipi_id', $municipi, $municipi_id, ['class' => "form-control ". ($errors->has('municipi_id') ? ' is-invalid' : ''), 'wire:model' => 'municipi_id']) }}
                    @if($errors->has('municipi_id'))
                    <div class="invalid-feedback d-block">
                        {{ $errors->first('municipi_id') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <i class="fas fa-key"></i>
                    {{ Form::label('municipi_id', __('Password'), ['class' => '']) }}

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password" autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6">
                    <i class="fas fa-lock"></i>
                    {{ Form::label('confirmPassword', __('Confirm Password'), ['class' => '']) }}
                    <input id="confirmPassword" type="password" class="form-control @error('confirmPassword') is-invalid @enderror" wire:model="confirmPassword" autocomplete="new-password">
                    @error('confirmPassword')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>