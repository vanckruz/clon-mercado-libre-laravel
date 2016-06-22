@extends('layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style_ext.css') }}">
	<div class="container">		
		<div class="col-xs-12 col-sm-12 col-md-12 white product-area">
			<h3>Ultimos Menus</h3><hr>
			@foreach($menu as $m)
			<!--Menus-->			
			<div class="item-mly col-xs-12 col-sm-4 col-md-3">				
				<div class="img-item-mly col-xs-12 col-sm-12 col-md-12">
					<a href=""><img src="{{ asset('images/menus/'.$m->menu_imagen) }}" style="width:200px;height:200px;"></a>
				</div>
				<div class="text-item-mly col-xs-12 col-sm-12 col-md-12">
					<a href=""><p>{{$m->menu_nombre}}</p></a>
					<h4>{{ number_format($m->menu_precio, 2, ',', '.') }}<span>Bsf.</span></h4>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 button">
            		@if(Auth::check())					
					<a href="{{ route('add_cart') }}" data-cantidad="1" data-precio="{{ $m->menu_precio }}}" data-carrito="{{ route('carrito') }}" data-menuid="{{ $m->menu_id }}" data-token="{{ csrf_token() }}" class="add_cart_inicio store-button">
						<b style="color:black;">Agregar</b>
						<span class="glyphicon glyphicon-shopping-cart dark-orange" aria-hidden="true" title="Shop"></span>
					</a>
            		@endif
				</div>
			</div>
			@endforeach
			<!--Menus-->			

			<div class="col-xs-12 col-sm-12 col-md-12 control-pagination">

			</div>
		</div>
	</div>
@stop