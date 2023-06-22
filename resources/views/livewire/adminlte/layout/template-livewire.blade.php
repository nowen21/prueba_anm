<div>
    <div class="container-fluid">

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
                <div class="card-body p-0">
                    <div class="tab-content " id="pills-tabContent">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <button class="nav-link active"  id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="fas fa-users"></i> Roles
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link"  id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <i class="fas fa-key"></i> Permisos
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <i class="fas fa-users-cog"></i>   Roles y Permisos
                                </button>
                            </li>
                        </ul>

                        @livewire($vistaxxx)
                        

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
</div>
<!-- /.row -->



        <!-- llamar vista de manera dinamica -->
   
       
     
        <!-- /.row -->
    </div>



</div>