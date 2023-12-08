
  <!-- Modal edit -->
  <div class="modal fade" id="edit {{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('doctores.update', $doctor->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('put')
  <div class="modal-body">

  <label for="usuario_id">Usuario</label>                 
  <select name="usuario_id" id="usuario_id" class="form-control">
                    @foreach($usuarios as $usuario)
                    @if($usuario->usuario_id == $doctor->usuario_id)

                        <option value="{{$usuario->id}}"selected >{{$usuario->correo_electronico}}</option>
                        @else
                        <option value="{{$usuario->id}}">{{$usuario->correo_electronico}}</option>
                        @endif
                        @endforeach
                    </select> 


                    </select>
                    <label for="nombre">Nombre (s)</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"value="{{$doctor->nombre}}">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$doctor->apellido_paterno}}">
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{$doctor->apellido_materno}}">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$doctor->fecha_nacimiento}}">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero">
                        <option value="{{$doctor->genero}}>">{{$doctor->genero}}</option>
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                    <label for="curp">CURP</label>
                    <input type="text" name="curp" id="curp" class="form-control" value="{{$doctor->curp}}">
                    <label for="telefono">Número Celular</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{$doctor->telefono}}">
                    <label for="calle">Calle</label>
                    <input type="text" name="calle" id="calle" class="form-control" value="{{$doctor->calle}}">
                    <label for="numero_exterior">Número Exterior</label>
                    <input type="number" name="numero_exterior" id="numero_exterior" class="form-control" value="{{$doctor->numero_exterior}}">
                    <label for="numero_interior">Número Interior</label>
                    <input type="number" name="numero_interior" id="numero_interior" class="form-control" value="{{$doctor->numero_interior}}">
                    <label for="cod_postal">Código Postal</label>
                    <input type="number" name="cod_postal" id="cod_postal" class="form-control" value="{{$doctor->cod_postal}}">
                    <label for="comunidad">Comunidad</label>
                    <input type="text" name="comunidad" id="comunidad" class="form-control" value="{{$doctor->comunidad}}">
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad" class="form-control" value="{{$doctor->localidad}}">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control" value="{{$doctor->estado}}">
                    <label for="carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera" class="form-control" value="{{$doctor->carrera}}">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" name="especialidad" id="especialidad" class="form-control" value="{{$doctor->especialidad}}">
                    <label for="licencia">Cédula Profesional</label>
                    <input type="text" name="licencia" id="licencia" class="form-control" value="{{$doctor->licencia}}">
                    <label for="departamento">Departamento</label>
                    <input type="text" name="departamento" id="departamento" class="form-control" value="{{$doctor->departamento}}">









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
  <div class="modal fade" id="delete {{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('doctores.destroy', $doctor->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('DELETE')
        <div class="modal-body">
    Eliminar perfil {{$doctor->id}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
    </div>
  </div>