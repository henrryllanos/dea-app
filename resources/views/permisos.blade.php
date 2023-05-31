<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-font.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}" />
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
                        <div class="card">
                            <br>
                            <h3 class="d-flex justify-content-center card-title">Asignar permisos</h3>
                            <div class="card-body">
                                <p class="h5">Nombre rol:</p>
                                <p class="form-control">{{ $role->name }}</p>

                                <p class="h6">Permisos asigando al rol:</p>
                                @if ($rol_permisos->count())
                                <div class="container">
                                    <div class="row">
                                        @foreach ($rol_permisos as $rol_permiso)
                                        <div class="form-check col-12 col-md-6">
                                            <input class="form-check-input" type="checkbox" value="{{ $rol_permiso->id }}"
                                                id="flexCheckChecked" checked disabled>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                {{ $rol_permiso->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    </div>
                                  </div>
                                @else

                                <div class="container">
                                    <div class="row">
                                       <p><strong>Este rol  no cuenta con permisos asignados</strong></p>
                                    </div>
                                  </div>
                                @endif





                                <div class="card">
                                    <div class="card-body">
                                        <p class="h6">Lista de todos los permisos:</p>
                                        <form action="{{ route('asignarPermiso.update', $role->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @foreach ($permisos as $permiso)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $permiso->name }}" name="name[]" <label
                                                        class="form-check-label" for="defaultCheck1">
                                                    {{ $permiso->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                            <br>
                                            <button type="submit" class="btn btn-primary">Modificar permisos</button>
                                            <input type="button" value="Regresar" class="btn btn-secondary"
                                                onclick="history.back()">
                                        </form>
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
