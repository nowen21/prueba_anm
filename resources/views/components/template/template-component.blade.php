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
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">{{$tituloxx}}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body ">

                    <div class="tab-content " id="pills-tabContent">
                        <x-template.pestanias-component :pestania="$pestania">
                        </x-template.pestanias-component>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <div class="card-title d-flex align-items-center">
                                    {{$accionxx}}
                                    {{$botoadic}}
                                </div>
                                {{$searchxx}}



                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">

                                {{$mailboxx}}
                                <div class="table-responsive mailbox-messages">

                                    {{$formular}}
                                </div>
                                <!-- /.mail-box-messages -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>

</div>