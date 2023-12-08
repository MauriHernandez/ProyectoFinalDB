@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" align="center">
        <br> <br>
        <h1>Citas Registrados</h1>
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
                        <th scope="col">Consultorio</th>
                        <th scope="col">Fecha de Consulta</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($citas as $cita)
                    <tr class="">
                        <td scope="row">{{$cita->id}}</td>
                        <td>{{$cita->Paciente->nombre}}</td>
                        <td>{{$cita->Doctor->nombre}}</td>
                        <td>{{$cita->sala_consulta}}</td>
                        <td>{{$cita->fecha_cita}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$cita->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

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


    <div class="col-md-2"></div>
</div>



@endsection