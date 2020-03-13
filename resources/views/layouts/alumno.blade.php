@extends('layouts/principal')
@section('contenido')

<div class="alert alert-primary" role="alert">
    Página Numero 1

</div>
<div class="container-fluid">

    <div>
        <label for="">Nombres:</label>
        <span>{{$data->Nombres}}</span>
        <br>
        <label for="">Apellidos:</label>
        <span>{{$data->Apellidos}}</span>
        <br>
        <label for="">Edad:</label>
        <span>{{$data->Edad}}</span>
        <br>
        <label for="">DNI:</label>
        <span>{{$data->DNI}}</span>
    </div>

</div>
@stop