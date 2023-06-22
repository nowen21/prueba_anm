<!-- Left navbar links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars')}}"></i></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="{{route('welcomex')}}" class="nav-link">Inicio</a>
  </li>
 
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <!-- Navbar Search -->
  <li class="nav-item">
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
      <i class="fas fa-search"></i>
    </a>
    <div class="navbar-search-block">
      <form class="form-inline">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
              <i class="fas fa-times')}}"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </li>

  <!-- Authentication Links -->







  @guest
    @if (Route::has('login'))
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
    </li>
    @endif

    @if (Route::has('register'))
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">{{ __('Registro Comercializadores Mineros') }}</a>
    </li>
    @endif
  @else
  <!-- Messages Dropdown Menu -->
  @include('layouts.adminlte.navbars.navbar-messages')
  <!-- Notifications Dropdown Menu -->
  @include('layouts.adminlte.navbars.navbar-notifications')
  <!-- Legacy User Menu Dropdown Menu -->
  @include('layouts.adminlte.navbars.navbar-user')
  <!-- Fin Legacy User Menu Dropdown Menu -->
  
  @endguest
  <!-- Language Dropdown Menu -->
  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="flag-icon flag-icon-us')}}"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right p-0">
      <a href="#" class="dropdown-item active">
        <i class="flag-icon flag-icon-us mr-2"></i> English
      </a>
      <a href="#" class="dropdown-item">
        <i class="flag-icon flag-icon-de mr-2"></i> German
      </a>
      <a href="#" class="dropdown-item">
        <i class="flag-icon flag-icon-fr mr-2"></i> French
      </a>
      <a href="#" class="dropdown-item">
        <i class="flag-icon flag-icon-es mr-2"></i> Spanish
      </a>
    </div>
  </li>
  <!-- Fin  Language Dropdown Menu -->
  <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
      <i class="fas fa-th-large"></i>
    </a>
  </li>
</ul>