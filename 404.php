<?php
/*

Template Name: 404 page Page

 */

get_header('');
?>

	<section class="error-404">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/404-bubble.png" alt="Bedfont Blue Bubble" />
		<div class="container">
			<div class="col-12">
				<h1>Page Not Found</h1>
				<p class="mb-5">Ah, the dreaded 404 page. Lets get you back on track.</p>
			</div>
			<div class="row m-0">
				<h2 class="mb-5">What were you looking for?</h2>
				<div class="col-12 col-lg-4 ps-lg-0">
					<p><a href="home" title="Click here for the Home page">Home</a></p>
					<p><a href="about-us" title="Click here for the About Us page">About Us</a></p>
					<p><a href="our-eco-stance" title="Click here for the Eco page">Our Eco Stance</a></p>
					<p><a href="our-awards" title="Click here for the Awards page">Our Awards</a></p>
				</div>
				<div class="col-12 col-lg-4 ps-lg-0">
					<p><a href="medical-advisory-board" title="Click here for the Medical Advisory Board page">Medical Advisory Board</a></p>
					<p><a href="products" title="Click here for the Products page">Products</a></p>
					<p><a href="news" title="Click here for the News page">News</a></p>
					<p><a href="events" title="Click here for the Events page">Events</a></p>
				</div>
				<div class="col-12 col-lg-4 ps-lg-0">
					<p><a href="careers" title="Click here for the Careers page">Careers</a></p>
					<p><a href="https://support.bedfont.com/" target="_blank" title="Click here for the Help Centre">Help Centre</a></p>
					<p><a href="contact" title="Click here for the Contact page">Contact</a></p>
					<p><a href="request-a-quote" title="Click here for the Request a Quote page">Request a Quote</a></p>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer('');