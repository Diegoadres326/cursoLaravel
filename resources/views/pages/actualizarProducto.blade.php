@extends('layouts.app')
@section('titulo','Actualizar Producto')
@section('content')



<div class="container">
	<h3 class='text-center'>
	PRODUCTOS
	</h3>
	<div class="col-md-12">
			
				<form action='/products/{{ $producto->id  }}' method='POST'>
											{{csrf_field()}}
											{{ method_field('PUT')  }}
				<div class='form-group'>
					<label for='name' class='control-label'>
						Nombre:
					</label>
					<input type='text' name='name' class='form-control' value="{{ $producto->name }}">
				</div>
				<div class='form-group'>
					<label for='tipo_producto' class='control-label'>
						Tipo Producto:
					</label>
					<select name='tipo_producto' class='form-control' value="{{ $producto->tipo_producto }}">
						@foreach($tipoProductos as $tipo)
							@if($producto->tipo_producto==$tipo->id)
								<option value="{{ $tipo->id }}" selected>
								{{ $tipo->nombre }}
								</option>
						@endif
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
				<input type='number' name='cantidad' class='form-control' value="{{ $producto->cantidad }}">
				</div>
				<div class='form-group'>
				<label for='precio' class='control-label' >
					Precio:
				</label>
				<input type='text' name='precio' class='form-control' value="{{ $producto->precio }}">
				</div>
				<div class='form-group'>
				<label for='estado' class='control-label'>
					Estado:
				</label>
				<input type='number' name='estado' class='form-control' value="{{ $producto->estado}}">
				</div>
				<div class='form-group'>
					<button type='submit' class='btn btn-primary'>
						<i class='fa fa-plus'></i>Guardar
					</button>
				</div>
		</form>
	</div>
</div>