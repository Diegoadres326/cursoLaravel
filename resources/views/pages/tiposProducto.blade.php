@extends('layouts.app')
@section('titulo',"lista de Tipo de productos")
@section('content')
<div class="container">
	<h3 class='text-center'>
	PRODUCTOS
	</h3>

				<div class="col-md-12">
						<h3>Listado de Productos</h3>
						<a href="/products/create" class="btn btn-primary"> Nuevo Producto</a>
						@if(count($tipos)>0)
						<table class='table'>
							<thead>
								<th>Id </th>
								<th>Nombre </th>
								<th>Estado</th>
				
								<th>Actualizar</th>
								<th>Eliminar</th>
							</thead>
							<tbody>
							@foreach ($tipos as $tipo)
								<tr>

									<td>{{ $tipo->id }} </td>
									<td>{{ $tipo->nombre }} </td>
									<td>{{ $tipo->estado }} </td>
									<td>
										<a class='btn btn-default' href="/tipo/{{ $tipo->id  }}/edit"    >Actualizar</a>
									</td>
									<td>
										<form action='/tipo/{{ $tipo->id  }}' method='POST'>
											{{csrf_field()}}
											{{ method_field('DELETE')  }}
												<button class='btn btn-danger' type='submit' >ELIMINAR</button>
										</form>
									</td>
								</tr>
							</tbody>
							@endforeach
						</table>
				</div>
</div>
@endif
@endsection
