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

                            <div class="card-body">
                                <center>
                                    <p class="h2">{{ $user->name }}</p>
                                </center>

                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Correo electronico:</label>
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" value="{{ $user->email }}"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter email" disabled>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Telefono:</label>
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" value="{{ $user->telefono }}"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="No existe telefono" disabled>


                                        </div>

                                    </div>
                                </div>




                                <br>
                                @if ($user_roles->count())
                                    <p>{{ $user_roles }}</p>
                                @else
                                    <p class="h6">No existe roles asignados a este usuario</p>
                                    <small>Este usuario no podra iniciar sesion a menos que se le asigne un rol</small>
                                @endif
                                <br>
                                <div class="card">

                                    <div class="card-body">
                                        <p class="h4">Seleccione los roles a asignar.-</p>
                                        <form action="{{ route('asignarRoles.update', $user->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @foreach ($roles as $role)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $role->name }}" name="name[]">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $role->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                            <br>
                                            <button type="submit" class="btn btn-primary">Asignar roles</button>
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
