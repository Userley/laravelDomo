@extends('layouts/principal')
@section('Breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Accesos</li>
    </ol>
  </nav>
@endsection
@section('contenido')

<div class="alert alert-danger" role="alert">
    Página Numero 3
</div>

@stop