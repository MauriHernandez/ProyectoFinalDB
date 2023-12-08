
  <!-- Modal edit -->
  <div class="modal fade" id="edit {{$medicamento->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Medicamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('medicamentos.update', $medicamento->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('put')
        <div class="modal-body">
        <label for="nombre">Nombre de Medicamento</label>
      <input type="text" name ="nombre" id="nombre" class="form-control" value="{{$medicamento->nombre}}">
      <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$medicamento->descripcion}}">
                    <label for="fechaCaducidad">Fecha de Caducidad</label>
                    <input type="date" name="fechaCaducidad" id="fechaCaducidad" value="{{$medicamento->fechaCaducidad}}">

                    <label for="lote">Lote</label>
                    <input type="number" name="lote" id="lote" value="{{$medicamento->lote}}">
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
  <div class="modal fade" id="delete {{$medicamento->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar medicamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('medicamentos.destroy', $medicamento->id)}}" method="post" enctype="multypart/form-data">
  @csrf
  @method('DELETE')
        <div class="modal-body">
    Eliminar medicamento {{$medicamento->nombre}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
      </form>
    </div>
  </div>