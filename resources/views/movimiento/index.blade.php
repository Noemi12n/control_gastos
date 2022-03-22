@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Lista de los movimientos</h2>
<a href="{{route('movimiento.create')}}"class="btn btn-primary btn-sm">Nuevo</a>
 <table class="table">
 	<th>#</th>
 	<th>Tipo</th>
 	<th>Concepto</th>
 	<th>Fecha</th>
 	<th>Detalle</th>
 	<th>Cantidad</th>
 	<th>Acciones</th>
 </table>


@endsection