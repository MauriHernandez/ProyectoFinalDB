
@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br> <br>
        <h1>Vista de Relación Doctores-Recetas</h1>
        <br>
        <div class="text-center">
           
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                       
                        <th scope="col">Nombre Paciente</th>
                        <th scope="col">Nombre de Apoyo</th>
                        <th scope="col">Fecha de Emisión</th>
                    </tr>
                </thead>
                <tbody>
             

@foreach ($datos as $dato)
                    <tr>
                        <td scope="row">{{$dato->nombre_paciente}}</td>
                        <td>{{$dato->nombre_apoyo}}</td>
                        <td>{{$dato->fecha_emision_apoyo}}</td>
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
     
    </div>
    <div class="col-md-2"></div>
</div>

@endsection

