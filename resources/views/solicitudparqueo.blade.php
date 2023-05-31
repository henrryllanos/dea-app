<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="/public/css/style-solicitudparqueo.css">
    <script type="text/javascript" src="{{ asset('js/script-login.js') }}"></script>
    <link href="{{ asset('css/style-login.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>

</head>

<body>

    <div id="contenedor-flex">
        <!--<div id="contenedor-imagen">

          <!--<img src="{{ asset('img/planoparqueo3.jpg') }}" alt="description of myimage" width="105%" height="100%" >-
          <img src="/public/img/mapeo.png" alt="description of myimage" width="105%" height="100%" >


        </div>-->

        <div id="contenedor-lateral">
            <div id="contenedor-form">
                <a class="texto-encima" href="index.php"><strong>DEA</strong></a>
                <h1 id="titulo"><b>Solicitud de parqueo<b></h1>
                <p>Bienvenido a tu registro de solicitud de parqueo!!</p><br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-register" id="form">

            </div>
            <div class="group">
                <!-- <label>placa de vehiculo</label><br> -->
                <input type="text" id="correo" spellcheck="false" name="usuario"
                    placeholder="Ingrese placa de vehiculo"required title="placa de vehiculo">

            </div>
            <div class="group">
                <!-- <label>Correo Electronico</label><br> -->
                <input type="email" id="correo" spellcheck="false" name="usuario"
                    placeholder="Correo Electrónico"required pattern=".+@(gmail|hotmail|outlook).(com|es)"
                    title="ingrese correo electronico">

            </div>
            <div class="group">
                <!-- <label>Telefono</label><br> -->
                <input type="text" id="correo" spellcheck="false" name="usuario"
                    placeholder="Ingrese su telefono"required title="ingrese su telefono">

            </div>

            <div class="group">
                <!-- <label>modelo del Auto</label><br> -->
                <input type="text" id="correo" spellcheck="false" name="usuario"
                    placeholder="Ingrese modelo de automovil"required title="ingrese modelo del automovil">

            </div>
            <div class="group">
                <!-- <label>Lugar del Parqueo</label><br> -->
                <input type="text" id="correo" spellcheck="false" name="usuario"
                    placeholder="Ingrese lugar de parqueo"required title="ingrese lugar de parqueo">

            </div>
            <div class="group">
                <!-- <label>Especificaciones Escenciles</label><br> -->
                <input type="text" id="correo" spellcheck="false" name="usuario"
                    placeholder="Ingrese especificaciones escenciales"required
                    title="ingrese especificaciones escenciales">

            </div>

            <a id="form" id="correo"><br><br>

                <button href="javascript:genPDF()"class="button buttonBlue" name="entrar">Generar Listado</button>
                <script type="text/javascript" src="/public/js/jspdf.min.js"></script>
                <script type="text/javascript">
                    function genPDF() {
                        var doc = new jsPDF();
                        let mensaje = document.getElementById('form').value;
                        let mensaje = document.getElementById('correo').value;
                        doc.text(20, 20, mensaje);
                        doc.addPage();
                        doc.text(20, 20, 'Mi trabajo!!');
                        doc.save('Test.pdf');
                    }
                </script>
                <button type="submit" class="button buttonBlue" name="entrar">Registrar</button>

                </form>
        </div>
    </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/public/js/solicitud-parqueo.js"></script>

    <script>
        function mostrar() {
            document.getElementById('correoOcult').style.display = 'block';
            document.getElementById('telefonoOcult').style.display = 'block';
            document.getElementById('verifOcult').style.display = 'block';
        }
    </script>

</body>

</html>
