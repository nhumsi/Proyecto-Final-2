<?php

if ($_FILES) {
	if($_FILES["fotoPerfil"]["error"] !=0){
echo "Hubo un error al cargar la foto";

} else{
	$ext = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION);

if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
	echo "La foto debe ser un archivo de imagen";
}


}

}




?>


<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>Secondary Expandable Menu</title>
</head>
<body>
	<header>
		<a id="cd-logo" href="index.html"><img src="img/logo.png" alt="Homepage"></a>
		<nav id="cd-top-nav">
			<ul>
				<li><a href="#0">Home</a></li>
				<li><a href="#0">Login</a></li>
			</ul>
		</nav>
		<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
	</header>

    <main class="cd-main-content"> <!-- Cuerpo principal del sitio -->
      <section class="form-container">
          <form class="access-form" action="" method="post" enctype="multipart/form-data"> <!--Abre formulario -->
            <h2 class="registrate">Registrate</h2>
            <h3 class="reg-info">Completa con tus datos para registrarte en la pagina</h3>
            <!-- input Nombre -->
            <div class="field-group">
              <h5>Nombre<label for="nombre"></label></h5>
              <input type="text" id="nombre" name="nombre" placeholder="Ingresá tu nombre" required style="font-family: segoe script;">
              <p class="form-text alert-hide">
                Obligatorio.
              </p>
            </div>
            <div class="field-group">
              <h5>Email<label for="email"></label></h5>
              <input type="email" id="email" name="email" placeholder="Ingresá tu e-mail" required style="font-family: segoe script;">
              <p class="form-text alert-hide">
                Obligatorio.
              </p>
            </div>
            <div class="field-group">
              <h5>Contraseña<label for="password"style="font-family: segoe script;"></label></h5>
              <input type="password" id="passsword" name="password" placeholder="password" value="" required>
              <p class="form-text alert-hide">
                Obligatorio.
              </p>
            </div>

            <h5 for="pais">País de nacimiento</h5>
            <select name="pais" required="">
              <option value="">Por favor, elija una opción</option>
              <option value="ar">Argentina</option>
              <option value="cl">Chile</option>
              <option value="uru">Uruguay</option>
              <option value="br">Brasil</option>
              <option value="ecu">Ecuador</option>
              <option value="par">Paraguay</option>
              <option value="bol">Bolivia</option>
            </select>
            <p class="form-text alert-hide">
              Obligatorio.
            </p>
            <h5>Género</h5>
             <input type="radio" id="masc" name="genero" value="m">
             <label for="masc">Masculino</label>

             <input type="radio" id="fem" name="genero" value="f">
             <label for="fem">Femenino</label>
            <br>
             <input type="radio" id="ns-nc" name="genero" value="ns-nc">
             <label for="ns-nc">Prefiero no decirlo</label>

            <br>
            <br>
						<h5>Foto de Perfil<label for="fotoPerfil"style="font-family: segoe script;"></label></h5>
						<input type=file  name="fotoPerfil"  value="Enviar" required>

            <div class="field-group">
              <h5 for="comentarios">Dejános tus comentarios</h5>
              <textarea name="name" id="comentarios" rows="8" cols="40"></textarea>
            </div>


            <input type="checkbox" id="tyc" name="tyc" value="yes" required>
            <label for="tyc">Acepto los términos y condiciones.</label>

            <!-- <p>Botones enviar con etiquetas 'button'<p> -->
            <button id="boton" class="btn btn-info" type="submit"><strong>Registrarme</strong></button>
            <button id="boton" class="btn btn-outline-dark" type="reset"><img src="" alt=""><strong>Cancelar</strong></button>

          </form>
      </section>

	</main>
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
			<li><a href="#0">Login</a></li>
			<li><a href="#0">Registrarse</a></li>
			<li><a href="#0">Preguntas Frecuentes</a></li>
			<li><a href="#0">Contacto</a></li>
		</ul>


		<div class="cd-navigation socials">
			<a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
			<a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
  		</div>
	</nav>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
