<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Citas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('citas.store')}}" method="post" enctype="multypart/form-data">
                @csrf
                <div class="modal-body">

                    <label for="id_doctor">Doctor</label>
                    <select name="id_doctor" id="id_doctor" class="form-control">
                        @foreach($doctores as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->nombre}}</option>
                        @endforeach
                    </select>

                    <label for="id_paciente">Doctor</label>
                    <select name="id_paciente" id="id_paciente" class="form-control">
                        @foreach($pacientes as $paciente)
                        <option value="{{$paciente->id}}">{{$paciente->numero_ambulatorio}}</option>
                        @endforeach
                    </select>

                    <label for="numero_afiliacion_paciente">Número de Identificación</label>
                    <input type="text" name="numero_afiliacion_paciente" id="numero_afiliacion_paciente" class="form-control">
                    <label for="motivo_cita">Motivo de consulta</label>
                    <input type="text" name="motivo_cita" id="motivo_cita" class="form-control">
                  <label for="fecha_cita">Fecha de Cita</label>
                    <input type="date" name="fecha_cita" id="fecha_cita">
                    <label for="sala_consulta">Sala de Consulta</label>
                    <select name="sala_consulta" id="sala_consulta">
                        <option value="Sala 1-A">Sala 1-A</option>
                        <option value="Sala 1-B">Sala 1-B</option>
                        <option value="Sala 2-A">Sala 2-A</option>
                        <option value="Sala 2-B">Sala 2-B</option>
                    </select>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </div>
        </form>
    </div>
</div>