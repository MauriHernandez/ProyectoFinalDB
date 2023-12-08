@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" align="center">
        <br> <br>
        <h1>Perfiles Registrados</h1>
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
                        <th scope="col">Correo Electrónico</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Cédula Profesional</th>
                        <th scope="col">Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($doctores as $doctor)
                    <tr class="">
                        <td scope="row">{{$doctor->id}}</td>
                        <td>{{$doctor->Usuario->correo_electronico}}</td>
                        <td>{{$doctor->nombre}} {{$doctor->apellido_paterno}} {{$doctor->apellido_materno}}</td>
                        <td>{{$doctor->especialidad}}</td>
                        <td>{{$doctor->licencia}}</td>
                        <td>{{$doctor->departamento}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$doctor->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete {{$doctor->id}}">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('doctores.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('doctores.create')
    </div>


    <div class="col-md-2"></div>
</div>



@endsection