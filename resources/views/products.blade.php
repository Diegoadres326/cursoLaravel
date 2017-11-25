@extends('layouts.app')

@section('titulo',"lista de productos")


@section('content')

<div class="container">
	<h3 class='text-center'>
	PRODUCTOS
	</h3>


	<div class="col-md-6">
		<form action='/products' method='POST'>
					{{csrf_field()}}
				<div class='form-group'>
					<label for='name' class='control-label'>
						Nombre:
					</label>
					<input type='text' name='name' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='tipo_producto' class='control-label'>
						Tipo Producto:
					</label>
					<input type='number' name='tipo_producto' class='form-control'>
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
				</div>
		</form>
	</div>



				<div class="col-md-6">
						<h3>Listado de Productos</h3>
						@if(count($productos)>0)
						<table class='table'>
							<thead>
								<th>Tipo</th>
								<th>Nombre</th>
								<th>Cantidad</th>
								<th>Precio</th>
								<th>Estado</th>
								<th>Accion</th>
							</thead>
							<tbody>
							@foreach ($productos as $producto)
								<tr>
									<td>
										
										{{ $producto->tipo->nombre }} 
								
									</td>
									<td>{{ $producto->name }} </td>
									<td>{{ $producto->cantidad }} </td>
									<td>{{ $producto->precio }} </td>
									<td>{{ $producto->estado }} </td>
									<td>
										<form action='/products/{{ $producto->id  }}' method='POST'>
											{{csrf_field()}}
											{{ method_field('DELETE')  }}
												<button class='btn btn-default' type='submit' >ELIMINAR</button>
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
