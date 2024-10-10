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
				<h3 class="mt-lg-0 mt-sm-3"><?= __("Contact Details", 'bedfont') ?></h4>
					<?= wpautop($address) ?>
					<p>
						<strong>Tel:</strong> <?= $tel ?><br>
						<strong>Email:</strong> <?= $email ?>
					</p>
			</div>
			<div class="col-lg-3 col-md-6 links">
				<h3 class="mt-lg-0 mt-sm-3"><?= __("Products", 'bedfont') ?></h4>
					<p><a href="https://www.nobreathfeno.com" target="_blank" title="Click here for the NObreath website">NObreath<sup>®</sup></a></p>
					<p><a href="/smokerlyzer">Smokerlyzer<sup>®</sup></a></p>
					<p><a href="https://www.gastrolyzer.com" target="_blank" title="Click here for the Gastrolyzer website">Gastrolyzer<sup>®</sup></a></p>
					<p><a href="https://www.toxco.co.uk" target="_blank" title="Click here for the ToxCO website">ToxCO<sup>®</sup></a></p>
					<p><a href="/medi-gas-check">Medi-Gas Check</a></p>
			</div>
			<div class="col-lg-3 col-md-6 links">
				<h3 class="mt-lg-0 mt-sm-4"><?= __("Accreditations", 'bedfont') ?></h3>
				<p><a href="<?php bloginfo('stylesheet_directory'); ?>/assets/documents/downloads/MD-502905-ISO13485-2023-2026.pdf" target="_blank" title="Click here to view our ISO accreditation">ISO 13485:2023 - 2026</a></p>
			</div>
			<div class="col-lg-3 col-md-6 links">
				<h3 class="mt-lg-0 mt-sm-4"><?= __("Useful Links", 'bedfont') ?></h3>
				<p><a href="https://www.bedfont-distributor.com/" target="_blank" title="Click here for the distributor log in page">Distributor Log-in</a></p>
				<p><a href="/careers" title="Click here for the careers page">Careers</a></p>
				<p><a href="https://support.bedfont.com/" target="_blank" title="Click here for the Bedfont help centre">Help Centre</a></p>
				<p><a href="/software" title="Click here for the software page">Software</a></p>
				<p><a href="/wp-content/themes/bedfont/assets/documents/downloads/Firmware_Updater.exe" title="Click here for the Firmware Updater Tool">Firmware Updater Tool v1.84</a></p>
				<p><a href="/cleaning-bedfont-devices" title="Click here for the Cleaning Bedfont Devices page">Cleaning Bedfont Devices</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 hr-space">
				<hr>
			</div>
			<div class="col-lg-4 col-md-12 icons-space text-center icons px-0">
				<a target="_blank" href="https://www.facebook.com/Bedfontltd/"><i class="fa fa-facebook-f"></i></a>
				<a target="_blank" href="https://twitter.com/BedfontLtd"><i class="fa-brands fa-x-twitter"></i></a>
				<a target="_blank" href="https://www.instagram.com/bedfontltd/"><i class="fa fa-instagram"></i></a>
				<a target="_blank" href="https://www.linkedin.com/company/bedfont-scientific-ltd"><i class="fa fa-linkedin"></i></a>
				<a target="_blank" href="https://www.youtube.com/user/BedfontScientificLtd"><i class="fa fa-youtube"></i></a>
			</div>
			<div class="col-lg-4 col-md-6 hr-space">
				<hr>
			</div>
			<div class="col-12 text-center mt-50">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bedfont-text-logo-white.png" class="footer-logo mx-auto" alt="White Bedfont text logo" />
				<p><small class="text-white-50">© 1976-<?php echo date("Y"); ?> Bedfont® Scientific Ltd., all rights reserved | Incorporated in England and Wales under registered number: 1289798</small></p>
				<p class="footer-link-color"><a href="/terms-and-conditions" title="Click here for our terms and conditions page">Legal Stuff</a> | <a href="/privacy-notice" title="Click here for our privacy notice page">Privacy Notice</a> | <a href="https://support.bedfont.com/en/knowledge" target="_blank" title="Click here for the support page">Help Centre</a></p>
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