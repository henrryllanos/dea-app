<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/style-asignacion.css') }}" rel="stylesheet">
    <title>Iniciar Sesion</title>
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Esta descripción es la que aparece en los buscadores debajo de la URL" />

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800&display=swap" rel="stylesheet">
	<title>Registro</title>
</head>
	<main>
		<h1>Formulario de Asignacion</h1>
		<form>
			<div class='field'>
				<label>Nombre</label>
				<input name='nombre' type='name' required value="Nombre" placeholder='Nombre' autocomplete />
			</div>
			<div class='field'>
				<label>cedula de identidad</label>
				<input name='cedula' type='search' required value="ingrese su ci" placeholder='ingrese su ci'autocomplete />
			</div>
			<div class='field'>
				<label>Estado laboral</label>
				<select name='estadoLaboral' required>
					<option selected disabled>Sel. una opción</option>
					<option>administrativo</option>
					<option>operador</option>
					<option>seguridad</option>
				</select>
			</div>
			<div class='field'>
				<label>Elija turno</label>
				<select name='estadoLaboral' required>
					<option selected disabled>Sel. una opción</option>
					<option>06:00 - 13:30</option>
					<option>13:30 - 22:00</option>
				</select>
				
			</div>
			<div class='field'>
				<label>Elija dias de trabajo</label>
				<select name='estadoLaboral' required>
					<option selected disabled>Sel. una opción</option>
					<option>LUNES</option>
					<option>MARTES</option>
					<option>MIERCOLES</option>
                    <option>JUEVES</option>
                    <option>VIERNES</option>
                    <option>SABADO</option>
				</select>
			</div>

			<div class='submit'>
					<button><a href="registroAdministrativo.html" class="submit"><b>ASIGNARME</b></a> </button>
                    <button><a href="login.html" class="back_btn"><b>ATRAS</b></a> </button>
			</div>
		</form>
	</main>
</body>

</html>

