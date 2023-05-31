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
    <link href="{{ asset('css/comentarios.css') }}" rel="stylesheet">
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
                    
                    @if (session('status'))
                    <div class="alert alert-success">
                        <strong>{{session('status')}}</strong>
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
                    <main>
                        <h1 id="titulo">Bienvenido</h1>
                        <br>
                        <h4>Anuncios</h4>
                         <?php
                            $conexion=mysqli_connect("localhost","root","","prueba_tis");
                            $resultado= mysqli_query($conexion, 'SELECT * FROM anuncios');

                            while ($comentario = mysqli_fetch_object($resultado)) {
                                ?>
                            <div class="lead">
                                  
                                <b class="anuncio"><?php echo($comentario->nombre); ?> 
                                </b>
                                <br>
                                <p class="fecha">
                                   fecha : <?php echo($comentario->created_at);?> 
                                   </p>
                                <h4>Notifica a los usuarios:</h4>
                                
                                <p class="anuncio2">
                                  <?php echo ($comentario->comentario);?>
                                  </p>
                               
                                <hr />

                               <?php
                              }
                                                ?>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
