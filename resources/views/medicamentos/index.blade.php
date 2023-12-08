@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br> <br>
        <h1>Medicamentos Registrados</h1>
        <br>
        <div class="text-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                <i class="fas fa-plus"></i> Agregar
            </button>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha de Caducidad</th>
                        <th scope="col">Lote</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicamentos as $medicamento)
                    <tr>
                        <td scope="row">{{$medicamento->id}}</td>
                        <td>{{$medicamento->nombre}}</td>
                        <td>{{$medicamento->descripcion}}</td>
                        <td>{{$medicamento->fechaCaducidad}}</td>
                        <td>{{$medicamento->lote}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$medicamento->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete {{$medicamento->id}}">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('medicamentos.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('medicamentos.create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
