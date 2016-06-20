@extends('layout')

@section('content')
<div id="particles-js" class="banner">
    <div class="slogan">
        La Mejor forma de pedir comida en la web
        <hr>
        Myrestaurant
    </div>
    <div class="text_action">
      <span class="t_1"></span>
    </div>
</div>

<div id="steps" class="fullwidth">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="thumbnail">
                  <img src="{{ asset('img/login.png') }}" class="img img-responsive">
                  <div class="caption">
                    <h3>Entra</h3>
                    <p>...</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="thumbnail">
                  <img src="{{ asset('img/search.png') }}" class="img img-responsive">
                  <div class="caption">
                    <h3>Busca y elije</h3>
                    <p>...</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="thumbnail">
                  <img src="{{ asset('img/list.png') }}" class="img img-responsive">
                  <div class="caption">
                    <h3>Confirma</h3>
                    <p>...</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section_pub_p" class="fullwidth">
    <div class="container">
      <div class="row">
        <div id="miles_platos" class="col-xs-12">
          <div class="publicity_text">
            <h1>Miles de menus con entrega en tiempo limite</h1>
            <p>En nuestro sitio tienes la mas amplia variedad de menus para escojer, estamos conectados con cientos de restauranes cerca de tu zona tu elijes donde te lo entregamos y de que forma pagar.</p>
          </div>
        </div>
      </div>
    </div>
</div>

<div id="section_calendar_pub">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-xs-12 parent_calendar_img">
          <img src="{{ asset('img/calendar.jpg') }}" class="img img-circle">
      </div>
      <div id="parent_calendar_pub" class="col-lg-8 col-md-8 col-xs-12">
          <div class="publicity_text_calendar">
            <h1>Programas tus entregas</h1>
            <p>
              Puedes programar las entregas diariamente para tu conveniencia ideal para tener tus comidas garantizadas o eventos especiales
            </p>
          </div>        
      </div>
    </div>
  </div>
</div>

<div class="parent_video">
  <div class="video-container"> 
    <video autoplay="true" height="720" loop="true" poster="{{ asset('video/posters/bbq.jpg') }}" width="1280">
    <source src="{{ asset('video/mp4/bbq.mp4') }}" type="video/mp4">
    <source src="{{ asset('video/webm/bbq.webm') }}" type="video/webm">
    </video>
  </div>
  <p class="pub">
    <img src="{{ asset('img/tapa_cuestion.png') }}" class="img img-responsive">
    ¿Estas listo para hacer tu pedido?
  </p>
</div>
@stop