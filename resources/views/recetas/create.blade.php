<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Receta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('recetas.store')}}" method="post" enctype="multypart/form-data">
                @csrf

                <div class="modal-body">

                    <label for="id_doctor">Doctor</label>
                    <select name="id_doctor" id="id_doctor" class="form-control">
                        @foreach($doctores as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->nombre}}</option>
                        @endforeach
                    </select>

                    <label for="id_paciente">Paciente</label>
                    <select name="id_paciente" id="id_paciente" class="form-control">
                        @foreach($pacientes as $paciente)
                        <option value="{{$paciente->id}}">{{$paciente->numero_ambulatorio}}</option>
                        @endforeach
                    </select>

                    <label for="id_apoyo">Apoyo</label>
                    <select name="id_apoyo" id="id_apoyo" class="form-control">
                        @foreach($apoyos as $apoyo)
                        <option value="{{$apoyo->id}}">{{$apoyo->nombre}}</option>
                        @endforeach
                    </select>

                    <label for="motivo">Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control">

                    <label for="fecha_emision">Fecha de Emisión</label>
                    <input type="date" name="fecha_emision" id="fecha_emision">


               
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </div>
        </div>
        </form>
    </div>
</div>