<div>

    {{-- este componente es llamado en el componente: app-componente de esta misma carpeta --}}
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" style="flex-grow: 1; overflow-wrap: break-word;">
                @auth
                <!-- Contenido visible solo para usuarios autenticados -->
                <a href="{{ route('home') }}" class="d-block">{{ Auth::user()->name }}</a>
                @else
                <!-- Contenido visible para usuarios no autenticados -->
                <a href="{{ route('login') }}" class="d-block">Alexander Pierce</a>
                @endauth
            </div>
        </div>


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @livewire('adminlte.layout.sidebar-menu-livewire')
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>