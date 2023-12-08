<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Apoyo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('apoyos.store')}}" method="post" enctype="multypart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="nombre">Nombre de Apoyo</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">

                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control">
                    <label for="fechaLimite">Fecha de Caducidad</label>
                    <input type="date" name="fechaLimite" id="fechaLimite">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </div>
        </form>
    </div>
</div>