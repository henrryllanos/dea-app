<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="{{ route('my.index') }}" class="nav-link align-middle px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                </a>
            </li>
            @guest
                <li>
                    <a href="{{ route('login.create') }}" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-box-arrow-in-right"></i> <span class="ms-1 d-none d-sm-inline">Iniciar
                            Sesión</span></a>
                </li>

                <li>
                    <a href="{{ route('registroCliente') }}" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-person-fill-add"></i> <span class="ms-1 d-none d-sm-inline">Realizar
                            Solicitud</span></a>
                </li>
            @endguest
            <li>
                <a href="{{ route('crearPlazas') }}" class="nav-link px-0 align-middle ">
                    <i class="fs-4 bi-p-square-fill"></i> <span class="ms-1 d-none d-sm-inline">Crear Parking</span></a>
            </li>

            @auth
                <li>
                    <a href="{{ route('pagoqr') }}" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-credit-card"></i> <span class="ms-1 d-none d-sm-inline">Pagos QR</span> </a>
                </li>

                @can('invitado.completar', Model::class)
                    <li>
                        <a href="{{ route('registroCliente', $user->id) }}" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-person-fill-add"></i> <span class="ms-1 d-none d-sm-inline">Completar
                                Solicitud</span></a>
                    </li>
                @endcan
                @can('admin.listar.destroy', Model::class)
                    <li>
                        <a href="{{ route('listarUsuario') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Listar Usuarios</span> </a>
                    </li>
                @endcan

                @can('admin.listar.destroy', Model::class)
                    <li>
                        <a href="{{ route('registroAdministrativo') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-person-fill-gear"></i> <span class="ms-1 d-none d-sm-inline">Añadir
                                Administrativo</span></a>
                    </li>
                @endcan

                <li>
                    <a href="{{ route('registrarVehiculo', $user->id) }}" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-car-front-fill"></i> <span class="ms-1 d-none d-sm-inline">Añadir mi
                            Vehiculo</span></a>
                </li>

                @can('guardia.listar.ver', Model::class)
                    <li>
                        <a href="{{ route('registroEntradasalida') }}" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-truck-front-fill"></i> <span class="ms-1 d-none d-sm-inline">Control de
                                Vehiculos</span></a>
                    </li>
                    <li>

                        <a href="#submenu3" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-calendar3"></i> <span class="ms-1 d-none d-sm-inline">ver Horario</span> </a>
                    </li>
                @endcan

                <!--
                                                                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                                            <i class="fs-4 bi-calendar3"></i> <span class="ms-1 d-none d-sm-inline">ver Horario</span> </a>
                                                                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                                                                <li class="w-100">
                                                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                                                                        1</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                                                                        2</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                                                                        3</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span>
                                                                                        4</a>
                                                                                </li>
                                                                            </ul>-->

                @can('admin.listar.destroy', Model::class)
                    <li>
                        <a href="{{ route('asignarRoles') }}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Roles</span> </a>
                    </li>
                @endcan

            </ul>
            <hr>
            <div class="dropdown pb-4 bottom">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset($user->foto_perfil) }}" id="HideImg" onerror="hideImg()" alt="hugenerd"
                        width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1"><small>{{ strtok($user->email, '@') }}</small></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Ajustes</a></li>
                    <li><a class="dropdown-item" href="{{ route('editarPerfil') }}">Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Cerrar sesión</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</div>

<!--<i class="fs-3 bi-person-circle"></i>-->
<script>
    function hideImg() {
        document.getElementById("HideImg")
            .style.display = "none";
    }
</script>
