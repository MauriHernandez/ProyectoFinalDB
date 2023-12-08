@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" align="center">
        <br> <br>
        <h1>Apoyos entregados</h1>
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
                        <th scope="col">Paciente</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Apoyo</th>
                        <th scope="col">Fecha de Emisión</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($recetas as $receta)
                    <tr class="">
                        <td scope="row">{{$receta->id}}</td>
                        <td>{{$receta->Paciente->nombre}}</td>
                        <td>{{$receta->Doctor->nombre}}</td>
                        <td>{{$receta->Apoyo->nombre}}</td>
                        <td>{{$receta->fecha_emision}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$receta->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete {{$receta->id}}">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('recetas.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('recetas.create')
    </div>


    <div class="col-md-2"></div>
</div>



@endsection