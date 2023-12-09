@extends('welcome')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br> <br>
        <h1>Vista de Relación Paciente-Doctor</h1>
        <br>
        <div class="text-center">
           
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                       
                        <th scope="col">Nombre Paciente</th>
                        <th scope="col">Nombre Receta</th>
                        <th scope="col">Fecha de Receta</th>
                    </tr>
                </thead>
                <tbody>
             

@foreach ($datos as $dato)
                    <tr>
                        <td scope="row">{{$dato->nombre_paciente}}</td>
                        <td>{{$dato->nombre_paciente_receta}}</td>
                        <td>{{$dato->fecha_emision_receta}}</td>
                      
                    </tr>
                   
                    @endforeach
                </tbody>
            </table>
        </div>
     
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
