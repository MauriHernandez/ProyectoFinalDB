<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('usuarios.store')}}" method="post" enctype="multypart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="correo_electronico">Correo Electrónico</label>
                    <input type="text" name="correo_electronico" id="correo_electronico" class="form-control">
                    <label for="contraseña">Correo Electrónico</label>
                    <input type="password" name="contraseña" id="contraseña" class="form-control">
                    <label for="perfil_id">Perfil</label>
                    <select name="perfil_id" id="perfil_id" class="form-control">
                    @foreach($perfiles as $perfil)
                        <option value="{{$perfil->id}}">{{$perfil->nombre_perfil}}</option>
                        @endforeach
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