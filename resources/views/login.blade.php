<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <script type="text/javascript" src="{{ asset('js/script-login.js') }}"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>

    <link href="{{ asset('css/style-login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>


<body>

    {{ session('status') }}



    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div id="contenedor-flex">
        <div id="contenedor-imagen">

            <img src="{{ asset('img/planoparqueo3.jpg') }}" alt="description of myimage" width="105%" height="100%"
                style="object-fit: cover; object-position: left;">



        </div>
        <pre>{{ Auth::user() }}</pre>

        <div id="contenedor-lateral">
            <div id="contenedor-form">

                <div class="group">
                    <a class="texto-encima"><b>DEA</b></a>
                </div><br>

                <div class="group">
                    <h1 id="titulo"><b>Iniciar Sesión<b></h1>
                </div>
                <p>Bienvenido a tu sistema de parqueo!!</p><br>

                <form action="{{ route('login.store') }}" method="post" class="form-register" id="form">
                    @csrf
                    <div>
                        <div>
                            <div class="mb4">
                                <!-- <label>Correo Electronico</label><br> -->
                                
                                <input type="email" id="email" spellcheck="false" name="email"
                                    placeholder="Correo Electrónico"required
                                    pattern=".+@(gmail|hotmail|mailinator|example|outlook).(com|es|net)"
                                    title="ingrese correo electronico" class="form-control form-control-lg">
                            </div>

                            <div class="mb4">
                                <div class="form-outline">
                                    <br>
                                    <div class="input-group mb-3">
                                        <input type="password" name="password" id="password"
                                            class="form-control form-control-lg"
                                            class="@error('password') is-invalid @enderror" placeholder="Contraseña" />
                                        <span class="input-group-text">
                                            <i class="far fa-eye" id="togglePassword"
                                                style="cursor: pointer;"></i></span>

                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                        <small>{{ $error }}</small>
                                    @endforeach
                            </div>
                        @endif
                        <div>
                            <button type="submit" class="button buttonBlue" name="enviarbtn">Ingresar</button>
                        </div>
                    </div>
                </form>
                <p><a href="{{ route('recuperar') }}"> ¿Olvidaste tu contraseña?</a></p>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/script-login.js') }}"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
