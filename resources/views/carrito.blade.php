@extends('layout')

@section('content')

<div class="container white" style="min-height:400px;">
	@if(Session::has("messages"))
	<div class="row">
		<div class="col-xs-12">
			<div class="alert alert-success">
				{{ Session::get("messages") }}
			</div>
		</div>
	</div>
	@endif
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
					<?php $total = []; ?>

					@if($carrito->count() > 0 )
						@foreach($carrito as $car)
							<tr>
								<td>{{ $car->menu[0]->menu_nombre}}</td>
								<td>{{ number_format( $car->menu[0]->menu_precio,2,",","." )}}</td>
								<td>{{ $car->cantidad}}</td>
								<td>{{ number_format( $car->menu[0]->menu_precio * $car->cantidad,2,",","." ) }}</td>
							</tr>
							<?php $total[] = $car->menu[0]->menu_precio * $car->cantidad; ?>
						@endforeach
					@endif
				</tbody>


			</table>
		</div>
	</div>

	<?php $monto_total = number_format(array_sum($total),2,",","." ); ?>

	<div class="row">	
		<div class="col-xs-12 text-right" style="padding-right:2em;">
			<b>Total:</b>
			{{ $monto_total }} Bsf.
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 text-right">
			<hr>
			<form action="{{ route('pedir') }}" method="post">
				{!! csrf_field() !!}
				<input type="hidden" name="total" value="{{$monto_total}}">
				<input type="submit" value="confirmar" class="btn btn-success"> 
			</form>
		</div>
	</div>
</div>

@stop