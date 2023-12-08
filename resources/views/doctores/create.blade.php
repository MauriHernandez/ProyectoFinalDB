<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('doctores.store')}}" method="post" enctype="multypart/form-data">
                @csrf
                <div class="modal-body">

                    <label for="usuario_id">Doctor</label>
                    <select name="usuario_id" id="usuario_id" class="form-control">
                        @foreach($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{$usuario->correo_electronico}}</option>
                        @endforeach
                    </select>
                    <label for="nombre">Nombre (s)</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control">
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" class="form-control">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                    <label for="genero">Fecha de Nacimiento</label>
                    <select name="genero" id="genero">
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                    <label for="curp">CURP</label>
                    <input type="text" name="curp" id="curp" class="form-control">
                    <label for="telefono">Número Celular</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">
                    <label for="calle">Calle</label>
                    <input type="text" name="calle" id="calle" class="form-control">
                    <label for="numero_exterior">Número Exterior</label>
                    <input type="number" name="numero_exterior" id="numero_exterior" class="form-control">
                    <label for="numero_interior">Número Interior</label>
                    <input type="number" name="numero_interior" id="numero_interior" class="form-control">
                    <label for="cod_postal">Código Postal</label>
                    <input type="number" name="cod_postal" id="cod_postal" class="form-control">
                    <label for="comunidad">Comunidad</label>
                    <input type="text" name="comunidad" id="comunidad" class="form-control">
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad" class="form-control">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control">
                    <label for="carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera" class="form-control">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" name="especialidad" id="especialidad" class="form-control">
                    <label for="licencia">Cédula Profesional</label>
                    <input type="text" name="licencia" id="licencia" class="form-control">
                    <label for="departamento">Departamento</label>
                    <input type="text" name="departamento" id="departamento" class="form-control">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </div>
        </form>
    </div>
</div>