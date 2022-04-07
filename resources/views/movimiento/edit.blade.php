@extends('layouts.app')
@section(@content)
<?php
$ing="";
$egr="";
if($movimiento->mov_tipo==0){
$ing="selected";
}else{
	$egr="selected";
}
?>
<form action="{{route('movimiento.update',$movimiento->mov_id)}}" method="POST">
	

	@csrf
	<div class="container">
		<div class="row">
			<div class="col-md-6">
	                <label for="">Concepto</label>
	                <select name="tip_id" id="tip_id" class="form-control">
		                 <option value="">Elija una opción</option>
		                 @foreach($tipo as $t)
		                     <option selected value="{{$t->tip_id}}" >{{$t->tip_descripcion}}</option>
		                 @endforeach
	                </select>
	              </div>
	              <div class="col-md-6">
	              	<label for="">Fecha</label>
	              	<input type="date" class='form-control' id='mov_fecha'name="mov_fecha" value="{{$movimiento->mov_fecha}}">
	              </div>
	             
	               <div class="col-md-6">
	              	<label for="">Cantidad</label>
	              	<input type="text" class='form-control' id='mov_cantidad'name="mov_cantidad" value="{{$movimiento->mov_cantidad}}">
	              </div>
	              <div class="col-md-6">
	              	<label for="">Detalle</label>
	              	<input type="text" class='form-control' id='mov_detalle'name="mov_detalle" value="{{$movimiento->mov_detalle}}">
	              </div>
	               <div class="col-md-6 p-3">
	               	<select name="mov_tipo" id="mov_tipo">
	               		
	               		<option {{$egr}}  value="0">Ingreso</option>
	               	
	       	            <option {{$ing}}  value="1">egreso</option>
	       	           
	               	</select>
	               	
	            <!--   Ingresos:<input type="radio" name="mov_tipo" id="mov_tipo" value="0" selected >
	               		              	Egresos:<input type="radio" name="mov_tipo"  id="mov_tipo" value="1" > -->

	              </div>
	              <div class="col-md-12 mt-3">
	              	<button class="btn btn-success">Guardar</button>
	              </div>
	          </div>
	    </div>

</form>


@endsection