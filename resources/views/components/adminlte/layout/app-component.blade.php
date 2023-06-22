<div>



  <!-- Preloader parte de arriba del menu y notificaciones del top -->

  @include('layouts.adminlte.preloader')
  <!-- Navbar menu y notificaciones en el top -->
  @livewire('adminlte.layout.navbar-livewire')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @include('layouts.adminlte.brandlogo')

    <!-- Sidebar -->
    {{-- componente que arma que se encarga de armar el menu izquierdo --}}
    <x-adminlte.layout.sidebar-component>

    </x-adminlte.layout.sidebar-component>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

  <!-- /.content-header -->



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @include('layouts.adminlte.contentheader')
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      @php
      $routeCollection = Route::getRoutes();
      @endphp
      @foreach ($routeCollection as $route)
      <p>URL: {{ $route->uri }}</p>
      <p>Métodos HTTP: {{ implode(', ', $route->methods) }}</p>
      @endforeach

      @if(request()->routeIs('rolexxxx'))
      @livewire('ejemplos.menu.roles-permisos')
      @elseif(request()->routeIs('permisox'))
      @livewire('ejemplos.menu.permisos')
      @endif
      @yield('content')
    </section>

    <!-- /.content -->
  </div>

</div>