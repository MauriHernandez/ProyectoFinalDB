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
                        <th scope="col">Número Ambulatorio</th>
                        <th scope="col">Nivel Ambulatorio</th>
                        <th scope="col">Número de Celular</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($pacientes as $paciente)
                    <tr class="">
                        <td scope="row">{{$paciente->id}}</td>
                        <td>{{$paciente->Usuario->correo_electronico}}</td>
                        <td>{{$paciente->nombre}} {{$paciente->apellido_paterno}} {{$paciente->apellido_materno}}</td>
                        <td>{{$paciente->numero_ambulatorio}}</td>
                        <td>{{$paciente->nivel_ambulatorio}}</td>
                        <td>{{$paciente->telefono}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$paciente->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete {{$paciente->id}}">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('pacientes.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('pacientes.create')
    </div>


    <div class="col-md-2"></div>
</div>



@endsection