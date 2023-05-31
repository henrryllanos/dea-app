<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Plazas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-plaza.css') }}">

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
                <div id="container"></div>
                <div class="container py-5 h-100">

                    @if (session('status'))
                        <div class="alert alert-success">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <center>
                                    <h2>Zonas del parking</h2>
                                </center>
                                <div class="card-body">

                                    <form class="form-inline">
                                        <div class="form-group mb-2">
                                            <label for="exampleFormControlInput1">Nombre:</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="ingrese nombre de la zona">
                                        </div>
                                        <button type="submit" class="btn btn-primary  mb-2">Añadir Zona</button>

                                    </form>

                                </div>
                            </div>
                            <div class="movie-container">
                                <label class="h5">Añadir estacionaminetos</label>

                                <label for="movie">Seleccione la plaza</label>
                                <select class="custom-select custom-select-lg mb-3" id="movie" multiple>

                                    <option value="250">Plaza 1</option>
                                    <option value="200">Plaza 2</option>
                                    <option value="150">Plaza 3</option>
                                    <option value="100">Plaza 4</option>
                                </select>


                                <ul class="showcase">
                                    <li>
                                        <div class="seat sample">
                                            <input id="exampleRadios0" class="radiobuton" type="radio" name="radio">
                                        </div>
                                        <small>Vacios</small>
                                    </li>

                                    <li>

                                        <div class="seat seleccionado">
                                            <input id="exampleRadios1" class="radiobuton" type="radio" name="radio">

                                        </div>

                                        <small>Disponibles</small>
                                    </li>
                                    <li>
                                        <div class="seat occupied">
                                            <input id="exampleRadios2" class="radiobuton" type="radio" name="radio">
                                        </div>
                                        <small>Ocupados</small>
                                    </li>
                                </ul>
                                <div class="scrollable-div">
                                    <div class="containers" id="containers">
                                </div>
                                



                                </div>



                                <p class="text" hidden>
                                    Se ha seleccionado<span id="count">0</span> seats for the total price of Rs.
                                    <span id="total">0</span>
                                </p>
                            </div>
                            <div class="miform">
                                <div><input type="number" name="numero" id="numero" class="form-control"
                                        placeholder="introduzca el numero de plazas a llenar"></div>
                                <div> <button class="btn btn-secondary" onclick="addAutomatic()"> Guardar</button></div>
                                <div><input type="number" name="filas" id="filas" class="form-control"
                                        placeholder="introduzca el numero de estacionaminetos por fila"></div>
                                <div><button class="btn btn-secondary" onclick='addInput()'>Añadir Fila</button></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app-plaza.js') }}"></script>

</body>

</html>
