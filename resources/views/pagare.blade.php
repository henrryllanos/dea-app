<?php
 $conexion=mysqli_connect("localhost","root","","prueba_tis");
                            $resultado= mysqli_query($conexion, 'SELECT * FROM users');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/comentarios.css') }}" rel="stylesheet">
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
    <link href="{{ asset('css/controlpagos.css') }}" rel="stylesheet">
    <link href="{{ asset('img/qr.jpeg') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-font.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}" />
    
    <title>Control de pagos</title>
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
             <h1 class ="titulo1">Control de pagos</h1>
                <a href="{{ asset('resources/views/registroCliente.blade.php') }}" class="btn_new">Crear usuario</a>
                
                <table class="columns">
                    <tr>
                        <th>FECHA</th>
                        <th>DETALLE</th>
                        <th>EFECTIVO</th>
                        <th>ESTADO</th>
                        <th>CANTIDAD</th>

                       </tr>
                    <?php
                       $query = mysqli_query($conexion, "SELECT id, name, email, cargo FROM  users");
                       $result = mysqli_num_rows($query);
                       if($result > 0){
                           while($data = mysqli_fetch_array($query)){
                           
                           ?>
                            <tr>
                          <td><?php echo $data["id"]?></td>
                          <td><?php echo $data["name"]?></td>
                          <td><?php echo $data["email"]?></td>
                          <td><?php echo $data["cargo"]?></td>
                          <td>
                            
                            <a class = "link_detalle" href="#">Ver detalle</a>
                          </td>
                        </tr>
                        <?php
                           }
                       }
                    ?>
                       
                       


                    </table>
                </div>
    
</body>
</html>