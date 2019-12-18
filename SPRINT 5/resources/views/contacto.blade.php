<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shanti | Contacto</title>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/styles.css"> <!-- Resource style -->
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/vegas.min.css">
</head>

<body>
  <header class="main-header">
    <a id="cd-logo" href="index.html"><img src="img/logo.png" alt="Homepage"></a>
      <nav id="cd-top-nav">
          <ul>
            <li><a href="/index">Home</a></li>
            <li><a>{{$usuario->nombre." ".$usuario->apellido}}</a></li>
            <li><a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Cerrar sesion') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </li>
          </ul> 	 	 
      </nav>
    <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
  </header>
    <main class="cd-main-content-contacto">
     <div id="main-contacto" class="row">
                 <div id="formulario-contacto "class="col-lg-3">
                    <form class="access-form-contacto" action="" method="get">
                        <h2>Dejanos tu mensaje!</h2>
                     <div class="field-group">
                         <p>Nombre<label for="Nombre"></label></p>
                         <input type="text" id="nombre" name="nombre" placeholder="nombre" value="" required style="Titillium Web, sans-serif">
                     </div>
                     <div class="field-group">
                             <p> E-mail <label for="email"></label></p>
                             <input type="email" id="email" name="email" placeholder="e-mail" value="" required style="Titillium Web, sans-seri">
                     </div>
                     <div class="field-group">
                             <p>Teléfono (opcional)<label for="email"></label></p>
                             <input type="number" id="Telefono" name="Telefono" placeholder="teléfono" value="" required style="Titillium Web, sans-seri">
                     </div>

                     <div class="field-group">
                             <p for="msg">Mesaje:</p>
                             <textarea name="name" id="comentarios" rows="8" cols="40" style="Titillium Web, sans-serif">Inserte su mensaje</textarea>
                     </div>
                     <br>
                        <button class="enviar-msj" type="submit" name="send">Enviar</button>
                    </form>
                 </div>
     <!-- MAPA -->

        <div id="mapa-contacto" class="col-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.416679386339!2d-65.20679108495698!3d-26.826696283164594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225c1734e49493%3A0x43d9198da5a76d38!2sPcia%20de%20C%C3%B3rdoba%20565%2C%20T4000DGK%20San%20Miguel%20de%20Tucum%C3%A1n%2C%20Tucum%C3%A1n!5e0!3m2!1ses-419!2sar!4v1573689580598!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
     </div>
    </main>
 <!-- NAV BAR -->
<nav id="cd-lateral-nav">
  <ul class="cd-navigation">
    <li class="item-has-children">
      <a href="#0">Productos</a>
      <ul class="sub-menu">
        <li><a href="#0">1</a></li>
        <li><a href="#0">2</a></li>
        <li><a href="#0">3</a></li>
        <li><a href="#0">4</a></li>
        <li><a href="#0">5</a></li>
      </ul>
    </li>
  </ul>

  <ul class="cd-navigation cd-single-item-wrapper">
    <li><a href="/login">Login</a></li>
    <li><a href="/registro">Registrarse</a></li>
    <li><a href="/QA">Preguntas Frecuentes</a></li>
    <li><a href="/contacto">Contacto</a></li>
  </ul>


  <div class="cd-navigation socials">
    <a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
    <a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
    </div>
</nav>



</body>
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/vegas.min.js"></script>
<script src="responsiveslides.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</html>
