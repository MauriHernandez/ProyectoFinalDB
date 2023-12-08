
  <!-- Modal edit -->
  <div class="modal fade" id="edit {{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('usuarios.update', $usuario->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('put')
  <div class="modal-body">
                    <label for="correo_electronico">Correo Electrónico</label>
                    <input type="text" name="correo_electronico" id="correo_electronico" class="form-control" value="{{$usuario->correo_electronico}}">
                    <label for="contraseña">Correo Electrónico</label>
                    <input type="password" name="contraseña" id="contraseña" class="form-control" value="{{$usuario->contraseña}}">


                    <label for="perfil_id">Perfil</label>                   
                    <select name="perfil_id" id="perfil_id" class="form-control">
                    @foreach($perfiles as $perfil)
                    @if($perfil->perfil_id==$usuario->perfil_id)

                        <option value="{{$perfil->id}}"selected >{{$perfil->nombre_perfil}}</option>
                        @else
                        <option value="{{$perfil->id}}">{{$perfil->nombre_perfil}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
      </form>
    </div>
  </div>























  <!-- Modal delete-->
  <div class="modal fade" id="delete {{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('usuarios.destroy', $usuario->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('DELETE')
        <div class="modal-body">
    Eliminar perfil {{$usuario->id}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
    </div>
  </div>