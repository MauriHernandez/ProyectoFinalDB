@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br> <br>
        <h1>Apoyos Registrados</h1>
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
                        <th scope="col">Fecha de Limite</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apoyos as $apoyo)
                    <tr>
                        <td scope="row">{{$apoyo->id}}</td>
                        <td>{{$apoyo->nombre}}</td>
                        <td>{{$apoyo->descripcion}}</td>
                        <td>{{$apoyo->fechaLimite}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$apoyo->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete {{$apoyo->id}}">
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
    <div class="col-md-2"></div>
</div>

@endsection
