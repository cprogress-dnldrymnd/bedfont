<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bedfont
 */
$tel = get__theme_option('tel');
$email = get__theme_option('email');
$address = get__theme_option('address');
?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 location">
				<?php dynamic_sidebar('footer_column_1') ?>
			</div>
			<div class="col-lg-3 col-md-6 links">
				<?php dynamic_sidebar('footer_column_2') ?>
			</div>
			<div class="col-lg-3 col-md-6 links">
				<?php dynamic_sidebar('footer_column_3') ?>
			</div>
			<div class="col-lg-3 col-md-6 links">
				<?php dynamic_sidebar('footer_column_4') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 hr-space">
				<hr>
			</div>
			<div class="col-lg-4 col-md-12 icons-space text-center icons px-0">
				<?= do_shortcode('[socials class="" item_class=""]') ?>
			</div>
			<div class="col-lg-4 col-md-6 hr-space">
				<hr>
			</div>
			<div class="col-12 text-center mt-50 footer-bottom">
				<?php dynamic_sidebar('footer_bottom') ?>
			</div>
		</div>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
	const config = {
		type: 'slider',
		perView: 3,
		autoplay: 5000,
		breakpoints: {
			1000: {
				perView: 2
			},
			600: {
				perView: 1
			}
		}
	};

	new Glide('.glide', config).mount()
</script>
<script>
	const config2 = {
		type: 'carousel',
		perView: 3,
		autoplay: 5000,
		breakpoints: {
			1000: {
				perView: 2
			},
			600: {
				perView: 1
			}
		}
	};

	new Glide('.glide2', config2).mount()
</script>

<?php wp_footer(); ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- Animate CDN -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/float-panel.js"></script>

<script type="text/javascript">
	try {
		Typekit.load();
	} catch (e) {}
</script>

</body>

</html>