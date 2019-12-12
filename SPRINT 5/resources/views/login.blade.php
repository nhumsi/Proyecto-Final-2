<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shanti | Login</title>

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/reset.css">
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
            <li><a href="/login">Login</a></li>
          </ul> 	 	 
      </nav>
    <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
  </header>
    <div class="container">
      <header class="main-header">
        <a id="cd-logo" href="index.html"><img src="img/logo.png" alt="Homepage"></a>
           <nav id="cd-top-nav">
               <ul>
                 <li><a href="/index">Home</a></li>
                 <li><a href="/login">Login</a></li>
               </ul> 	 	 
           </nav>
        <a id="cd-menu-trigger"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
       </header>
        <main class="cd-main-content">
          <section class="form-container-registro">
            <div class="row justify-content-md-center">
              <div class="col col-lg-6">
                <form class="access-form-registro" action="/login/loguearse" method="post">
                  @csrf
                  <h5 class="reg">Ingrese su nombre de usuario y contraseña</h5>
                  
                  <br>
                  <ul style="color:red" class="errores">
                    @foreach ($errors->all() as $error)
                      <li>
                        {{$error}}
                      </li>
                      
                    @endforeach
                  </ul> 
                  <div class="input-group mb-3" id="login-input">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Nombre de usuario:</span>
                      </div>
                        <input type="text" class="form-control" placeholder="" name="nombre_usuario" id="nombre_usuario" value="{{old("nombre_usuario")}}">
                  </div>
                  <div class="input-group mb-3" id="login-input">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Contraseña:</span>
                    </div>
                  <input type="password" class="form-control" placeholder="" name="pass" id="pass">
                  </div>  
                  <br>

                  <div class="botones-login">
										<button type="submit" class="btn btn-primary btn-sm"">Acceder</button>
										<button type="reset" class="btn btn-secondary btn-sm"">¿Olvido su contraseña?</button>
                  </div>
                </form>
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