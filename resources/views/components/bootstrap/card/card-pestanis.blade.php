<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">{{$tituloxxx}}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="tab-content " id="pills-tabContent">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    {{$lixxxxxx}}

                    
                    <li class="nav-item " role="presentation">
                        <button class="nav-link active " id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <i class="fas fa-users"></i> Roles
                        </button>
                    </li>
                   
                </ul>
                
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @livewire('backend.administ.roles.role-livewire',['model'=>"Spatie\Permission\Models\Role"])

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">permisos</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">roles y permiso</div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>