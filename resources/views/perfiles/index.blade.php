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
                        <th scope="col">Perfil</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($perfiles as $perfil)
                    <tr class="">
                        <td scope="row">{{$perfil->id}}</td>
                        <td>{{$perfil->nombre_perfil}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#edit {{$perfil->id}}">
                                <i class="fas fa-edit"></i> Editar
                            </button>

                           
                        </td>
                    </tr>
                    @include('perfiles.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('perfiles.create')
    </div>


    <div class="col-md-2"></div>
</div>



@endsection