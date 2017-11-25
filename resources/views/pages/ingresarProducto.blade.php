@extends('layouts.app')
@section('titulo','Nuevo Producto')
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
					<select name='tipo_producto' class='form-control'>
						@foreach($tipoProductos as $tipo)
							<option value="{{ $tipo->id }}">
								{{ $tipo->nombre }}
							</option>
						@endforeach
					</select>

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
</div>