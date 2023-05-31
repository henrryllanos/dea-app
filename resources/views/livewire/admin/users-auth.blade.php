


<div class="container-xl px-4 mt-4">
    
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Foto de Perfil</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <div class="thumbnail">
                        <img class="img-thumbnail" src="{{ asset($user->foto_perfil) }}" alt="" title="">
                    </div>
                    <!-- Profile picture upload button-->
                    
                </div>
            </div>
            
        </div>
        <div class="col-xl-8">

            <div class="card mb-4">
                <div class="card-header">Datos Personales</div>
                <div class="card-body">
                    <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4 pb-2">
                            <label class="form-label" for="name">Nombre Completo</label>     
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="mb-4 pb-2">
                            <label class="form-label" for="email">email</label>     
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="mb-4 pb-2">
                            <label class="form-label" for="telefono">Telefono</label>     
                            <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ $user->telefono }}">
                        </div>
                        
                        <div class="mb-4 pb-2">
                            <label class="form-label" for="fecha_nac">Fecha de nacimiento</label>     
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{ $user->fecha_nac }}">
                        </div>   
                        <div class="mb-4 pb-2">
                            <label class="form-label" for="fecha_nac">Direccion de domicilio</label>     
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $user->direccion }}">
                        </div> 
                        <div class="mb-4 pb-2">
                            <label class="form-label" for="fecha_nac">Foto de perfil</label>     
                            <input type="file" class="form-control" name="foto_perfil"id="foto_perfil" accept="image/*">
                        </div>    
                        <div class="mb-4 pb-2">
                    
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese nueva contraseña">
                        </div>    
                                  
                        <button class=" btn btn-primary" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>