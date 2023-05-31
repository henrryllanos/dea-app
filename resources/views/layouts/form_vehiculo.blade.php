  
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-7">

                <div class="card card-registration card-registration-2" style="border-radius: 15px;">

                    <div class="card-body p-5 bg-indigo">
                        <form action='{{ route('registrarVehiculo.store', $user->id) }}' method="post" class="form-register"
                            id="form1" enctype="multipart/form-data">
                            @csrf                    
                                <div class="p-5">
                                    <h3 class="fw-normal mb-5" style="color: #021730">Datos del Vehiculo
                                    </h3>
                                    <div class="mb-4 pb-2">
                                        <label class="form-label" for="form3Examplev5">Seleccione una foto de
                                            su Vehiculo</label>
                                        <input type="file" class="form-control"
                                            name="foto_vehiculo"id="foto_vehiculo" accept="image/*"
                                            class="@error('foto_vehiculo') is-invalid @enderror" />
                                        @error('foto_vehiculo')
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
                            
                                    <div class="mb-4 pb-2">
                                        <div class="form-outline form-white">
                                            <label class="form-label" for="form3Examplea2">Marca</label>
                                            <input type="text" name="marca" id="form3Examplea2"
                                                class="form-control form-control-lg"
                                                class="@error('marca') is-invalid @enderror" />
                                            @error('marca')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="mb-4 pb-2">
                                        <div class="form-outline form-white">
                                            <label class="form-label" for="form3Examplea3">Modelo</label>
                                            <input type="text" name="modelo" id="form3Examplea3"
                                                class="form-control form-control-lg"
                                                class="@error('modelo') is-invalid @enderror" />
                                            @error('modelo')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">
                            
                                            <div class="form-outline form-white">
                                                <label class="form-label" for="form3Examplea4">Placa</label>
                                                <input type="text" name="placa" id="form3Examplea4"
                                                    class="form-control form-control-lg"
                                                    class="@error('placa') is-invalid @enderror" />
                                                @error('placa')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                            
                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">
                            
                                            <div class="form-outline form-white">
                                                <label class="form-label" for="form3Examplea5">Color</label>
                                                <input type="text" name="color" id="form3Examplea5"
                                                    class="form-control form-control-lg"
                                                    class="@error('color') is-invalid @enderror" />
                                                @error('color')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                            
                                        </div>
                                    </div>
                            
                            
                                    <div class="row">
                                        <div class="col-md-4 mb-4 pb-2">
                            
                                            <div class="form-outline form-white">
                                                <label class="form-label" for="form3Examplea4">Altura
                                                    (metros)</label>
                                                <input type="number" name="altura" id="form3Examplea4"
                                                    class="form-control form-control-lg"
                                                    class="@error('altura') is-invalid @enderror" />
                                                @error('altura')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                            
                                        </div>
                                        <div class="col-md-4 mb-4 pb-2">
                            
                                            <div class="form-outline form-white">
                                                <label class="form-label" for="form3Examplea5">Anchura
                                                    (metros)</label>
                                                <input type="number" name="anchura" id="form3Examplea5"
                                                    class="form-control form-control-lg"
                                                    class="@error('anchura') is-invalid @enderror" />
                                                @error('anchura')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                            
                                        </div>
                                        <div class="col-md-4 mb-4 pb-2">
                            
                                            <div class="form-outline form-white">
                                                <label class="form-label" for="form3Examplea5">Longitud
                                                    (metros)</label>
                                                <input type="number" name="longitud" id="form3Examplea5"
                                                    class="form-control form-control-lg"
                                                    class="@error('longitud') is-invalid @enderror" />
                                                @error('longitud')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                            
                                        </div>
                                    </div>
                                    <div class="form-outline form-white">
                                                <label class="form-label" for="form3Examplea4">Mensualidad</label>
                                                <input type="number" name="mensualidad" id="form3Examplea4" values=100
                                                    class="form-control form-control-lg"
                                                    class="@error('mensualidad') is-invalid @enderror" />
                                                @error('mensualidad')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                            
                            
                            
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="soat"
                                                value="" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Tiene Soat?
                                            </label>
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

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


