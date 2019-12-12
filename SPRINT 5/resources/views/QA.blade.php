<!DOCTYPE html>
<html lang="es-AR">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

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
    <title>Shanti | Preguntas Frecuentes</title>
  </head>
  <body>
    <div class="container"> <!-- Contenedor ppal -->
      <header class="main-header">
        <a id="cd-logo" href="index.html"><img src="css/img/logo.png" alt="Homepage"></a>
          <nav id="cd-top-nav">
            <ul>
            <li><a href="/index">Home</a></li>
            <li>
              @auth
            <a href="/perfil">Perfil</a>                  
              @endauth
              @guest
              <a href="/login">Iniciar sesion</a>      
              @endguest
            
            
            </li>
            </ul> 	 	 
          </nav>
        <a id="cd-menu-trigger" href=""><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
        </header>

    <main class="qa">
      <div class="ColumnaTextoFaq">
        <h2>Preguntas Frecuentes</h2>
        <br>
        <p class="TituloMega">¿QUÉ FORMAS DE PAGO PUEDO UTILIZAR?</p>
        <p>Disponemos de los siguientes medios de pago:<br>
          <img alt="" height="24" src="https://d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/visa@2x.png" />
          <img alt="" height="24" src="https://d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/mastercard@2x.png" />
          <img alt="" height="24" src="https://d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/amex@2x.png" />
          <img alt="" height="24" src="https://d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/pagofacil@2x.png" />
          <img alt="" height="24" src="https://d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/ar/rapipago@2x.png" />
          <img alt="" height="24" src="https://d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/mercadopago@2x.png" />
        </p>
        <br>
        <p class="TituloMega">¿CUÁL ES EL COSTO DE ENVÍO?</p>
        <p>El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra.</p>
        <br>
        <p class="TituloMega">¿COMO SE REALIZAN LOS ENVÍOS?</p>
        <p>Trabajamos con:<br>
          <img alt="" height="24" src="https://d26lpennugtm8s.cloudfront.net/assets/common/img/logos/shipping/ar/oca@2x.png" />
        </p>
        <br>
        <p class="TituloMega">¿CUÁNTO TARDA EN LLEGAR MI PEDIDO?</p>
        <p>En general la demora se encuentra entre 3 y 7 días hábiles luego de acreditado el pago. Una vez finalizada la compra te facilitaremos el número de envío para que realices el seguimiento a través de www.oca.com.ar</p>
        <br>
        <p class="TituloMega">¿PUEDO REALIZAR UN CAMBIO?</p>
        <p>
          <ul>
          	<li>Los cambios podrán realizarse dentro de los 30 días de efectuada la compra, por única vez.</li>
          	<li>El artículo debe traer su ticket de compra, etiqueta colgante y bolsa que fue entregada al momento de realizar la compra.</li>
          	<li>El mismo se hará una vez que hayamos recibido el artículo y controlado que se encuentra en óptimas condiciones, sin uso, desgaste o manchas. Tal cual fue entregado.</li>
          	<li>Los cambios solo podrá;n realizarse por otro artículo disponible en la tienda online.</li>
          	<li>Los articulos de liquidación solo se pueden cambiar por liquidación.</li>
          	<li>Sólo se aplican para las compras realizadas en nuestro Shop Online: <a href="#">www.shantiinsumos.com.ar</a></li>
          	<li>Deben realizarse por el mismo canal dónde fue efectuada la compra, corriendo por cuenta del comprador los gastos de envío que genere el mismo.</li>
          	<li>Para solicitar el cambio enviar un mail a <a href="mailto:shantiinsumos@gmail.com">shantiinsumos@gmail.com</a></li>
          </ul>
        </p>
        <br>
        <p class="TituloMega">¿TENÉS PROBLEMAS PARA INICIAR SESIÓN?</p>
        <p>Ingresá siempre desde
          <a href="#">www.shantiinsumos.com.ar</a>
          y nunca desde el mail de confirmación que recibiste en tu casilla. Ese mail es para usarse una sola vez para confirmar la cuenta, no para ingresar.
        </p>
        <p>El mail de confirmación tiene un link con fecha de vencimiento. Eso significa que, por cuestiones de seguridad, después de un tiempo, no sirve más. Por eso, si te aparece Authentication Error. Access expired, significa que estás intentando usar un link que ya no sirve.</p>
        <br>
        <p class="TituloMega">¿TE APARECE ERROR 403?</p>
        <p>El error 403 ocurre por dos motivos:</p>
        <p>1. Estás ingresando con un mail diferente al que utilizaste para registrarte. Cerrá sesión y volvé a iniciarla asegurándote de que estás ingresando con tu mail @...</p>
        <p>2. O bien, tu mail todavía no fue habilitado. Esperá a que te llegue el mensaje de confirmación.</p>
        <br>
        <p class="TituloMega">¿CÓMO HAGO PARA CAMBIAR MI CONTRASEÑA?</p>
        <p>Si querés modificar tu contraseña ingresá a <a href="#">www.shantiinsumos.com.ar</a>, hacé click en ¿Olvidó su contraseña? e ingresá tu mail. Te va a llegar un correo a tu casilla para que confirmes el pedido.</p>
        <p>¡No te duermas!  El link para confirmar el cambio de contraseña tiene fecha de vencimiento, es decir que, después de tiempo, expira y ya no se puede usar. Si te pasa eso, no te preocupes. Volvé a mandar la solicitud de cambio y utilizá el link del último mail que recibiste para realizar la modificación.</p>
        <br>
        <br>
        </div>

        <!-- <div class="ContenedorFooter">
        </div> -->
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
