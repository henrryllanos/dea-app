<!DOCTYPE html>
<html>
<head>
	<title>My App</title>
	<!-- Estilos CSS -->
	<link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>
    {{session('status')}}
	<!-- Sidebar -->
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="{{ route('registroCliente', ['id'=>1]) }}">
								<span data-feather="home"></span>
								Registrarse
							</a>
						</li>
						
                        @guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login', ['id'=>1]) }}">
								<span data-feather="settings"></span>
                                
                                Iniciar Sesion
							</a>
						
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="logout"></span>
								<form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="logout">Logout</button>
                                
                                </form>
								
							</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="user"></span>
								Perfil
							</a>
						</li>
                        @endauth
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<!-- Contenido principal -->
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<div class="container-fluid mt-3">
			<h1>Bienvenido a My App</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices tincidunt lacus, sed semper lorem consectetur in. Sed ut convallis nulla, eget tincidunt velit. Maecenas vitae nisl eu augue gravida consequat. Pellentesque nec magna quam. Aliquam erat volutpat. Proin maximus finibus diam in eleifend.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione commodi voluptate suscipit similique quos eaque, illum tempore architecto? Nemo, sapiente possimus. Commodi obcaecati cum voluptatibus voluptates in eveniet asperiores aut?</p>
        </div>
	</main>

	<!-- Scripts JS -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>