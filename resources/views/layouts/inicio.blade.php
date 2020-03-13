@extends('layouts/principal')
@section('Breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Inicio</li>
    </ol>
</nav>
@endsection
@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                @foreach ($dispositivos as $dis)
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$dis->Nombre}}</h5>
                                <p></p>
                                <input type="checkbox" checked data-toggle="toggle" data-on="Encendido"
                                    data-off="Apagado" data-onstyle="success" data-offstyle="danger">
                            </div>
                            <div class="card-footer">
                                <p> Dispositivo: {{ ($dis->Estado===1) ? "Activo" : "Inactivo"}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                @foreach ($dispositivos as $dis)
                <div class="col-sm-4">
                    <div class="form-group">
                        <canvas id="myChart{{$dis->IdDispositivo}}" width="100" height="100"></canvas>
                        <script>
                            var ctx = document.getElementById("myChart"+ {!! $dis->IdDispositivo !!});
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["Group 1", "Group 2", "Group 3"],
                                datasets: [{
                                    label: 'Groups',
                                    data: [12, 19, 3]
                                }]
                            }
                        });
                        </script>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@stop