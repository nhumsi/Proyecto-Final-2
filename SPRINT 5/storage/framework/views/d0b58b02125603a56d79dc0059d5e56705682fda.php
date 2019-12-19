<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shanti | Home</title>
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    

    <div class="container"> <!-- Contenedor ppal -->
      <header class="main-header">
        <a id="cd-logo" href="index.html"><img src="css/img/logo.png" alt="Homepage"></a>
          <nav id="cd-top-nav">
            <ul>
            <li><a href="/index">Home</a></li>
            <li>
              <?php if(auth()->guard()->check()): ?>
            <a href="/perfil">Perfil</a>
              <?php endif; ?>
              <?php if(auth()->guard()->guest()): ?>
              <a href="/login">Iniciar sesion</a>
              <?php endif; ?>
            </li>
            </ul>
          </nav>
        <a id="cd-menu-trigger" href=""><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
        </header>

      <main class="cd-main-content">

        <div class="container-fluid">
          <!-- <div class="col-sm-4 col-xs-12 col-lg-6 text-center"> -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="css/img/mat estampada.jpg" alt="Chania" width="460" height="345">
                  <div class="carousel-caption">
                    <h3>Imperdible! Se acerca Navidad</h3>
                    <p>Mat estampadas!!!</p>
                  </div>
                </div>

                <div class="item">
                  <img src="css/img/ladrillo yoga.jpg" alt="Chicago" width="460" height="345">
                  <div class="carousel-caption">
                    <h3>Promoción exclusiva</h3>
                    <p>Ladrillos de yoga!</p>
                  </div>
                </div>

                <div class="item">
                  <img src="css/img/fisiobalon.jpg" alt="New York" width="460" height="345">
                  <div class="carousel-caption">
                    <h3>Hacer yoga es salud!</h3>
                    <p>Fisiobalón</p>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          <!-- </div> -->
        </div>

        <div class="col">
          <h2>¡Bienvenido a Shanti Insumos!</h2>
          <div class="introd">
            <p>
              <br>
              Shanti Insumos es una empresa dedicada a la venta de insumos de yoga, pilates y fitness.
              Es un espacio en el que encontrarás accesorios de la mejor calidad al mejor precio.
              Contamos con un amplio stock en productos para clases, accesorios y música.
              Nuestra experiencia en el rubro nos permite garantizarte seriedad, compromiso y eficiencia.
              <br>
              <br>
              La paz en el cuerpo equilibra la mente.
            </p>

            <h3>Hoy es un buen día para hacer yoga.</h3>
            <h3>¡Visitanos y descubrite!</h3>
          </p>
        </div>
      </div>
      </main>

      <footer class="container" style="background-color: rgba(255, 255, 255, 0.8); padding-top:40px;" id="contacto">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <h2 class="text-center mb15">Contacto </h2>

          <div class="row">
          <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12">
              <img src="css/img/tienda.png" class="img-responsive center-block" alt=""/>
            </div>
            <div class="col-sm-9 col-xs-12">
              <h3>Cordoba 656</h3>
            </div>
          </div>

          <div class="col-xs-12" style="margin-top:30px;">
            <div class="col-sm-3 col-xs-12">
              <img src="css/img/email.png" class="img-responsive center-block" alt=""/>
            </div>
            <div class="col-sm-9 col-xs-12">
              <h3>shantiinsumos@gmail.com</h3>
            </div>
          </div>

          <div class="col-xs-12" style="margin-top:30px; margin-bottom:35px;">
            <div class="col-sm-3 col-xs-12">
              <img src="css/img/smartphone.png" class="img-responsive center-block" alt=""/>
            </div>
            <div class="col-sm-9 col-xs-12">
              <h3>(0381) 155-545454</h3>
            </div>
          </div>

          </div>

        </div>
        <div class="col-md-7 col-sm-12 col-xs-12 borde">
          <h2 class="text-center mb15">Nuestro Local </h2>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.416679386339!2d-65.20679108495698!3d-26.826696283164594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225c1734e49493%3A0x43d9198da5a76d38!2sPcia%20de%20C%C3%B3rdoba%20565%2C%20T4000DGK%20San%20Miguel%20de%20Tucum%C3%A1n%2C%20Tucum%C3%A1n!5e0!3m2!1ses-419!2sar!4v1573689580598!5m2!1ses-419!2sar" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </footer>

      

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
          <a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
          <a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
        </div>
      </nav>
    </div>

  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
  </body>
</html>
<?php /**PATH E:\DH\Github\Proyecto-Final-2\SPRINT 5\resources\views/index2.blade.php ENDPATH**/ ?>