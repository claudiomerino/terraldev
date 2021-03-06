<!doctype html>
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' | '; } ?><?php bloginfo('name'); if(is_home()||is_page('inicio')) { echo ' | '; bloginfo('description'); } ?></title>
	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php endwhile; endif; elseif(is_home()) : ?>
	<meta name="description" content="" />
	<?php else: ?>
	<meta name="description" content=""> 
	<?php endif; ?>
	<meta name="keywords" content="" />	
	<?php if(is_home() || is_single() || is_page()) { echo '<meta name="robots" content="index,follow" />'; } else { echo '<meta name="robots" content="noindex,follow" />'; } ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<?php if(!is_page('contacto')) { ?>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/tooltipster.css" />
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.10.2.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.lettering.js" type="text/javascript"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.bxslider.js" type="text/javascript"></script>
		<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/css/colorbox.css" rel="stylesheet" media="screen">
		<!-- Facebook Pixel Code 
					<script>
					!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
					n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
					t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
					document,'script','https://connect.facebook.net/en_US/fbevents.js');
					
					fbq('init', '606783159480484');
					fbq('track', "PageView");</script>
					<noscript><img height="1" width="1" style="display:none"
					src="https://www.facebook.com/tr?id=606783159480484&ev=PageView&noscript=1"
					/></noscript>
					<!-- End Facebook Pixel Code -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.colorbox.js" type="text/javascript"></script>
		<script>
			$(document).ready(function(){
				$(".inline").colorbox({inline:true, width:"50%"});
			});
		</script>
		<?php if(is_page('tarifas') || is_page('reservar')) { ?>
			<?php
				$selected = get_field('_temporada_vigente', 'option');
				if( in_array('temporada_alta', $selected) ) {
			?>
				<script type="text/javascript">
					$(function(){
						$('#Container').mixItUp({
						    load: {
						      	filter: '.temporada-alta',
						    }
						});
					});
				</script>
			<? } else { ?>
				<script type="text/javascript">
					$(function(){
						$('#Container').mixItUp({
						    load: {
						      	filter: '.temporada-media',
						    }
						});
					});
				</script>
			<? } ?>
		<? } else { ?>
			<script type="text/javascript">
				$(function(){
					$('#Container').mixItUp({
					    load: {
					     	filter: '.destacados',
					    }
					});
				});
			</script>
		<? } ?>
		<script type="text/javascript">
		  	$(document).ready(function(){
				$('.bxslider').bxSlider({
				  pagerCustom: '#bx-pager'
				});
		  	});
		</script>
		<script>
		  	$(document).ready(function() {
				$(".item-tour h4 a").lettering('words');
			});
		</script>
		<?php if(is_page('restaurant')) { ?>
			<script>
				$(document).ready(function(){
					$(".ajax").colorbox({iframe:true, width:"40%", height:"85%"});
				});
			</script>
		<? } ?>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.parallax-1.1.3.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fadethis.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#intro').parallax("50%", 0.1);
			})
		</script>
		 <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.tooltipster.min.js"></script>
		 <script>
	        $(document).ready(function() {
	            $('.tooltip').tooltipster();
	        });
	    </script>
	<? } ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-44982249-11', 'auto');
		ga('send', 'pageview');
	</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('after_open_body_tag'); ?>
	
	<? if(!is_page('contacto')) { ?>
	<div id="mobile-bar">
		<div class="container">
			<!--a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
			<h1 class="mob-title"><?php bloginfo('name'); ?></h1-->
			
			<!-- Brand and toggle get grouped for better mobile display -->
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a-->
			</div>
		</div>
			
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<button type="button" class="cerrar-nav" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="glyphicon glyphicon-remove"></span></button>
				
				<div class="logo-nav"><img src="<?php bloginfo('stylesheet_directory'); ?>/imag/logo-5estrellas.svg"></div>
				<ul class="nav navbar-nav">
					<li><a href="<? bloginfo('wpurl');?>">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotel &amp; Spa <span class="glyphicon glyphicon-menu-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://www.terralhotel.cl/hotel/">Hotel</a></li>
							<li><a href="http://www.terralhotel.cl/spa/">Spa</a></li>
							<li><a href="http://www.terralhotel.cl/habitaciones/">Habitaciones</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurant &amp; Bar <span class="glyphicon glyphicon-menu-down"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://www.terralhotel.cl/restaurant/">Restaurant</a></li>
							<li><a href="http://www.terralhotel.cl/bar/">Bar</a></li>
						</ul>
					</li>
					
					<li><a href="http://www.terralhotel.cl/tarifas/">Tarifas</a></li>
					<li><a href="http://www.terralhotel.cl/tours-y-actividades/">Tours y Actividades</a></li>
					<li><a href="http://www.terralhotel.cl/promociones/">Promociones</a></li>
					<li><a href="http://www.terralhotel.cl/reservar/">RESERVAR</a></li>
				</ul>
		</div>

	</div>
	<? } ?>

	<div class="wrapper">
		<div id="page">
			<? if(is_page('contacto')) { ?>
				<header id="header-contacto"></header>
			<? } else { ?>
				<?php if(!is_front_page() || !is_page('inicio')) { ?>
					<header id="header" class="header header-int<?php if(is_page('el-valle-de-elqui')) { ?> header-gal<? } ?> clearfix">
				<? } else { ?>
					<header id="header" class="header clearfix">
				<? } ?>
					<div class="cont-header container">
						<div class="auxi-data clearfix">
							<address>reservas@terralhotel.cl | <div class="hidden-xs">San Martín 387, Vicu&ntilde;a, Chile. </div>+56 51 241 2217</address>
						</div>
						<div class="clearfix">
							<nav class="main-nav clearfix nav row">
								<div class="cont-logo col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<a href="<? bloginfo('wpurl');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/imag/logo-5estrellas.svg" class="back-foot" alt="Terral Hotel &amp; Spa" /></a>
								</div>
								<div class="col-md-5 col-sm-4 int-nav left">
									<?php
										wp_nav_menu( array(
											'theme_location' 	=> 'ci_main_menu_left',
											'fallback_cb' 		=> '',
											'container' 		=> '',
											'menu_id' 			=> '',
											'menu_class' 		=> 'navigation left-nav'
										));
									?>
								</div>

								<div class="col-md-2 col-sm-4 int-nav"></div>

								<div class="col-md-5 col-sm-4 int-nav">
									<?php
										wp_nav_menu( array(
											'theme_location' 	=> 'ci_main_menu_right',
											'fallback_cb' 		=> '',
											'container' 		=> '',
											'menu_id' 			=> '',
											'menu_class' 		=> 'navigation right-nav'
										));
									?>
								</div>
							</nav>
							
						</div> <!-- main container -->
					</div>
				</header>
			<? } ?>
			<?php if(is_page('hotel') || is_page('spa') || is_page('habitaciones') || is_page('reservar') || is_page('tarifas') || is_page('tours-y-actividades') || is_page('promociones') || is_page('carro')) { ?>
				<?php if( get_field('_subir_imagen') ): ?>
					<div class="cont-top">
		    			<img src="<?php the_field('_subir_imagen'); ?>" class="img-responsive main-image" />
			   			<div class="intro-int-site no-float">
			   				<?php 
								$cabecera = get_post_meta($post->ID, '_ingresar_titulo_cabecera', true);
								echo '<h2>'.$cabecera.'</h2>';
							?>
						</div>
					</div>
				<?php endif; ?>
			<? } ?>
			<?php if (!( is_front_page() || is_page('inicio') || is_page('contacto') || is_page())) { ?>
				<? if(function_exists('get_gallery_images')) { ?>
					<div id="gallery" class="gallery-head block-image clearfix block">
						<? echo get_gallery_images();?>
					</div>
				<? } else { ?>
					<?php if( get_field('_subir_imagen') ): ?>
						<div class="cont-top">
		    				<img src="<?php the_field('_subir_imagen'); ?>" class="img-responsive main-image" />
			    			<div class="intro-int-site no-float">
			    				<?php 
									$cabecera = get_post_meta($post->ID, '_ingresar_titulo_cabecera', true);
									echo '<h2>'.$cabecera.'</h2>';
								?>
							</div>
						</div>
					<?php endif; ?>
				<? } ?>
			<? } ?>
			<?php if (is_page('restaurant') || is_page('bar') || is_page('el-valle-de-elqui')) { ?>
				<div id="gallery" class="gallery-head block-image clearfix block">
					<? echo get_gallery_images();?>
				</div>
			<? } ?>