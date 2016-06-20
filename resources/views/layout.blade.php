<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jhonny Vasquez</title>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('resources/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/jquery-ui/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link type="image/png" rel="icon" href="{{ asset('img/favicon.png') }}" />
</head>

<body>

<header class="header fullwidth">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Myrestaurant</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form id="buscador" class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            <button id="btn_search" type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Entrar | Registarse<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</header>

@yield('content')

    <footer>
        <div class="fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>My Restaurant <span>Comida al alcance de un click</span></p>
                        <hr class="pointer_hr">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <ul class="list-info">
                            <li class="title-list">Sobre My Restaurant</li>
                            <li>Quienes somos</li>
                            <li>Términos y condiciones</li>
                            <li>Politicas de privacidad</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <ul class="list-info">
                            <li class="title-list">Contacto</li>
                            <li><a href="http://jhonnyvasquez.hol.es" target="_blank">Página web</a></li>
                            <li><a href="http://github.com/vanckruz" target="_blank">Github</a></li>
                            <li><a href="https://www.linkedin.com/in/jhonny-vasquez-674995ab" target="_blank">Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <hr class="pointer_hr">
                        <p class="copy">Myrestaurant &copy; 2016 Caracas, Venezuela</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
    <script src="{{ asset('resources/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('resources/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resources/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/angular_controller.js') }}"></script>

</body>
</html>