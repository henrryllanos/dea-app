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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-font.css') }}" />
    @livewireScripts
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
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1">Crear Rol</p>

                                <form class="mx-1 mx-md-4"
                                    action='{{ route('asignarRoles.store') }}' method="POST"
                                    h>
                                    @csrf
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Examplev2">Nombre
                                            del rol</label>
                                        <input type="text" name="rol" id="rol"
                                            class="form-control "
                                            class="@error('rol') is-invalid @enderror" />
                                        @error('rol')
                                            <small>{{ $message }}</small>
                                        @enderror

                                    </div>

                                    <br>

                                    <div class="form-outline">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg">Guardar</button>
                                    </div>

                                </form>

                            </div>
                            
                        </div>
                        <div>
                            @livewire('admin.role-index')
                        </div>
                        


                    </main>

                </div>
            </div>
        </div>
    </div>
</body>

</html>

