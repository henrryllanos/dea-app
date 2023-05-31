<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos de QR</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="{{ asset('css/pago.css') }}" rel="stylesheet">
    <link href="{{ asset('img/qr.jpeg') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-font.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}" />


    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4 px;
        }

        a {
            text-decoration: none;

        }
    </style>
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
                <div class="container py-3 h-100">


                    @if (session('status'))
                        <div class="alert alert-success">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    @endif

                    <main>

                        <h1 align="center" class="titulo3">PAGOS CON CODIGO QR</h1>
                        <h2>Ingresar datos para registro</h2>


                        <div class="card-body">
                            <form action="{{ route('pagoqr.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <h1 class="subtitulos2">Ingresar Nombre Completo</h1>
                                <?php
                                if(isset($_GET['enviarbtn'])){
                                 //   $m = $_GET['email'];
                                }

                                //$m = $_GET['email'];
                                ?>
                                <input class="controls1 " id="nombre" type="search" name="nombre"
                                    placeholder="Ingresa nombre completo"  >
                                @error('nombre')
                                    <br>
                                    <smal>*{{ $message }}</smal>
                                @enderror
                                <br>
                                <h1 class="subtitulos2">Ingresar detalle de pago</h1>
                                <input list="detalle" name="detalle">
                                    <datalist id="detalle" name="detalle">
                                        <option value="pago mensualmente"></option>
                                        <option value="Pago de deudas atrasadas"></option>
                                        <option value="Pagos por adelantado"></option>

                                        </datalist>

                                @error('detalle')
                                    <br>
                                    <smal>*{{ $message }}</smal>
                                @enderror

                                <br>
                                <h1 class="subtitulos2">Ingresar carnet identidad</h1>
                                <input class="controls1 " id="ci" type="number" name="ci"
                                    placeholder="Ingrese carnet identidad">

                                @error('ci')
                                    <br>
                                    <smal>*{{ $message }}</smal>
                                @enderror
                                <br>
                                <H1 class="subtitulos2">Meses a pagar</H1>
                                <input class="meta" id="ene" type="checkbox" name="ene" value=ene>
                                <label for="ene">Enero</label>
                                <br>

                                <input class="meta" id="feb" type="checkbox" name="feb" value=feb>
                                <label for="feb">Febrero</label>
                                <br>

                                <input class="meta" id="mar" type="checkbox" name="marzo" value="mar">
                                <label for="mar">Marzo</label>
                                <br>

                                <input class="meta" id="abril" type="checkbox" name="abril" value="abri">
                                <label for="abril">Abril</label>
                                <br>

                                <input class="meta" id="may" type="checkbox" name="may" value="may">
                                <label for="may">Mayo</label>
                                <br>

                                <input class="meta" id="jun" type="checkbox" name="jun" value="jun">
                                <label for="jun">Junio</label>
                                <br>

                                <input class="meta" id="jul" type="checkbox" name="jul" value="jul">
                                <label for="jul">Julio</label>
                                <br>

                                <input class="meta" id="agosto" type="checkbox" name="agosto" value="agos">
                                <label for="agosto">Agosto</label>
                                <br>

                                <input class="meta" id="sep" type="checkbox" name="sep" value="sep">
                                <label for="sep">Septiembre</label>
                                <br>

                                <input class="meta" id="oc" type="checkbox" name="oc" value="oc">
                                <label for="oc">Octubre</label>
                                <br>
                                <input class="meta" id="nom" type="checkbox" name="nom" value="nom">
                                <label for="nom">Noviembre</label>
                                <br>
                                <input class="meta" id="dic" type="checkbox" name="dic" value="dic">
                                <label for="dic">Diciembre</label>
                                <br>
                                <br>

                                <h1 class="subtitulos2">Ingresar monto</h1>
                                <input class="controls1 " id="monto" type="number" name="monto"
                                    placeholder="Ingrese monto de pago" value=>
                                <br>
                                <br>



                                <div>
                                    <label for="nombre" class="comprobante">Insertar Comprobante</label>
                                    <input align=" center" class="controls3" type="file" name="comprobante" accept="image/*"
                                    id="comprobante" placeholder="Ingresa hola salida">
                                @error('comprobante')
                                    <br>
                                    <smal>*{{ $message }}</smal>
                                @enderror
                                </div>
                                <div class="imagen">
                                    <img src="{{ asset('img/qr.jpeg') }}" width="600px" height="600px">

                                </div>
                                <div>
                <form action="{{ route('pagoqr.pdf') }}" method="GET">
                                    <input class="boton" id="registro" type="submit" name="registro"
                                        placeholder="Registrar">
                                    <p id="contar2"></p>
                                </div>
                </form>

                        </div>


                        <button class="boton2" type="button" id="pro" name="pro">calcular</button>
                        <h5 hidden>valores</h5>
                        <ul id="lista" class="list-group"></ul>
                   </form>
                    </main>

                 </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var boton = document.getElementById('pro');
        var lista = document.getElementById('lista');
        var checks = document.querySelectorAll('.meta');
        var cont = document.getElementById('contar2');
        var contador = 0;
        var contar = 100;
        boton.addEventListener('click', function() {

            //obtencion de valores de los meses para la suma del
            num1 = document.getElementById('ene').value;
            num2 = document.getElementById('feb').value;
            num3 = num1 + num2;


            checks.forEach((e) => {
                //contador = 100+contador;
                if (e.checked == true) {

                    console.log(e.value);
                    contador = contador + 100;


                } else {

                }


            });
            var total = contador;
            document.getElementById('monto').value = contador;
            contador = 0;



        });
    </script>
</body>


</html>
