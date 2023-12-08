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
                        <th scope="col">Contraseña</th>
                        <th scope="col">Tipo de perfil</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($usuarios as $usuario)
                    <tr class="">
                        <td scope="row">{{$usuario->id}}</td>
                        <td>{{$usuario->correo_electronico}}</td>
                        <td>{{$usuario->contraseña}}</td>
                        <td>{{$usuario->Usuario->nombre_perfil}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$usuario->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#delete {{$usuario->id}}">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('usuarios.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('usuarios.create')
    </div>


    <div class="col-md-2"></div>
</div>



@endsection