<div>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
                Administraci&oacute;n
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" wire:click="cambiarVista('rolexxxx')" class="nav-link">
                    <i class="fas fa-shield-alt nav-icon"></i>
                    <p>Roles y Permisos live</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" wire:click="cambiarVista('usuariox')" class="nav-link">
                    <i class="fas fa-shield-alt nav-icon"></i>
                    <p>permisos live</p>
                </a>
            </li>



            <li class="nav-item">
                <a href="{{route('rolexxxx')}}" class="nav-link">
                    <i class="fas fa-shield-alt nav-icon"></i>
                    <p>Roles y Permisos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('usuariox')}}" class="nav-link">
                    <i class="fas fa-shield-alt nav-icon"></i>
                    <p>permisos</p>
                </a>
            </li>
        </ul>
    </li>
</div>