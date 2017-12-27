@extends('layouts.app')
@section('titulo','Actualizar Tipo Producto')
@section('content')



<div class="container">
	<h3 class='text-center'>
	Actualizar Tipo Producto
	</h3>
	<div class="col-md-12">
			
				<form action='/tipo/{{ $Tipo->id  }}' method='POST'>
											{{csrf_field()}}
											{{ method_field('PUT')  }}
				<div class='form-group'>
					<label for='Nombre' class='control-label'>
						Nombre:
					</label>
					<input type='text' name='Nombre' class='form-control' value="{{ $Tipo->Nombre }}">
				</div>
								<div class='form-group'>
					<label for='Estado' class='control-label'>
						Estado:
					</label>
					<input type='number' name='Estado' class='form-control' value="{{ $Tipo->Estado }}">
				</div>


				<div class='form-group'>
					<button type='submit' class='btn btn-primary'>
						<i class='fa fa-plus'></i>Guardar
					</button>
				</div>
		</form>
	</div>
</div>