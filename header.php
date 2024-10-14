<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bedfont
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- JavaScript files for bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="<?php bloginfo('stylesheet_directory'); ?>/custom.css" rel="stylesheet" />

	<!-- illow.io cookie code -->
	<script src="https://platform.illow.io/banner.js?siteId=0948d3bd-96c6-46c7-b0d9-fee58d8e08b1"></script>

	<!-- Fancybox -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	<!-- Animate CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!-- Glider CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/ahr6krx.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b7920effde.js" crossorigin="anonymous"></script>

	<script src='https://www.google.com/recaptcha/api.js'></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-YZ8SECL9T6"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bedfont'); ?></a>

		<div class="sticky-top">
			<header id="masthead" class="site-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a href="/" title="Click to go to the home page" id="logo_holder"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" class="img-fluid logo" alt="Logo"></a>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'navbarSupportedContent',
						'menu_class' => 'navbar-nav ms-auto',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
					?>
					<ul class="navbar-nav d-none d-lg-block">

						<?php
						// will return the post ID in the current language for post ID 1
						$id =  apply_filters('wpml_object_id', 778, 'post');


						?>
						<li id="menu-item-904" class="request-a-quote menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-904">
							<a href="<?= get_the_permalink($id) ?>" class="nav-link">
								<?= __('Request a Quote', 'bedfont') ?>
							</a>
						</li>

					</ul>
				</nav>
			</header><!-- #masthead -->
		</div>
		<!-- Accessibility Code for "bedfont.com" -->
		<script>
			/*

	Want to customize your button? visit our documentation page:

	https://login.equalweb.com/custom-button.taf

	*/
			window.interdeal = {
				"sitekey": "3ca63d5f9e7ab76a2ba2e0c0796fe247",
				"Position": "left",
				"domains": {
					"js": "https://cdn.equalweb.com/",
					"acc": "https://access.equalweb.com/"
				},
				"Menulang": "EN",
				"btnStyle": {
					"vPosition": [
						"80%",
						"20%"
					],
					"scale": [
						"0.8",
						"0.8"
					],
					"color": {
						"main": "#002b53",
						"second": "#ffffff"
					},
					"icon": {
						"type": 1,
						"shape": "semicircle"
					}
				}
			};
			(function(doc, head, body) {
				var coreCall = doc.createElement('script');
				coreCall.src = interdeal.domains.js + 'core/4.6.14/accessibility.js';
				coreCall.defer = true;
				coreCall.integrity = 'sha512-DeZBWLOEHK1CkmU3vQTNSXeENfZmhTHFmn7zzhvZCPERahpp/DTouMc1ZHOu+RAo1FTKnuKEf1NQyB76z8mU1Q==';
				coreCall.crossOrigin = 'anonymous';
				coreCall.setAttribute('data-cfasync', true);
				body ? body.appendChild(coreCall) : head.appendChild(coreCall);
			})(document, document.head, document.body);
		</script>