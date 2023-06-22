<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <x-adminlte.layout.styles></x-adminlte.layout.styles>
    @livewireStyles
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- componente que arma la vista app --}}
        <div>



            <!-- Preloader parte de arriba del menu y notificaciones del top -->

            <!-- @include('layouts.adminlte.preloader') -->
            <!-- Navbar menu y notificaciones en el top -->
            @livewire('adminlte.layout.navbar-livewire')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                @include('layouts.adminlte.brandlogo')

                <!-- Sidebar -->
                {{-- componente que arma que se encarga de armar el menu izquierdo --}}
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

                            @can('administ-moduloxx')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Administraci&oacute;n
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @can('rolexxxx-moduloxx')
                                        <li class="nav-item">
                                            <a href="{{route('rolexxxx-listaxxx')}}" class="nav-link">
                                                <i class="fas fa-shield-alt nav-icon"></i>
                                                <p>Roles y Permisos</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('usuariox-moduloxx')
                                        <li class="nav-item">
                                            <a href="{{route('usuariox-listaxxx')}}" class="nav-link">
                                                <i class="fas fa-shield-alt nav-icon"></i>
                                                <p>Usuarios</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('explotac-moduloxx')
                                        <li class="nav-item">
                                            <a href="{{route('explotac-listaxxx')}}" class="nav-link">
                                                <i class="fas fa-shield-alt nav-icon"></i>
                                                <p>Explotaciones</p>
                                            </a>
                                        </li>
                                    @endcan

                                    @can('comercia-moduloxx')
                                        <li class="nav-item">
                                            <a href="{{route('comercia-listaxxx')}}" class="nav-link">
                                                <i class="fas fa-shield-alt nav-icon"></i>
                                                <p>Comercializaciones</p>
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                            @endcan
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->

            <!-- /.content-header -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <x-template.breadcrumb-component>

                        </x-template.breadcrumb-component>
                    </div><!-- /.container-fluid -->
                </div>
                <!-- Main content -->
                <section class="content">

                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    @livewireScripts
    @stack('scriptsl')
</body>

</html>