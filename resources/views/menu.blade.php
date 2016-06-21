@extends('layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style_ext.css') }}">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 white">
			<div class="col-xs-12 col-sm-12 col-md-12">				
				<div class="col-xs-12 col-sm-12 col-md-5">
					<div class="col-sm-12 col-md-9 imagen_aviso">
						<img src="{{ url('img/lapto_menus.png') }}" class="img img-responsive">
					</div>
						
				</div>

				<div class="col-xs-12 col-sm-12 col-md-7">
					<h4>Nombre dle menu</h4>

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<h3><span class="orange"><img src="{{ asset('images/detalles-aviso/medium-tag.png') }}"> Bs. {{ number_format(1000, 2, ',', '.') }} Bsf.</span></h3>
							<p class="color-dark-grey">Cantidad:
								<select id="cantidad_items" name="cantidad">
									<option value="1">1</option>
								</select>
							</p>
							
							<p>
								<a id="add_cart" href="" data-token="{{ csrf_token() }}">
								<button class="dark-grey-button"><img src="{{ asset('images/header/pay-for-u-text.png') }}"><img src="{{ asset('images/header/shopping-car.png') }}"></button>
								</a>
							</p>

							<a class="fav-icon-hover" data-token="{{ csrf_token() }}">
								<img src="{{ asset('images/detalles-aviso/mlu-shop-grey.png') }}">
							 	Agregar a Favoritos
							</a>

							<p class="color-dark-grey">Compartir por: 
								<img src="{{ asset('images/detalles-aviso/medium-grey-mail.png') }}">
								<img src="{{ asset('images/detalles-aviso/details-social-1.png') }}">
								<img src="{{ asset('images/detalles-aviso/details-social-2.png') }}">
								<img src="{{ asset('images/detalles-aviso/details-social-3.png') }}">
							</p>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6">
								<img src="{{ asset('images/detalles-aviso/clasification-star.png') }}">
								<img src="{{ asset('images/detalles-aviso/clasification-star.png') }}">
								<img src="{{ asset('images/detalles-aviso/clasification-star.png') }}">
								<img src="{{ asset('images/detalles-aviso/clasification-star.png') }}">
								<img src="{{ asset('images/detalles-aviso/not-background-star.png') }}">
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 orange-transparent-div">
				<h5>
					Detalles del menu
				</h5>
				<hr> <hr class="invisible"> <hr>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="col-xs-12 col-sm-12 col-md-8">
					<p><span class="light-orange">Descripción</span></p>					

					<p class="text_natural_justify">Descripción del menu</p>

				</div>

				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="row">
						<p><span class="light-orange">Medios de pago</span></p>

						<div class="col-xs-12 col-sm-12 col-md-5">
							<img src="{{ asset('images/header/pay-for-u-text.png') }}">
							<p>A través de<span>Mall Like U</span></p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-7">
							<p><span class="color-dark-grey">tu dinero esta protegido</span></p>
							<p>Con PayForU tienes 100% de cobertura frente a problemas gracias al <a>Programa de Protección al Comprador.</a></p>
						</div>

						<p><label class="color-dark-grey">Puedes pagar con tarjeta de crédito o PayPal</label></p>
						<p>Aprobación inmediata</p>

						<img src="{{ asset('images/footer/paypal.png') }}">
						<img src="{{ asset('images/footer/amex.png') }}">
						<img src="{{ asset('images/footer/visa.png') }}">
						<img src="{{ asset('images/footer/master-card.png') }}">
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-7">
							<p><span class="color-dark-grey">puedes acordar la forma de pago</span></p>
						</div>
						<p><label class="color-dark-grey">Aceptamos:</label></p>
						<p>Tarjeta de crédito, depósito o tranferencia</p>

						<img src="{{ asset('images/footer/visa.png') }}">
						<img src="{{ asset('images/footer/master-card.png') }}">
						<img src="{{ asset('images/carrito/mercantil.png') }}">
					</div>
				</div>
			</div>	
		</div>
	</div>
@stop