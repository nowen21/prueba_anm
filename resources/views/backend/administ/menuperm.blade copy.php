@extends('layouts.app')

@section('content')
@section('styles')
@endsection
<div>
    <style>
        .nav-pills .nav-link {
            background-color: transparent;
            color: #000;
            /* Color del texto */
        }

        .nav-pills .nav-link.active {
            background-color: transparent;
            color: #000;
            /* Color del texto para la pestaña activa */
            border-bottom: 2px solid #000;
            /* Agregar una línea inferior para la pestaña activa */
        }

        .my-tooltip .tooltip-inner {
            background-color: white;
            color: black;
        }
    </style>
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Roles y Permisos</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body ">
                <div class="tab-content " id="pills-tabContent">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <a href="{{route('rolexxxx')}}" class="nav-link {{$componen['rolexxxx'][1]}}" >
                                    <i class="fas fa-users"></i> Roles
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{route('permisox')}}" class="nav-link {{$componen['permisox'][1]}}" >
                                    <i class="fas fa-key"></i> Permisos
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{route('permrole')}}" class="nav-link {{$componen['permrole'][1]}}">
                                    <i class="fas fa-users-cog"></i> Roles y Permisos
                                </a>
                            </li>
                        </ul>

                      
                            @livewire($componex,['componen'=>$componen])
                    
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
</div>
<!-- /.row -->
@section('scripts')
@endsection
@endsection