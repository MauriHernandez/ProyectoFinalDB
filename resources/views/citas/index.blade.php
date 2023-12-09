@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <h1 class="text-center mb-4">Citas Registradas</h1>
            <div class="text-center mb-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                    <i class="fas fa-plus"></i> Agregar Cita
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Consultorio</th>
                            <th scope="col">Fecha de Consulta</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                        <tr>
                            <td>{{$cita->id}}</td>
                            <td>{{$cita->Paciente->nombre}}</td>
                            <td>{{$cita->Doctor->nombre}}</td>
                            <td>{{$cita->sala_consulta}}</td>
                            <td>{{$cita->fecha_cita}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#edit {{$cita->id}}">
                                    <i class="fas fa-edit"></i> Editar
                                </button>
                                <br>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete {{$cita->id}}">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('citas.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('citas.create')
        </div>
    </div>
</div>
@endsection