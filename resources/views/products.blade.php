@extends('layouts.app')

@section('content')

<h1 class='text-center'>
PRODUCTOS
</h1>

<form action='/products' method='POST'>

<div class='form-group'>
<label for='name' class='control-label'>
	Nombre:
</label>
<input type='text' name='name' class='form-control'>
</div>

<div class='form-group'>
<label for='cantidad' class='control-label'>
	Cantidad:
</label>
<input type='number' name='cantidad' class='form-control'>
</div>



<div class='form-group'>
<label for='precio' class='control-label'>
	Precio:
</label>
<input type='text' name='precio' class='form-control'>
</div>


<div class='form-group'>
<label for='estado' class='control-label'>
	Estado:
</label>
<input type='number' name='estado' class='form-control'>
</div>


<div class='form-group'>
	<button type='submit' class='btn btn-primary'>
		<i class='fa fa-plus'></i>Ingresar
	</button>

</form>


<br>
<br>

@if(count($productos)>0)

<table>
<th>Nombre</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Estado</th>
<th>Accion</th>
</thead>
<tbody>
@foreach ($productos as $producto)
<tr><td>{{ $producto->name }} </td>
<td>{{ $producto->cantidad }} </td>
<td>{{ $producto->precio }} </td>
<td>{{ $producto->estado }} </td>
<td>
	<form action='products/{{ $producto->id  }}' method='POST'>
		{{ method_field('DELETE')  }}
			<button  type='submit' >ELIMINAR</button>
	</form>
</td>
</tr>
</tbody>
@endforeach
</table>

@endif





