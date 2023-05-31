<section class="form-register">

    <div>
        <!-- class="form-control -->

  <form action='{{ route('registroCliente.store') }}'  method="post" class="form-register" id="form1">
    @csrf
    <div class="form-group">
          <center><h4>REGISTRO DE CLIENTE</h4></center>
      </div>

      <!-- Grupo: nombre -->
        <div class="formulario_grupo" id="grupo_nombre">
            <label for="nombre" class="formulario_label">Nombre:</label>
            <div class="formulario_grupo-input">
                <input type="text" class="formulario_input" name="name" id="name"
                    placeholder="Ingrese su nombre completo">
                <i class="formulario_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">El nombre debe tener al menos 2 caracteres y maximo 50 caracteres y
                solo puede contener letras y espacio.</p>
        </div>

        <!-- Grupo: telefono -->
        <div class="formulario_grupo" id="grupo_telefono">
            <label for="telefono" class="formulario_label">Telefono o celular:</label>
            <div class="formulario_grupo-input">
                <input type="tel" class="formulario_input" name="telefono" id="telefono"
                    placeholder="Ingrese el numero de telefono o celular">
                <i class="formulario_validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">El telefono o celular solo puede contener numeros y el minimo son 7
                caracteres y maximo son 8 dígitos.</p>
        </div>

        <div>
            <!-- Grupo: correo electroinico -->
            <div class="formulario_grupo" id="grupo_correo">
                <label for="correo" class="formulario_label">Correo electronico:</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="email" id="email"
                        placeholder="Ingrese su correo electronico">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error" id="p1">El correo solo puede contener letras, numeros,
                    puntos, guiones, guion bajo y solo se permite los dominios (gmail, hotmail y outlook).</p>
                <p class="formulario_input-error2" id="p2">El correo ingresado ya esta registrado, ingrese
                    un correo diferente.</p>

            </div>
            <div class="formulario_grupo" id="grupo_correo">
                <label for="correo" class="formulario_label">Direccion de domicilio:</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="direccion" id="direccion"
                        placeholder="Ingrese su correo electronico">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error" id="p1">El correo solo puede contener letras, numeros,
                    puntos, guiones, guion bajo y solo se permite los dominios (gmail, hotmail y outlook).</p>
                <p class="formulario_input-error2" id="p2">El correo ingresado ya esta registrado, ingrese
                    un correo diferente.</p>

            </div>
            <div>

                <div class="formulario_grupo-input">
                    <label for="Contraseña" class="formulario_label">Contraseña:</label>
                    <input type="password" class="formulario_input" id="password" name="password" spellcheck="false"
                        placeholder="Contraseña" required title="ingrese contraseña">
                </div>
            </div>



            <div>
                <label for="correo" class="formulario_label">Seleccione el tipo de plaza:</label>
                <select class="formulario_input" name="tipo_plaza" id="tipo_plaza">
                    <option value="muy grande" selected>Pequeño</option>
                    <option value="grande">Mediano</option>
                    <option value="mediano">Grande</option>
                </select>
            </div>
            <div>

                <center>
                    <h4>Registro Vehiculo Principal</h4>
                </center>

            </div>
            <!-- Grupo: Modelo -->
            <div class="formulario_grupo" id="grupo_apellido">
                <label for="apellido" class="formulario_label">Marca de Vehiculo:</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="marca" id="marca"
                        placeholder="Ingrese la del Marca de Vehiculo">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">El modelo debe tener al menos 2 caracteres maximo 50 caracteres y
                    puede contener letras y espacio.</p>
            </div>
            <div class="formulario_grupo" id="grupo_apellido">
                <label for="apellido" class="formulario_label">Modelo de Vehiculo:</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="modelo" id="modelo"
                        placeholder="Ingrese el Modelo de Vehiculo">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">El modelo debe tener al menos 2 caracteres maximo 50 caracteres y
                    puede contener letras y espacio.</p>
            </div>
            <div class="formulario_grupo" id="grupo_apellido">
                <!-- Grupo: placa -->
                <label for="apellido" class="formulario_label">placa:</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="placa" id="placa"
                        placeholder="Ingrese el numero de placa">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">la placa de vehiculo debe tener al menos 6 caracteres y maximo 10
                    caracteres y puede contener letras y espacio.</p>
            </div>
            <div class="formulario_grupo" id="grupo_apellido">
                <!-- Grupo: placa -->
                <label for="apellido" class="formulario_label">Color:</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="color" id="color"
                        placeholder="Ingrese el Color del vehiculo">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">la placa de vehiculo debe tener al menos 6 caracteres y maximo 10
                    caracteres y puede contener letras y espacio.</p>
            </div>
            <div class="formulario_grupo" id="grupo_apellido">
                <!-- Grupo: placa -->
                <label for="apellido" class="formulario_label">Altura (metros):</label>
                <div class="formulario_grupo-input">
                    <input type="number" step="0.01" class="formulario_input" name="altura" id="altura"
                        placeholder="Ingrese Altura del vehiculo">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">la placa de vehiculo debe tener al menos 6 caracteres y maximo 10
                    caracteres y puede contener letras y espacio.</p>
            </div>
            <div class="formulario_grupo" id="grupo_apellido">
                <!-- Grupo: placa -->
                <label for="apellido" class="formulario_label">Anchura (metros):</label>
                <div class="formulario_grupo-input">
                    <input type="number" step="0.01" class="formulario_input" name="anchura" id="anchura"
                        placeholder="Ingrese Anchura del vehiculo">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">la placa de vehiculo debe tener al menos 6 caracteres y maximo 10
                    caracteres y puede contener letras y espacio.</p>
            </div>
            <div class="formulario_grupo" id="grupo_apellido">
                <!-- Grupo: placa -->
                <label for="apellido" class="formulario_label">Longitud (metros):</label>
                <div class="formulario_grupo-input">
                    <input type="number" step="0.01" class="formulario_input" name="longitud" id="longitud"
                        placeholder="Ingrese Longitud">
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">la placa de vehiculo debe tener al menos 6 caracteres y maximo 10
                    caracteres y puede contener letras y espacio.</p>
            </div>
            <div class="formulario_grupo" id="grupo_apellido">
                <!-- Grupo: placa -->

                <div class="formulario_grupo-input">
                    <input type="checkbox" class="form-check-input" name="soat" id="soat">
                    <label class="formulario_label" for="soat">
                        Tiene Soat?
                    </label>
                    <i class="formulario_validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario_input-error">la placa de vehiculo debe tener al menos 6 caracteres y maximo 10
                    caracteres y puede contener letras y espacio.</p>
            </div>
            <!-- Grupo: boton-->
            <div class="formulario_grupo formulario_grupo-btn-enviar">
                <button type="submit" class="formulario_btn">Registrar</button>
                <a href="{{ route('dashboard', ['id' => 1]) }}" class="back_btn"><b>Atrás</b></a>
            </div>
            <!-- Grupo: mensaje error-->
            <div class="formulario_mensaje" id="formulario_mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
                    correctamente. </p>
            </div>

            </form>



</section>
