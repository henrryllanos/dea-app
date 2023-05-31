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
    <link href="{{ asset('css/tarifa.css') }}" rel="stylesheet">
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
                   
                        <h1 align="center" class="titulo3">ASIGNAR TARIFA</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2>Ingresar datos para asignar tarifa</h2>
                        <br>
                    

                        <div class="card-body">
                            <form action="{{ route('pagoqr.store') }}" method="POST" enctype="multipart/form-data">
                             
                                @csrf
                                <h1 class="subtitulos2">Ingresar Nombre o usuario</h1>
                                
                                <input class="controls1 " id="nombre" type="search" name="nombre"
                                    placeholder="Ingresa nombre completo"  >
                                @error('nombre')
                                    <br>
                                    <smal>*{{ $message }}</smal>
                                @enderror
                                <br>
                                <br>
                                <h1 class="subtitulos2">Ingresar tipo de vehiculo </h1>
                                
                                <select class="lbl_pago" name="vehiculo" id="vehiculo">
                                      
                                        <option value="Moto">Moto</option>
                                        <option value="Automovil">Automovil</option>
                                        
                                    </select> 

                                @error('vehiculo')
                                    <
                                    <smal>*{{ $message }}</smal>
                                @enderror

                                
                                <br>
                                <br>
                                <div class="mb-3">
                                   <h1 class="subtitulos2">Ingresar tipo de pago</h1>
                                   
                                   <select class="lbl_pago" name="pago" id="pago">
                                      
                                        <option value="Mensual">Mensual</option>
                                        <option value="Diariamente">Diariamente</option>
                                        
                                    </select>   
                                </div>       

                                @error('pago')
                                    <br>
                                    <smal>*{{ $message }}</smal>
                                @enderror
                                


                                
                               

                                <h1 class="subtitulos2">Ingresar monto</h1>
                                <input class="controls1 " id="monto" type="number" name="monto"
                                    placeholder="Ingrese monto de pago" value=>
                                <br>
                                <br>


                                
                                <div>
                                    
                                
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
        var pago = document.getElementById('pago');
        var checks = document.querySelectorAll('.meta');
        var cont = document.getElementById('contar2');
        var contador = 0;
        var contar = 100;
        //document.getElementById('monto').value = 100;
        boton.addEventListener('click', function() {

            //obtencion de valores de los meses para la suma del
            num1 = document.getElementById('Mensual').value;
            num2 = document.getElementById('Diariamente').value;
            num3 = num1 + num2;
            
            document.getElementById('monto').value = 100;

            
                //contador = 100+contador;
                if (pago == num1) {

                    document.getElementById('monto').value = contador;

                } else {
                    document.getElementById('monto').value = contar;

                }
                document.getElementById('monto').value = contar;
        });
    </script>
</body>


</html>
