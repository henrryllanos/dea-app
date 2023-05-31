<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card">

        <div class="car-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un usuario">
        </div>
        @if ($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr> 

                        <td width="10px">{{$user->id}}</td>
                        <td  width: auto;>{{$user->name}}</td>
                        <td width: auto;>{{$user->email}}</td>
                       
                       
                        @if($user->roles->count())
                        <td>{{ implode(', ', $user->roles->pluck('name')->toArray()) }}</td>
                        @else
                           <td >No esta validado</td> 
                        @endif
                        <td width="10px">
                            <form action="{{ route('user.delete', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                   
                            </form>
                            
                           
                        </td>
                        <td width="10px">
                            <form action="{{route('asignarRoles.edit',$user->id)}}">
                                <button class="btn btn-info">Editar</button>
                            </form>
                           
                        </td>

                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
        @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
        @endif
        
    </div>
</div>
