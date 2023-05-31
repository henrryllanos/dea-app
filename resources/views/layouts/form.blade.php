<div class="col-lg-8 col-xl-6">
    <div class="card rounded-3">
        <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registro Plantel Administrativo</h3>
            
            <form action='{{ route('registroAdministrativo.store') }}' method="POST"
                class="px-md-2">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Nombre completo</label>
                    <input type="text" id="form3Example1q" class="form-control"
                        name="name" class="@error('name') is-invalid @enderror" />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline datepicker">
                            <label for="exampleDatepicker1" class="form-label">Fecha de
                                nacimiento</label>
                            <input type="date" class="form-control" id="exampleDatepicker1"
                                name="fecha_nac" class="@error('fecha_nac') is-invalid @enderror" />

                            @error('fecha_nac')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="exampleDatepicker1" class="form-label">Elige un rol</label><br>
                        <select class="form-select" name="tipo">
                            <option value="Tipo" disabled>Tipo Administrativo</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                            
             
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">

                        <div class="form-outline datepicker">
                            <label for="exampleDatepicker1" class="form-label">Telefono</label>
                            <input type="tel" id="form3Example1q" name="telefono"
                                class="form-control"
                                class="@error('telefono') is-invalid @enderror" />


                            @error('telefono')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <label class="form-label" for="form3Example1q">Seleccione Turno</label><br>
                        <select class="form-select" name="turno">
                            <option value="1" disabled>Horario</option>
                            <option value="2">Matutino</option>
                            <option value="3">Nocturno</option>
                            <option value="4">Diario</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">

                    <label for="exampleDatepicker1" class="form-label">Correo electronico</label>
                    <input type="email" id="form3Example1q" class="form-control" name="email" class="@error('email') is-invalid @enderror" />
                    @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Direccion de domicilio</label>
                    <input type="text" id="form3Example1q" class="form-control"
                        name="direccion" class="@error('direccion') is-invalid @enderror" />
                        @error('direccion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                </div>
                <div class="form-outline">
                    <label class="form-label" for="form3Example1w">Contraseña</label>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password"
                            class="form-control form-control-lg" 
                            class="@error('password') is-invalid @enderror" />
                        <span class="input-group-text">
                            <i class="far fa-eye" id="togglePassword"
                                style="cursor: pointer;"></i></span>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                        

                </div>

                <div class="form-outline">
                    <label class="form-label" for="form3Example1w">Confirmar Contraseña</label>
                    <div class="input-group mb-3">
                                                        
                        <input type="password" name="password_confirmation"
                            id="password_confirmation" class="form-control form-control-lg" 
                            class="@error('password_confirmation') is-invalid @enderror" />
                            <span class="input-group-text">
                            <i class="far fa-eye" id="togglePassword2"
                            style="cursor: pointer;"></i></span>
                        @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div><br>


                <button type="submit" class="btn btn-success btn-lg mb-1">Crear usuario</button>

            </form>

        </div>
    </div>
</div>

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
