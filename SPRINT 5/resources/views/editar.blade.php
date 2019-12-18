<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shanti | Perfil</title>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/reset.css"> 
		<script src="js/modernizr.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="../css/app.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/vegas.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">  
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}">
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
			<section class="form-container-registro">
				<div class="row justify-content-md-center">
					<div class="col col-lg-5">
						<form class="access-form-registro" action="/perfil" method="post" enctype="multipart/form-data">
							@csrf
							<h3 class="reg">Editar Datos de Usuario</h3>
							
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
									  <span class="input-group-text" id="basic-addon1">Nombre:</span>
						    	</div>
								    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="{{$usuario->nombre}}">
								</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">Apellido:</span>
						    	</div>
								    <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" value="{{$usuario->apellido}}">
							</div>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Email:</span>
									</div>
										<input type="text" class="form-control" placeholder="ejemplo@ejemplo.com" name="email" id="email" value="{{$usuario->email}}">
							</div>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Fecha de nacimiento:</span>
									</div>
										<input type="date" class="form-control" placeholder="" name="fecha_nac" id="fecha_nac" value="{{$usuario->fecha_nac}}">
							</div>
							<div class="input-group mb-3">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Provincia:</span>
									</div>
										<select name="provincia" id="provincia">
												<option value="Buenos Aires">Bs. As.</option>
												<option value="Catamarca">Catamarca</option>
												<option value="Chaco">Chaco</option>
												<option value="Chubut">Chubut</option>
												<option value="Cordoba">Cordoba</option>
												<option value="Corrientes">Corrientes</option>
												<option value="Entre Rios">Entre Rios</option>
												<option value="Formosa">Formosa</option>
												<option value="Jujuy">Jujuy</option>
												<option value="La Pampa">La Pampa</option>
												<option value="La Rioja">La Rioja</option>
												<option value="Mendoza">Mendoza</option>
												<option value="Misiones">Misiones</option>
												<option value="Neuquen">Neuquen</option>
												<option value="Rio Negro">Rio Negro</option>
												<option value="Salta">Salta</option>
												<option value="San Juan">San Juan</option>
												<option value="San Luis">San Luis</option>
												<option value="Santa Cruz">Santa Cruz</option>
												<option value="Santa Fe">Santa Fe</option>
												<option value="Sgo. del Estero">Sgo. del Estero</option>
												<option value="Tierra del Fuego">Tierra del Fuego</option>
											    <option value="Tucuman" selected>Tucuman</option>
										</select>
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Localidad:</span>
										</div>
										<input type="text" class="form-control" placeholder="" name="localidad" id="localidad" value="{{$usuario->localidad}}">	
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Direccion:</span>
										</div>
										<input type="text" class="form-control" placeholder="" name="direccion" id="direccion" value="{{$usuario->direccion}}">
										<span class="input-group-text" id="basic-addon1">Codigo Postal:</span>
										<div class="input-group-prepend">
										</div>
										<input type="text" class="form-control" placeholder="" name="cp" id="cp" value="{{$usuario->cp}}">	
									</div>
									
									<!--CORTAR Y SUBIR IMAGEN-->
									<!--<div class="row">
										<div class="col-md-4 text-center">						
										<div id="upload-demo"></div>							
										</div>								
										<div class="col-md-4" style="padding:5%;">
										<strong>Select image to crop:</strong>								
										<input type="file" id="image" name="image">								
										
										</div>								
								     	</div>-->
									<!---->
									<div class="botones">
										<button type="submit" class="btn btn-lg btn-primary upload">Enviar</button>
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

   <script type="text/javascript">



	$.ajaxSetup({
	
	  headers: {
	
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	
	  }
	
	});
	
	
	
	var resize = $('#upload-demo').croppie({
	
		enableExif: true,
	
		enableOrientation: true,    
	
		viewport: { 
	
			width: 200,
	
			height: 200,
	
			type: 'circle'
	
		},
	
		boundary: {
	
			width: 300,
	
			height: 300
	
		}
	
	});
	
	
	
	$('#image').on('change', function () { 
	
	  var reader = new FileReader();
	
		reader.onload = function (e) {
	
		  resize.croppie('bind',{
	
			url: e.target.result
	
		  }).then(function(){
	
			console.log('jQuery bind complete');
	
		  });
	
		}
	
		reader.readAsDataURL(this.files[0]);
	
	});
	
	
	
	$('.upload').on('click', function (ev) {
	
	  resize.croppie('result', {
	
		type: 'canvas',
	
		size: 'viewport'
	
	  }).then(function (img) {
	
		$.ajax({
	
		  url: "{{route('upload.image')}}",
	
		  type: "POST",
	
		  data: {"image":img},
	
		  success: function (data) {
	
			html = '<img src="' + img + '" />';
	
			$("#preview-crop-image").html(html);
	
		  }
	
		});
	
	  });
	
	});
	
	
	
	</script>
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