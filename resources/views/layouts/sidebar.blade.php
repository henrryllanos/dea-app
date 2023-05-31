
<div class="wrapper">
    <!-- Sidebar  -->

<nav class="main-nav">



    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="{{ route('my.index') }}">
                    <i class="fa fa-home fa-2x"></i>

                    <span class="nav-text">
                        Inicio
                    </span>
                </a>

            </li>
            @guest
            <li class="has-subnav">
                <a class="nav-link" href="{{ route('login.create') }}">
                    <i class="fa fa-sign-in fa-2x"></i>

                    <span class="nav-text">
                        Iniciar Sesion
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a class="nav-link active" href="{{ route('registroCliente') }}">
                    <i class="fa fa-plus-square fa-2x"></i>

                    <span class="nav-text">
                        Crear Cuenta
                    </span>
                </a>

            </li>
            @endguest
            @auth
            <li>
                <a class="nav-link active" href="{{ route('registroAdministrativo') }}">
                    <i class="fa fa-user-plus fa-2x"></i>

                    <span class="nav-text">
                        Crear Usuario
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="{{ route('listarUsuario') }}">
                    <i class="fa fa-users fa-2x"></i>

                    <span class="nav-text">
                        Lista de Usuarios
                    </span>
                </a>

            </li>
            
            
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-clock-o fa-2x"></i>

                    <span class="nav-text">
                        Ver horario
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-taxi fa-2x"></i>


                    <span class="nav-text">
                        Registrar Entrada de Vehiculos
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-cogs fa-2x"></i>


                    <span class="nav-text">
                        Mi perfil
                    </span>
                </a>

            </li>
            @endauth

        </ul>

        @auth
        <ul class="logout">
            <li>


                <i class="fa fa-power-off fa-2x"></i>
                <span class="nav-text">

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <a href="#" onclick="this.closest('form').submit()">
                            Logout
                        </a>
                    </form>
                </span>

            </li>
        </ul>
        @endauth


    </nav>
</div>