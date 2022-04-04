 <center><h1>REPORTE DE INGRESOS Y EGRESOS</h1></center>
 <table border CELLPADDING=5 CELLSPACING=1 >
 	<th height="25" width="30" TD BGCOLOR="pink">#</th>
 	<th height="30" width="70" TD BGCOLOR="pink">Fecha</th>
    <th height="30" width="70" TD BGCOLOR="pink">Usuario</th>
    <th height="30" width="70" TD BGCOLOR="pink">Concepto</th>
 	<th height="30" width="70" TD BGCOLOR="pink">Tipo</th>
 	<th height="30" width="70" TD BGCOLOR="pink">Cantidad</th>
 	<th height="30" width="70" TD BGCOLOR="pink">Detalle</th>
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
    
    @endforeach
  
    </table>
