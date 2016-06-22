@extends('layout')

@section('content')

<div class="container white" style="min-height:400px;">
	<div class="row">
		<div class="col-xs-12">
			<table class="table table-responsive table-hover">
				<thead>
					<tr class="active">
						<td>Producto</td>
						<td>Precio Unitario</td>
						<td>Cantidad</td>
						<td>Total</td>
					</tr>
				</thead>
				<tbody>
					@if($carrito->count() > 0 )
						@foreach($carrito as $car)
							<tr>{{ $car->}}</tr>
							<tr>{{ $car->}}</tr>
							<tr>{{ $car->cantidad}}</tr>
							<tr>{{ $car->precio_total}}</tr>
						@endforeach
					@endif
				</tbody>


			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 text-right">
			<hr>
			<form action="" method="post">
				{!! csrf_field() !!}
				<input type="hidden" name="pedido" value="">
				<input type="submit" value="confirmar" class="btn btn-success"> 
			</form>
		</div>
	</div>
</div>

@stop