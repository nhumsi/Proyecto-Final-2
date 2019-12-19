<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shanti | Registro</title>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/signup-form.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		
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
		<a id="cd-menu-trigger" href=""><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
	  </header>
	    <main class="cd-main-content-contacto">
			<section class="form-container-registro">
				<div class="row justify-content-md-center">
					<div class="col col-lg-7">
						<form class="access-form-registro" id="formRegistro" action="/registro/guardar" method="post">
							@csrf
							<h3 class="reg">Formulario de Registro</h3>
							
							<br>
							<ul style="color:red" class="errores">
								@foreach ($errors->all() as $error)
									<li>
										{{$error}}
									</li>
									
								@endforeach
							</ul> 
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Nombre de usuario:</span>
									</div>
										<input type="text" class="form-control" placeholder="Nombre" name="name" id="name" value="{{old("name")}}">
										<span class="input-group-text" id="basic-addon1">Debe tener 5 caracteres mínimo</span>
									</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">Contraseña:</span>
						    	</div>
								    <input type="password" class="form-control" placeholder="" name="password" id="password">
									<span class="input-group-text" id="basic-addon1">Debe tener 6 caracteres mínimo</span>
								</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">Confirme contraseña:</span>
						    	</div>
								    <input type="password" class="form-control" placeholder="" name="password_confirmation" id="password_confirmation">
								</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">Nombre:</span>
						    	</div>
								    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="{{old("nombre")}}">
								</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">Apellido:</span>
						    	</div>
								    <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" value="{{old("apellido")}}">
							</div>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Email:</span>
									</div>
										<input type="text" class="form-control" placeholder="ejemplo@ejemplo.com" name="email" id="email" value="{{old("email")}}">
							</div>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Fecha de nacimiento:</span>
									</div>
										<input type="date" class="form-control" placeholder="" name="fecha_nac" id="fecha_nac" value="{{old("fecha_nac")}}">
							</div>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Provincia:</span>
									</div>
										<select name="provincia" id="provincia">


										</select>
										<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">Codigo Postal:</span>
										</div>
										<input type="text" class="form-control" placeholder="" name="cp" id="cp" value="{{old("cp")}}">	
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Direccion:</span>
										</div>
										<input type="text" class="form-control" placeholder="" name="direccion" id="direccion" value="{{old("direccion")}}">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Localidad:</span>
										</div>
										<input type="text" class="form-control" placeholder="" name="localidad" id="localidad" value="{{old("localidad")}}">	
									</div>
									<div class="botones">
										<button type="submit" class="btn btn-lg btn-primary">Enviar</button>
										<button type="reset" class="btn btn-secondary btn-lg">Borrar</button>
									</div>
								</form>
							</div>
						</div>
					</section>
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
   
{{-- <script>
$("#formRegistro").validate({
        rules: {
            name: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            name: {
                required: "Ingrese un nombre de usuario",
                minlength: "<br>El nombre de usuario debe contener mas de 5 caracteres"
            }
        }
		
    });
</script> --}}

</body>
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/vegas.min.js"></script>
<script src="js/api.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</html>