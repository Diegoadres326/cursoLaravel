@extends('layouts.app')
@section('titulo','Nuevo Producto')
@section('content')

<div class="container">
	<h3 class='text-center'>
	Nuevo Tipo Producto
	</h3>
	<div class="col-md-12">
			
		<form action='/tipo' method='POST'>
					{{csrf_field()}}

				<div class='form-group'>
					<label for='nombre' class='control-label'>
						Nombre:
					</label>
					<input type='text' name='nombre' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='estado' class='control-label'>
						Estado:
					</label>
				<input type='number' name='estado' class='form-control'>
				</div>

				<div class='form-group'>
					<button type='submit' class='btn btn-primary'>
						<i class='fa fa-plus'></i>Guardar
					</button>
				</div>
		</form>
	</div>
</div>