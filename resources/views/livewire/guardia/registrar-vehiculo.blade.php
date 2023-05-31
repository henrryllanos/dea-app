<div class="card">

    <div class="card-body">
        <div>
            <center>
                <h3 class="card-title" id="titulo">REGISTRO DE ENTRADA Y SALIDA</h3>
            </center>
        </div>
        <div class="input-group">
            <input wire:model.debounce.500ms="search" type="text" class="form-control" placeholder="Buscar Placa">
        </div>
        <ul class="list-group">
            @foreach ($vehiculos as $vehiculo)
                <button type="button" id='{{ $vehiculo->id }}'class="list-group-item list-group-item-action">
                    {{ $vehiculo->placa }}
                </button>
            @endforeach
        </ul>

        <br>
        <div class="card" id="custom">
            <div class="card-body">


                <form class="formulario" id="formulario" enctype="multipart/form-data" name="f1">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Placa del Vehiculo</label>
                        <input type="text" class="form-control" id="placa">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha</label>
                        <input type="date" class="form-control" id="dateinput">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiempo</label>
                        <input type="time" class="form-control" id="timeinput">

                    </div>
                    <br>
                    <div class="formulario_grupo formulario_grupo-btn-enviar">
                        <button class="btn btn-primary" onclick="generarPlaca()">Submit</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<script>
    const placa = document.getElementById("placa");
    const date = document.getElementById("dateinput");
    const time = document.getElementById("timeinput");



    const botones = document.querySelectorAll('button');


    botones.forEach(boton => {
        boton.addEventListener('click', function() {
            //generarPlaca();
            //alert(`El botón con id ${this.id} ha sido presionado y  su contenido es ${this.textContent}`);
            const fechaActual = new Date();
            var currentDate = fechaActual.toISOString().substring(0, 10);
            const hora = fechaActual.getHours().toString().padStart(2, '0');
            const minutos = fechaActual.getMinutes().toString().padStart(2, '0');
            const segundos = fechaActual.getSeconds().toString().padStart(2, '0');
            const tiempoActual = `${hora}:${minutos}`;
            time.value = tiempoActual;
            date.value = currentDate;
            placa.value = this.textContent.trim();
        });
    });

    function generarPlaca() {

        let letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        let numeros = '0123456789';

        let primeraLetra = letras.charAt(Math.floor(Math.random() * letras.length));
        let segundaLetra = letras.charAt(Math.floor(Math.random() * letras.length));
        let tercerLetra = letras.charAt(Math.floor(Math.random() * letras.length));
        let numero1 = numeros.charAt(Math.floor(Math.random() * numeros.length));
        let numero2 = numeros.charAt(Math.floor(Math.random() * numeros.length));
        let numero3 = numeros.charAt(Math.floor(Math.random() * numeros.length));
        placa.value = `${primeraLetra}${segundaLetra}${tercerLetra}-${numero1}${numero2}${numero3}`;
    }
</script>
