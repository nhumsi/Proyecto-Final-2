
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="/css/app.css">
	<title>Shanti | Carrito</title>
	<link rel="pingback" href="#">
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Yoga y Fitness &raquo; Feed" href="#" />
	<link rel="alternate" type="application/rss+xml" title="Yoga y Fitness &raquo; RSS de los comentarios" href="#" />
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/css/styles.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/vegas.min.css">
	<meta name="generator" content="WooCommerce 3.4.5" />
</head>
	<body class="page-template-default page page-id-6 custom-background wp-custom-logo woocommerce-cart woocommerce-page woocommerce-no-js right-sidebar woocommerce-active">
		<div id="page" class="hfeed site">

			<header class="main-header">
        <a id="cd-logo" href="index.html"><img src="/css/img/logo.png" alt="Homepage"></a>
          <nav id="cd-top-nav">
            <ul>
            <li><a href="/home">Home</a></li>
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

			<div id="content" class="site-content" tabindex="-1">
				<div class="col-full">

				<nav class="woocommerce-breadcrumb"><a href="/fitness">Inicio</a>&nbsp;&#47;&nbsp;Carrito</nav>
				<div class="woocommerce"></div>
				<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div id="post-6" class="post-6 page type-page status-publish hentry">

							<h1 class="entry-title">Carrito</h1>
						<div class="entry-content">
						<div class="woocommerce">
							<form class="woocommerce-cart-form" action="/carrito" method="post">
								<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Producto</th>
										<th class="product-price">Precio</th>
										<th class="product-quantity">Cantidad</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="woocommerce-cart-form__cart-item cart_item">
									<td class="product-remove">
										<a href="https://yogayfitness.com.ar/compras/carrito/?remove_item=cdc0d6e63aa8e41c89689f54970bb35f&#038;_wpnonce=7173307061" class="remove" aria-label="Borrar este artículo" data-product_id="619" data-product_sku="">&times;</a>
									</td>
									<td class="product-thumbnail">
										<a href="https://yogayfitness.com.ar/compras/producto/aku-ball/"><img width="300" height="300" src="https://yogayfitness.com.ar/compras/wp-content/uploads/2017/05/pelota-con-pinches-aku-ball.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" /></a>
									</td>
									<td class="product-name" data-title="Producto">
									<a href="css/img/aku ball"><?php echo e($producto->nombre); ?></a>
									</td>

									<td class="product-price" data-title="Precio">
									<span class="woocommerce-Price-amount amount">$<?php echo e(number_format($producto->precio, 2)); ?></span>						</td>

									<td class="product-quantity" data-title="Cantidad">
										<div class="quantity">
											<label class="screen-reader-text" for="quantity_5dede930c7eb2"></label>
											<input
												type="number"
												id="quantity_5dede930c7eb2"
												class="input-text qty text"
												step="1"
												min="0"
												max=""
												name="cart[cdc0d6e63aa8e41c89689f54970bb35f][qty]"
												value="1"
												title="Cantidad"
												size="4"
												pattern="[0-9]*"
												inputmode="numeric"
												aria-labelledby="AKU BALL cantidad" />
										</div>
									</td>
									<td class="product-subtotal" data-title="Total">
										<span class="woocommerce-Price-amount amount">$<?php echo e(number_format($producto->precio, 2)); ?></span>
									</td>
								</tr>
					<tr>
						<td colspan="6" class="actions">

							<br>
							<button type="submit" class="button" name="update_cart" value="Actualizar carrito">Actualizar carrito</button>
							<br>
							<input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="7173307061" /><input type="hidden" name="_wp_http_referer" value="/compras/carrito/" />				</td>
					</tr>

							</tbody>
			</table>
			</form>

		<div class="cart-collaterals">
			<div class="cart_totals ">


			<h2>Total del carrito</h2>

			<table cellspacing="0" class="shop_table shop_table_responsive">

				<tr class="cart-subtotal">
					<th>Subtotal</th>
					<td data-title="Subtotal"><span class="woocommerce-Price-amount amount">$<?php echo e(number_format($producto->precio, 2)); ?></span></td>
				</tr>

					<tr class="shipping">
			<th>Envío</th>
			<td data-title="Envío">
							Coordinar con el Vendedor (Oca o Expreso) <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping:7" class="shipping_method" />
				</td>
		</tr>

				<tr class="order-total">
					<th>Total</th>
					<td data-title="Total"><strong><span class="woocommerce-Price-amount amount">$<?php echo e(number_format($producto->precio, 2)); ?></span></strong> </td>
				</tr>
			</table>

			<div class="wc-proceed-to-checkout">

				<a href="/fitness" class="checkout-button button alt wc-forward">
					Finalizar compra</a>
					<br>
					</div>
				</div>
				</div>
				</div>
				</div><!-- .entry-content -->
				</div><!-- #post-## -->
				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col-full -->
		</div><!-- #content -->


			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="col-full">

							<div class="site-info">
					&copy; Yoga y Fitness 2019						<br /> Storefront diseñado por <a href="http://www.woocommerce.com" title="WooCommerce - The Best eCommerce Platform for WordPress" rel="author">WooCommerce</a>.
				</div><!-- .site-info -->

				</div><!-- .col-full -->
			</footer><!-- #colophon -->
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

		</div><!-- #page -->

		<script type="application/ld+json">{"@context":"http:\/\/schema.org\/","@type":"WebPage","url":"https:\/\/yogayfitness.com.ar\/compras\/carrito\/","name":"Carrito","description":""}</script><script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":"1","item":{"name":"Inicio","@id":"https:\/\/yogayfitness.com.ar\/compras"}},{"@type":"ListItem","position":"2","item":{"name":"Carrito"}}]}</script>	<script type="text/javascript">
				var c = document.body.className;
				c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
				document.body.className = c;
			</script>
			<script type='text/javascript'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = {"ajax_url":"\/compras\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compras\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"https:\/\/yogayfitness.com.ar\/compras\/carrito\/","is_cart":"1","cart_redirect_after_add":"no"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='https://yogayfitness.com.ar/compras/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.4.5'></script>
		<script type='text/javascript' src='https://yogayfitness.com.ar/compras/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
		<script type='text/javascript' src='https://yogayfitness.com.ar/compras/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var woocommerce_params = {"ajax_url":"\/compras\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compras\/?wc-ajax=%%endpoint%%"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='https://yogayfitness.com.ar/compras/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.4.5'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var wc_country_select_params = {"countries":"{\"AR\":{\"C\":\"Ciudad Aut\\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\\u00e9n\",\"R\":\"R\\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\u00e1n\"}}","i18n_select_state_text":"Elige una opci\u00f3n\u2026","i18n_no_matches":"No se encontraron coincidencias","i18n_ajax_error":"Error al cargar","i18n_input_too_short_1":"Por favor, introduce 1 o m\u00e1s caracteres","i18n_input_too_short_n":"Por favor, introduce %qty% o m\u00e1s caracteres","i18n_input_too_long_1":"Por favor, borra 1 car\u00e1cter.","i18n_input_too_long_n":"Por favor borra %qty% caracteres","i18n_selection_too_long_1":"Solo puedes seleccionar 1 art\u00edculo","i18n_selection_too_long_n":"Solo puedes seleccionar %qty% art\u00edculos","i18n_load_more":"Cargando m\u00e1s resultados\u2026","i18n_searching":"Buscando\u2026"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='https://yogayfitness.com.ar/compras/wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=3.4.5'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var wc_address_i18n_params = {"locale":"{\"default\":{\"first_name\":{\"label\":\"Nombre\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Apellidos\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Nombre de la empresa\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Pa\\u00eds\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Direcci\\u00f3n de la calle\",\"placeholder\":\"N\\u00famero de la casa y nombre de la calle\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"placeholder\":\"Apartamento, habitaci\\u00f3n, etc. (opcional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Localidad \\\/ Ciudad\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"Regi\\u00f3n \\\/ Provincia\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"C\\u00f3digo postal\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}},\"AR\":{\"first_name\":{\"label\":\"Nombre\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Apellidos\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Nombre de la empresa\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Pa\\u00eds\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Direcci\\u00f3n de la calle\",\"placeholder\":\"N\\u00famero de la casa y nombre de la calle\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"placeholder\":\"Apartamento, habitaci\\u00f3n, etc. (opcional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Localidad \\\/ Ciudad\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"Regi\\u00f3n \\\/ Provincia\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"C\\u00f3digo postal\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}","locale_fields":"{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}","i18n_required_text":"obligatorio","i18n_optional_text":"opcional"};
		/* ]]> */
		</script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var wc_cart_params = {"ajax_url":"\/compras\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compras\/?wc-ajax=%%endpoint%%","update_shipping_method_nonce":"729504d999","apply_coupon_nonce":"f547a940b9","remove_coupon_nonce":"aacd859043"};
		/* ]]> */
		</script>
		/* <![CDATA[ */
		var pwsL10n = {"unknown":"Fortaleza de contrase\u00f1a desconocida","short":"Muy d\u00e9bil","bad":"D\u00e9bil","good":"Medio","strong":"Fuerte","mismatch":"No coinciden"};
		/* ]]> */
		</script>

		/* <![CDATA[ */
		var wc_password_strength_meter_params = {"min_password_strength":"3","i18n_password_error":"Por favor, introduce una contrase\u00f1a m\u00e1s fuerte.","i18n_password_hint":"Truco: La contrase\u00f1a debe ser de al menos doce caracteres. Para hacerla m\u00e1s fuerte usa may\u00fasculas y min\u00fasculas, n\u00fameros y s\u00edmbolos como ! \" ? $ % ^ y )."};
		/* ]]> */
		</script>

		/* <![CDATA[ */
		var wc_cart_fragments_params = {"ajax_url":"\/compras\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compras\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_36eb395ecdec8e981abff885f62b8702","fragment_name":"wc_fragments_36eb395ecdec8e981abff885f62b8702"};
		/* ]]> */
		</script>

		      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		      <script src="/js/main.js"></script> <!-- Resource jQuery -->

	</body>
</html>
<?php /**PATH E:\DH\Github\Proyecto-Final-2\SPRINT 5\resources\views/carrito.blade.php ENDPATH**/ ?>