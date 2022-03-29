@extends('layouts.app')
@section('content')

<h2 class="bg-dark text-white">Lista de los movimientos</h2>
<a href="{{route('movimiento.create')}}"class="btn btn-primary btn-sm">Nuevo</a>
<form action="{{route('movimiento.search')}}" method="POST">
     
     
         @csrf
         Desde:<input type="date" name="desde" value="{{$desde}}"> 
         Hasta:<input type="date" name="hasta" value="{{$hasta}}">
         <button class="btn btn-success">Buscar</button>
     </form>

 <table class="table">
 	<th>#</th>
 	<th>Fecha</th>
    <th>Usuario</th>
    <th>Concepto</th>
 	<th>Tipo</th>
 	<th>Cantidad</th>
 	<th>Detalle</th>

     <?php
     $t_ing=0;
     $t_egr=0;
     $t_saldo=0;
     ?> 

@foreach($movimiento as $m)
     
  <?php
     if($m->mov_cantidad==2){
     $t_ing+=$m->mov_cantidad;
     }else{
     $t_egr+=$m->mov_cantidad;
     } 
     $t_saldo=$t_ing-$t_egr;
     ?>


    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$m->mov_fecha}}</td>
        <td>{{$m->usu_nombre}}</td>
        <td>{{$m->tip_descripcion}}</td>    
        @if($m->mov_tipo==1)
        <td>Ingresos</td>
        @else
        <td>Egresos</td>
        @endif
        <td>${{number_format($m->mov_cantidad,2)}}</td>
        <td>{{$m->mov_detalle}}</td>
        <td>
            <a href="{{route('movimiento.edit',$m->mov_id)}}" class="btn btn-info sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>
            </a>
             
              <a href=""class= 'btn btn-danger'>
            <form action="{{route('movimiento.destroy',$m->mov_id)}}"method="POST" onsubmit="return confirm('deseas eliminar?')">
                @csrf
                <button>Eliminar</button>
            </form>
        </a>
        </td>
    </tr>
    @endforeach
  <tr>
       <th colspan="2">TOTALES:
        <th>INGRESOS:{{$t_ing}}</th>
        <th>ENGRESOS:{{$t_egr}}</th>
        <th>SALDO:{{$t_saldo}}</th>
   </th>
    </tr>

    </table>

@endsection



