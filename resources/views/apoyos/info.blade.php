
  <!-- Modal edit -->
  <div class="modal fade" id="edit {{$apoyo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Apoyo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('apoyos.update', $apoyo->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('put')
        <div class="modal-body">
        <label for="nombre">Nombre de Apoyo</label>
      <input type="text" name ="nombre" id="nombre" class="form-control" value="{{$apoyo->nombre}}">
      <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$apoyo->descripcion}}">
                    <label for="fechaLimite">Fecha de Caducidad</label>
                    <input type="date" name="fechaLimite" id="fechaCaducidad" value="{{$apoyo->fechaLimite}}">

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
  <div class="modal fade" id="delete {{$apoyo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Apoyo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('apoyos.destroy', $apoyo->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('DELETE')
        <div class="modal-body">
    Eliminar apoyo {{$apoyo->nombre}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
    </div>
  </div>