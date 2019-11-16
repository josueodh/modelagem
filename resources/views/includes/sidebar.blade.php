<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-warning" style="overflow-x: hidden;">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ asset('img/code.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Code JR') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="#">
                    <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2 perfil-sidebar">
                </a>
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name ?? 'Usuário' }}</a>
            </div>
            <div class="info align-self-center">
                <form id="logout-form" method="post" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
                </form>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column icone_sidebar" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link {{ '' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Membros</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link {{ Route::is('roles.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>Cargo</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('departaments.index') }}" class="nav-link {{ Route::is('departaments.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>Departamento</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link {{ Route::is('categories.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-project-diagram"></i>
                        <p>Categoria</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('warnings.index') }}" class="nav-link {{ Route::is('warning.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-exclamation"></i>
                        <p>Avisos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pricing.index') }}" class="nav-link {{ Route::is('pricing.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Precificação</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
