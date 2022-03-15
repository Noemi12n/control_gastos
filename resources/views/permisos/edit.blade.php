@extends('layouts.app')
@section('content')
<h3 class="bg-dark text-write">Editar Permisos</h3>
<h1>Editar permisos</h1>
<form action="{{route('permisos.update',$permisos->per_id)}}" method="POST">
	@csrf
	<label for="">Detalles De Los Permisos</label>
	 <input type="text" value="{{$permisos->per_nombre}}" name="per_nombre" id="per_nombre">
	 <button class="btn btn-success">guardar</button>
</form>

@endsection