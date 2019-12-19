<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		
		<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
		<title>Shanti | Catalogo </title>
		
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<link rel="stylesheet" href="css/app.css">
		
		<link rel='stylesheet' id='storefront-woocommerce-style-css'  href='http://yogayfitness.com.ar/compras/wp-content/themes/storefront/assets/sass/woocommerce/woocommerce.css?ver=4.9.11' type='text/css' media='all' />
	</head>

  <body>
		<div class="container">

			<header class="main-header">
				<a id="cd-logo" href="index.html"><img src="css/img/logo.png" alt="Homepage"></a>
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
    		<nav class="woocommerce-breadcrumb"><a href="#">Inicio</a>&nbsp;&#47;&nbsp;Fitness</nav>
        <div class="woocommerce"></div>
        <div id="primary" class="content-area">
    			<main id="main" class="site-main" role="main">
    			  <h1 class="woocommerce-products-header__title page-title">Catálogo | Fitness</h1>
						<br>
						<br>

          
          <ul class="products columns-12">
						<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="post-403 product type-product status-publish has-post-thumbnail product_cat-otros-productos first outofstock taxable shipping-taxable purchasable product-type-simple">
	            	<a href="#" class="ll">
									
									
									<img width="199" height="300" src="https://placeimg.com/640/480/tech" class="post-image" alt="" sizes="(max-width: 199px) 100vw, 199px" />
									<h2 class="woocommerce-loop-product__title"><?php echo e($producto->Nombre); ?></h2>
	            		<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo e($producto->precio); ?></span></span>
		            </a>
								<a href="/carrito/<?php echo e($producto->id); ?>" data-quantity="1" class="button product_type_simple ajax_add_to_cart" data-product_id="403" data-product_sku="" aria-label="Lee más sobre &ldquo;Aceites esenciales  30c/c&rdquo;" rel="nofollow">Añadir al carrito</a>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </ul>
	      </main><!-- #main -->
    		</div><!-- #primary -->
  			</div><!-- .col-full -->
    	</div><!-- #content -->
		</div>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="col-full">
					<div class="site-info"> &copy; Shanti Insumos 2019
					<br />
					</div><!-- .site-info -->
					<div class="storefront-handheld-footer-bar">
						<ul class="columns-12">
							<li class="my-account">
								<a href="">Mi cuenta</a>
							</li>
							<li class="search">
								<a href="">Buscar</a>
								<div class="site-search">
									<div class="widget woocommerce widget_product_search">
										<form role="search" method="get" class="woocommerce-product-search" action="#">
	    								<label class="screen-reader-text" for="woocommerce-product-search-field-1">Buscar por:</label>
	    								<input type="search" id="woocommerce-product-search-field-1" class="search-field" placeholder="Buscar productos&hellip;" value="" name="s" />
	    								<button type="submit" value="Buscar">Buscar</button>
	    								<input type="hidden" name="post_type" value="product" />
	    							</form>
							    </div>
								</div>
							</li>
							<li class="cart">
								<a class="footer-cart-contents" href="" title="Ver carrito de la compra">
	    						<span class="count">Carrito</span>
	    					</a>
							</li>
						</ul>
	  			</div>
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

  	<script type='text/javascript'>
	    /* <![CDATA[ */
	    var wc_add_to_cart_params = {"ajax_url":"\/compras\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/compras\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Ver carrito","cart_url":"http:\/\/yogayfitness.com.ar\/compras\/carrito\/","is_cart":"","cart_redirect_after_add":"no"};
	    /* ]]> */
  	</script>
  	<script type='text/javascript'>
	    /* <![CDATA[ */
	    var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
	    /* ]]> */
    </script>

  </body>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
</html>
<?php /**PATH E:\DH\Github\Proyecto-Final-2\SPRINT 5\resources\views/fitness.blade.php ENDPATH**/ ?>