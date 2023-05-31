
<?php
$nombres = $_GET['nombre'];
$detalle = $_GET['detalle'];
$ci = $_GET['ci'];
$Monto = $_GET['monto'];
?>
<link href="{{ asset('css/pago.css') }}" rel="stylesheet">
<link href="{{ asset('css/pdf.css') }}" rel="stylesheet">
<link href="{{ asset('img/qr.jpeg') }}" rel="stylesheet">

<h1 align="center" class="titulo3" >Comprobante de pago </h1>

<br>
<br>
<br>
<h1>Empresa DEA S.R.L.</h1>

<p class="subtitulos2">El nombre es: <?php echo $nombres ;?> </p>
<br>

<p class="subtitulos2">El motivo del pago es: <?php echo $detalle ;?> </p>
<br>

<p class="subtitulos2">El NIT o CI es: <?php echo $ci ;?> </p>
<br>

<p class="subtitulos2">El Monto es: <?php echo $Monto ;?> </p>


<h2>Gracias por confiar en nuestra empresa</h2>
<h4 align = "center">Para mas información comunicarse al nro 800-9000-810</h4>
<script>
     let hoy =new Date();
     let dia = hoy.getDate();
     let mes= hoy.getMonth();
     let agnio = hoy.getFullYear();

     dia = ('0' + dia).slice(-2);
     mes = ('0' + mes).slice(-2);
     let formato2 = ´${dia}/${mes}/${agnio}´;
     console.log(formato2);
    </script>
