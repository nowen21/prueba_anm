@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <livewire:frontend.register-livewire>                        
                    </livewire:frontend.register-livewire>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection