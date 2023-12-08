
  <!-- Modal edit -->
  <div class="modal fade" id="edit {{$cita->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('citas.update', $cita->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('put')
  <div class="modal-body">

  <label for="id_paciente">Paciente</label>                 
  <select name="id_paciente" id="id_paciente" class="form-control">
                    @foreach($pacientes as $paciente)
                    @if($paciente->id == $cita->id_paciente)

                        <option value="{{$paciente->id}}"selected >{{$paciente->numero_ambulatorio}}</option>
                        @else
                        <option value="{{$paciente->id}}">{{$paciente->ambulatorio}}</option>
                        @endif
                        @endforeach
                    </select> 

                    <label for="id_doctor">Doctor</label>                 
  <select name="id_doctor" id="id_doctor" class="form-control">
                    @foreach($doctores as $doctor)
                    @if($doctor->id == $cita->id_doctor)

                        <option value="{{$doctor->id}}"selected >{{$doctor->nombre}}</option>
                        @else
                        <option value="{{$doctor->id}}">{{$doctor->nombre}}</option>
                        @endif
                        @endforeach
                    </select> 



                    <label for="numero_afiliacion_paciente">Número de Identificación</label>
                    <input type="text" name="numero_afiliacion_paciente" id="numero_afiliacion_paciente" class="form-control" value="{{$cita->numero_afiliacion_paciente}}">
                    <label for="motivo_cita">Motivo de consulta</label>
                    <input type="text" name="motivo_cita" id="motivo_cita" class="form-control"value="{{$cita->motivo_paciente}}">
                  <label for="fecha_cita">Fecha de Cita</label>
                    <input type="date" name="fecha_cita" id="fecha_cita"value="{{$cita->fecha_cita}}">
                    <label for="sala_consulta">Sala de Consulta</label>
                    <select name="sala_consulta" id="sala_consulta">
                      <option value="{{$cita->sala_consulta}}"></option>
                        <option value="Sala 1-A">Sala 1-A</option>
                        <option value="Sala 1-B">Sala 1-B</option>
                        <option value="Sala 2-A">Sala 2-A</option>
                        <option value="Sala 2-B">Sala 2-B</option>
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
  <div class="modal fade" id="delete {{$cita->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('citas.destroy', $cita->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('DELETE')
        <div class="modal-body">
    Eliminar perfil {{$cita->id}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
    </div>
  </div>