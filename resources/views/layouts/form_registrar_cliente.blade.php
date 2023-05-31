  
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-7">

                <div class="card card-registration card-registration-2" style="border-radius: 15px;">

                    <div class="card-body p-5 bg-indigo">
                        <form action='{{ route('registroCliente.update', $user->id) }}' method="post" class="form-register"
                            id="form1" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-0">
                                
                                    <div class="p-5 ">
                                        <h3 class="fw-normal mb-5" style="color: #021730;">Datos Personales</h3>
                                        <!--
                                            <div class="mb-4 pb-2">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option value="1">Title</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    <option value="4">Four</option>
                                                </select>
                                            </div>-->
                                        <div class="mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Examplev2">Nombre completo</label>
                                                <input type="text" name="name" id="form3Examplev2" value="{{$user->name}}"
                                                    class="form-control form-control-lg"
                                                    class="@error('name') is-invalid @enderror" />
                                                @error('name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Telefono</label>
                                                    <input type="tel" name="telefono" id="form3Examplev4"
                                                        class="form-control form-control-lg" value="{{$user->telefono}}"
                                                        class="@error('telefono') is-invalid @enderror" />
                                                    @error('telefono')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev4">Fecha de
                                                        nacimiento</label>
                                                    <input type="date" name="fecha" id="form3Examplev4"
                                                        class="form-control form-control-lg"
                                                        class="@error('fecha') is-invalid @enderror" />
                                                    @error('fecha')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>




                                        <div class="mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="form3Examplev4">Correo
                                                    electronico</label>
                                                <input type="email" name="email" id="form3Examplev4"
                                                    class="form-control form-control-lg" value="{{$user->email}}"
                                                    class="@error('email') is-invalid @enderror" />
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-4 pb-2 ">

                                                <div class="form-outline">
                                                    <div>
                                                        <label class="form-label" for="form3Examplev5">Direccion de
                                                            domicilio</label>
                                                        <input type="text" name="direccion" id="form3Examplev5"
                                                            class="form-control form-control-lg"
                                                            class="@error('direccion') is-invalid @enderror" />
                                                        @error('direccion')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>

                                            </div>
                                            <!--
                                                    <div class="col-md-6  ">
                                                    <br>
                                                    <select select class="form-select" aria-label="Default select example">
                                                        <option value="1">Employees</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                        <option value="4">Four</option>
                                                    </select>

                                                    </div>-->

                                            <div class="mb-4 pb-2">
                                                <label class="form-label" for="form3Examplev5">Seleccione una foto de
                                                    perfil</label>
                                                <input type="file" class="form-control"
                                                    name="foto_perfil"id="foto_perfil" accept="image/*"
                                                    class="@error('foto_perfil') is-invalid @enderror" />
                                                @error('foto_perfil')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <!--     <select class="form-select" name="tipo_plaza"
                                                    aria-label="Default select example">
                                                    <option value="1" disabled>Tipo de plaza</option>
                                                    <option value="muy grande" selected>Pequeño</option>
                                                    <option value="grande">Mediano</option>
                                                    <option value="mediano">Grande</option>
                                                </select>-->
                                            </div>

                                            <div class="mb4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Examplev5">Contraseña</label>
                                                    <div class="input-group mb-3">
                                                        <input type="password" name="password" id="password"
                                                            class="form-control form-control-lg" placeholder="Ingrese una nueva contraseña"
                                                            class="@error('password') is-invalid @enderror" />
                                                        <span class="input-group-text">
                                                            <i class="far fa-eye" id="togglePassword"
                                                                style="cursor: pointer;"></i></span>

                                                    </div>
                                                    @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb4">
                                                <div class="form-outline">
                                                    
                                                    <div class="input-group mb-3">

                                                        <input type="password" name="password_confirmation"
                                                            id="password_confirmation"
                                                            class="form-control form-control-lg" placeholder="Confirme la contraseña"
                                                            class="@error('password_confirmation') is-invalid @enderror" />
                                                        <span class="input-group-text">
                                                            <i class="far fa-eye" id="togglePassword2"
                                                                style="cursor: pointer;"></i></span>
                                                        @error('password_confirmation')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>    
                                    <div class="row">
                                        <div class="col-md-9 mb-4 pb-2">
        
                                        </div>
                                        <div class="col-md-3 mb-4 pb-2">
                                            <button type="submit" class="btn btn-primary btn-lg"
                                                data-mdb-ripple-color="dark">Registrar</button>
                                        </div>
                                    </div>                       
                            </div>

                            
                            <!--fin del form-->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const togglePassword2 = document.querySelector('#togglePassword2');
    const password = document.querySelector('#password');
    const password_confirmation = document.querySelector('#password_confirmation');
    togglePassword.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });

    togglePassword2.addEventListener('click', function(e) {
        // toggle the type attribute
        const type = password_confirmation.getAttribute('type') === 'password' ? 'text' : 'password';
        password_confirmation.setAttribute('type', type);

        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
