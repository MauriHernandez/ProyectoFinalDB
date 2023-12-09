@extends('welcome')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h1 class="text-center mb-4">Apoyos Registrados</h1>
            <div class="text-center mb-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                    <i class="fas fa-plus"></i> Agregar
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha de Límite</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($apoyos as $apoyo)
                        <tr>
                            <td>{{$apoyo->id}}</td>
                            <td>{{$apoyo->nombre}}</td>
                            <td>{{$apoyo->descripcion}}</td>
                            <td>{{$apoyo->fechaLimite}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#edit{{$apoyo->id}}">
                                    <i class="fas fa-edit"></i> Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete{{$apoyo->id}}">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('apoyos.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('apoyos.create')
        </div>
    </div>
</div>

@endsection
