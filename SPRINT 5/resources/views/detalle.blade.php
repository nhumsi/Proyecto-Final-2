<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shanti | ABM-Productos</title>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/styles.css"> <!-- Resource style -->
		<script src="js/modernizr.js"></script> <!-- Modernizr -->


		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="../../css/app.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/vegas.min.css">
</head>

<body>
    <header class="main-header">
		<a id="cd-logo" href="index.html"><img src="img/logo.png" alt="Homepage"></a>
		  <nav id="cd-top-nav">
			  <ul>
				<li><a href="/">Home</a></li>
				<li><a href="/login">Login</a></li>
			  </ul>
		  </nav>
		<a id="cd-menu-trigger" href=""><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
	  </header>
	    <main class="cd-main-content-contacto">
			<section class="form-container-registro">
				<div class="row justify-content-md-center">
					<div class="col col-lg-6">
					<form class="access-form-registro" action="/ABM/editar" method="post" enctype="multipart/form-data">
							@csrf
							<h3 class="reg">Carga de Productos</h3>

							<br>
							<ul style="color:red" class="errores">
								@foreach ($errors->all() as $error)
									<li>
										{{$error}}
									</li>

								@endforeach
							</ul>
							<div class="input-group mb-3	">
									<div class="input-group-prepend">
										  <span class="input-group-text" id="basic-addon1">Nombre de producto:</span>
									</div>
								<input type="text" class="form-control" name="nombre" id="nombre" value="{{$producto->nombre}}">
										{{-- <span class="input-group-text" id="basic-addon1">Debe tener 5 caracteres mínimo</span> --}}
								</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">Color:</span>
						    	</div>
								    <input type="text" class="form-control"  name="color" id="color" value="{{$producto->color}}">
									{{-- <span class="input-group-text" id="basic-addon1">Debe tener 6 caracteres mínimo</span> --}}
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									  <span class="input-group-text" id="basic-addon1">Precio:</span>
						    	</div>
							<input type="text" id="precio" name="precio" value="{{$producto->precio}}">
								</div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Stock:</span>
                    </div>
				<input type="text" id="stock" name="stock"  value="{{$producto->stock}}">
                  </div>
                <div class="field-group">
                        <p for="msg">Descripción:</p>
				<textarea name="Descripcion" id="descripcion" rows="8" cols="40" value="{{$producto->descripcion}}"></textarea>
                </div>
                <br>
                <div class="product-image">
                  <label for="">Imagen:</label>
                  <input type="file" name="image" value="">
                </div>
                <br>
									<div class="botones">
										<button type="submit" class="btn btn-lg btn-primary">Cargar</button>
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
              <li><a href="/fitness">Fitness</a></li>
              <li><a href="/yoga">Yoga</a></li>
              <li><a href="/OtrosProductos">Otros Productos</a></li>
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
          <a class="cd-twitter cd-img-replace" href="https://twitter.com/shanti_bisu">Twitter</a>
          <a class="cd-facebook cd-img-replace" href="https://www.facebook.com/shantiinsumos33">Facebook</a>
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
