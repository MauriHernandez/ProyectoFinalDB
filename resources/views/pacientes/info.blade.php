
  <!-- Modal edit -->
  <div class="modal fade" id="edit {{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('pacientes.update', $paciente->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('put')
  <div class="modal-body">

  <label for="usuario_id">Usuario</label>                 
  <select name="usuario_id" id="usuario_id" class="form-control">
                    @foreach($usuarios as $usuario)
                    @if($usuario->usuario_id == $paciente->usuario_id)

                        <option value="{{$usuario->id}}"selected >{{$usuario->correo_electronico}}</option>
                        @else
                        <option value="{{$usuario->id}}">{{$usuario->correo_electronico}}</option>
                        @endif
                        @endforeach
                    </select> 


                    </select>
                    <label for="nombre">Nombre (s)</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"value="{{$paciente->nombre}}">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$paciente->apellido_paterno}}">
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{$paciente->apellido_materno}}">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$paciente->fecha_nacimiento}}">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero">
                        <option value="{{$paciente->genero}}>">{{$paciente->genero}}</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                    <label for="curp">CURP</label>
                    <input type="text" name="curp" id="curp" class="form-control" value="{{$paciente->curp}}">
                    <label for="telefono">Número Celular</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{$paciente->telefono}}">
                    <label for="ocupacion">Ocupación</label>
                    <input type="text" name="ocupacion" id="ocupacion" class="form-control" value="{{$paciente->ocupacion}}">
                    <label for="calle">Calle</label>
                    <input type="text" name="calle" id="calle" class="form-control" value="{{$paciente->calle}}">
                    <label for="numero_exterior">Número Exterior</label>
                    <input type="number" name="numero_exterior" id="numero_exterior" class="form-control" value="{{$paciente->numero_exterior}}">
                    <label for="numero_interior">Número Interior</label>
                    <input type="number" name="numero_interior" id="numero_interior" class="form-control" value="{{$paciente->numero_interior}}">
                    <label for="cod_postal">Código Postal</label>
                    <input type="number" name="cod_postal" id="cod_postal" class="form-control" value="{{$paciente->cod_postal}}">
                    <label for="comunidad">Comunidad</label>
                    <input type="text" name="comunidad" id="comunidad" class="form-control" value="{{$paciente->comunidad}}">
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad" class="form-control" value="{{$paciente->localidad}}">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control" value="{{$paciente->estado}}">
                    <label for="numero_ambulatorio">Número Ambulatorio</label>
                    <input type="text" name="numero_ambulatorio" id="numero_ambulatorio" class="form-control" value="{{$paciente->numero_ambulatorio}}">
                    <label for="nivel_ambulatorio">Nivel Ambulatorio</label>
                    <input type="text" name="nivel_ambulatorio" id="nivel_ambulatorio" class="form-control" value="{{$paciente->nivel_ambulatorio}}">
      









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
  <div class="modal fade" id="delete {{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('pacientes.destroy', $paciente->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('DELETE')
        <div class="modal-body">
    Eliminar perfil {{$paciente->id}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
    </div>
  </div>