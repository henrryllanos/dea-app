<head>
    <meta charset="utf-8" />
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-realizar-solicitud.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-font.css') }}" />
</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            @auth
                @livewire('auth.users-side-bar')
            @endauth
            @guest
                @include('layouts.custombar')
            @endguest
            <div class="col py-3">
                <div class="container py-5 h-100">
                    <main>
                        <div class="container h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-lg-12 col-xl-11">
                                    <div class="card text-black" id="card-titulo">
                                        <div class="card-body p-md-5">
                                            <div class="row justify-content-center">
                                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Realizar
                                                        Solicitud
                                                    </p>

                                                    <form class="mx-1 mx-md-4"
                                                        action='{{ route('realizarSolicitud.store') }}' method="POST"
                                                        h>
                                                        @csrf
                                                        <div class="form-outline">
                                                            <label class="form-label" for="form3Examplev2">Nombre
                                                                completo</label>
                                                            <input type="text" name="name" id="name"
                                                                class="form-control "
                                                                class="@error('name') is-invalid @enderror" />
                                                            @error('name')
                                                                <small>{{ $message }}</small>
                                                            @enderror

                                                        </div>
                                                        <div class="form-outline">
                                                            <label class="form-label" for="form3Examplev2">Correo
                                                                electronico</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control"
                                                                class="@error('email') is-invalid @enderror" />
                                                            @error('email')
                                                                <small>{{ $message }}</small>
                                                            @enderror

                                                        </div>
                                                        <div class="form-outline">
                                                            <label class="form-label"
                                                                for="form3Examplev2">Telefono</label>
                                                            <input type="tel" name="telefono" id="telefono"
                                                                class="form-control"
                                                                class="@error('telefono') is-invalid @enderror" />
                                                            @error('telefono')
                                                                <small>{{ $message }}</small>
                                                            @enderror

                                                        </div>

                                                        <div class="mb4">
                                                            <div class="form-outline">
                                                                <label class="form-label"
                                                                    for="form3Examplev5">Contraseña</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="password" name="password"
                                                                        id="password" class="form-control"
                                                                        class="@error('password') is-invalid @enderror" />
                                                                    <span class="input-group-text">
                                                                        <i class="far fa-eye" id="togglePassword"
                                                                            style="cursor: pointer;"></i></span>

                                                                </div>
                                                                @error('password')
                                                                    <small>{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb4">
                                                            <div class="form-outline">
                                                                <label class="form-label" for="form3Examplev5">Repita la
                                                                    contraseña</label>
                                                                <div class="input-group mb-3">

                                                                    <input type="password" name="password_confirmation"
                                                                        id="password_confirmation" class="form-control"
                                                                        class="@error('password_confirmation') is-invalid @enderror" />
                                                                    <span class="input-group-text">
                                                                        <i class="far fa-eye" id="togglePassword2"
                                                                            style="cursor: pointer;"></i></span>
                                                                    @error('password_confirmation')
                                                                        <small>{{ $message }}</small>
                                                                    @enderror
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <br>


                                                        <div class="form-outline">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-lg">Registrar</button>
                                                        </div>

                                                    </form>

                                                </div>
                                                <div
                                                    class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                                    <img src="{{ asset('img/tarifa.png') }}" class="img-fluid"
                                                        alt="Sample image">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </main>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const togglePassword2 = document.querySelector('#togglePassword2');
    const password = document.querySelector('#password');
    const password_confirmation = document.querySelector('#password_confirmation');
    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });

    togglePassword2.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password_confirmation.getAttribute('type') === 'password' ? 'text' : 'password';
        password_confirmation.setAttribute('type', type);

        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
