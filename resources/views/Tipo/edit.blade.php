@extends('layouts.app')
@section('content')
<h3 class="bg-dark text-write">Editar Tipo</h3>
<h1>Editar tipo</h1>
<form action="{{route('tipo.update',$tipo->tip_id)}}" method="POST">
	@csrf
	<label for="">Detalles De Los Tipo</label>
	 <input type="text" value="{{$tipo->tip_descripcion}}" name="tip_descripcion" id="tip_descripcion">
	 <button class="btn btn-success">guardar</button>
</form>

@endsection