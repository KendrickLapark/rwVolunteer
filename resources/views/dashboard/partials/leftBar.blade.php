@if(!session()->has("status"))
<div class="sidebar">
@else
<div class="sidebar active">
@endif
    <div id="spaceTopMenu">
        <div class="logo-details">
            @if(!session()->has("status"))
            <img width="200" height="39" src="<?php echo asset('images/logoNeg.jpg'); ?>" alt="header-logo" id="logoImg" />
            @else
            <img width="200" height="39" src="<?php echo asset('images/fm_blanco.png'); ?>" alt="header-logo" id="logoImg" />
            @endif
        </div>
    </div>
    <ul class="nav-links">
        @if (!Auth::user()->isIncomplete() && Auth::user()->isRegisterComplete)
            <li title="Inscripciones">
                <a href="{{ route('dashboard.logged') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="links_name">Inscripciones</span>
                </a>
            </li>
            <li title="Actividades">
                <a href="{{ route('dashboard.showActivitiesOptions') }}">
                    <i class='bx bxs-label'></i>
                    <span class="links_name">Actividades</span>
                </a>
            </li>
            <li title="Mis estudios">
                <a href="{{ route('dashboard.showMyEducation') }}">
                    <i class='bx bxs-graduation'></i>
                    <span class="links_name">Mis Estudios</span>
                </a>
            </li>
            <li title="Mi documentación">
                <a href="{{ route('dashboard.showUserDocument') }}">
                    <i class='bx bx-file'></i>
                    <span class="links_name">Mi documentación</span>
                </a>
            </li>
            <li title="Editar perfil">
                <a href="{{ route('dashboard.showMyProfile') }}">
                    <i class='bx bxs-user-account'></i>
                    <span class="links_name">Editar mi perfil</span>
                </a>
            </li>
            @if (App\Http\Controllers\NotifyController::notifyLoggedTrigger())
                <li class="adminMenu" title="Notificaciones">
                    <a href="{{ route('dashboard.logged.showNotify') }}">
                        <i class='iconAlert bx bxs-bell-ring bx-tada '></i>
                        <span class="textAlert links_name ">Notificaciones</span>
                    </a>
                </li>
            @endif
        @endcan
        @can('isAdmin')
            <li class="adminMenu" title="Tablón">
                <a href="{{ route('dashboard.admin') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="links_name">Tablón</span>
                </a>
            </li>
            <li class="adminMenu" title="Usuarios">
                <a href="{{ route('dashboard.showAllUsers') }}">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Usuarios</span>
                </a>
            </li>
            <li class="adminMenu" title="Actividades">
                <a href="{{ route('dashboard.showAllActivities') }}">
                    <i class='bx bxs-label'></i>
                    <span class="links_name">Actividades</span>
                </a>
            </li>
            @if (App\Http\Controllers\NotifyController::notifyTrigger())
                <li class="adminMenu" title0="Notificaciones">
                    <a href="{{ route('dashboard.admin.showNotify') }}">
                        <i class='iconAlert bx bxs-bell-ring bx-tada '></i>
                        <span class="textAlert links_name ">Notificaciones</span>
                    </a>
                </li>
            @endif

        @endcan
        <li class="log_out" title="Cerrar sesión">
            <a href="{{ route('vol.logout') }}">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Cerrar sesión</span>
            </a>
        </li>
</ul>
</div>
