<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column icone_sidebar" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="#" class="nav-link {{ '' ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('members.index')}}" class="nav-link {{ Route::is('members.index') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <p>Membros</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('roles.index')}}" class="nav-link {{ Route::is('roles.index') ? 'active' : '' }}">
                <i class="fas fa-address-card"></i>
                <p>Cargo</p>
            </a>
        </li>
    </ul>
</nav>