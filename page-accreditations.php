<?php
/*

Template Name: Accreditations Page

 */

get_header('');
?>

	<section class="p-0 position-relative">
		<div class="container-fluid overlay-img-holder">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/who-we-are.jpg" class="w-100" alt="Image of front of Bedfont Scientific Ltd">
			<div class="overlay">
				<div class="col-12 col-md-8 mx-auto">
					<h1>Accreditations</h1>
					<p>We pride ourself on the accreditations we hold as they are the review of our business processes and levels of service by an accredited body. Take a look below at the following accreditations we have here at Bedfont<sup>®</sup> Scientific Ltd.</p>
				</div>
			</div>
		</div>
		<!--<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="30px" viewBox="0 0 1280 140" preserveAspectRatio="none" style="position: absolute;bottom: 0;"><g fill="#fff"><path d="M1280 86c-19.9-17.21-40.08-39.69-79.89-39.69-57.49 0-56.93 46.59-115 46.59-53.61 0-59.76-39.62-115.6-39.62C923.7 53.27 924.26 87 853.89 87c-89.35 0-78.74-87-188.2-87C554 0 543.95 121.8 423.32 121.8c-100.52 0-117.84-54.88-191.56-54.88-77.06 0-100 48.57-151.75 48.57-40 0-60-12.21-80-29.51v54H1280z"></path></g></svg>-->
	</section>
	<section id="info_page">
		<div class="container">
			<div class="row m-0">
				<div class="col-12 col-md-6 pe-md-4">
					<div class="accreditation">
						<h2>Quality Management System</h2>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bsi-logo-accreditation.jpg" class="img-fluid" alt="BSI Logo">
						<p>The latest edition Quality Management System specifically for the Medical Device Industry. Demonstrates compliance to a recognised regulatory quality system.</p>
						<div class="row">
							<div class="col-10 col-lg-6 mx-auto">
								<div class="download-inner">
									<h3 style="">ISO 13485:2016</h3>
									<h4>MD 502905</h4>
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/documents/downloads/MD-502905-ISO13485-1612.pdf" target="_blank" class="btn btn-accreditation">Download</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 pe-md-4">
					<div class="accreditation">
						<h2>CE Certificate</h2>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/CE-mark-accreditation.jpg" class="img-fluid" alt="CE Mark Logo">
						<p>Our medical devices are CE marked to demonstrate compliance with the essential requirements of the Medical Device Directive 93/42/EEC, enabling our products to be legally marketed in the EU.</p>
						<div class="row">
							<div class="col-10 col-lg-6 mx-auto">
								<div class="download-inner">
									<h3>CE 58024</h3>
									<h4>Smokerlyzer &amp; ToxCO</h4>
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/documents/downloads/CE-58024.pdf" target="_blank" class="btn btn-accreditation">Download</a>
								</div>
							</div>
							<div class="col-10 col-lg-6 mx-auto">
								<div class="download-inner">
									<h3>CE 01469</h3>
									<h4>NObreath &amp; Gastrolyzer</h4>
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/documents/downloads/CE-01469.pdf" target="_blank" class="btn btn-accreditation">Download</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="glide2">
						<div class="glide__track" data-glide-el="track">
							<ul class="glide__slides">
								<li class="glide__slide">
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bsi-logo.png" data-fancybox="gallery" >
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bsi-logo.png" class="img-fluid" alt="bsi Logo" />
									</a>
								</li>
								<li class="glide__slide">
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ecrep.png" data-fancybox="gallery" >
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ecrep.png" class="img-fluid" alt="EC Representative" />
									</a>
								</li>
								<li class="glide__slide">
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/CE-mark-in-blue.png" data-fancybox="gallery" >
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/CE-mark-in-blue.png" class="img-fluid" alt="CE mark" />
									</a>
								</li>
								<li class="glide__slide">
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/chrep.png" data-fancybox="gallery" >
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/chrep.png" class="img-fluid" alt="Switzerland Representative" />
									</a>
								</li>
								<li class="glide__slide">
									<a href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gastrochart-award.png" data-fancybox="gallery" >
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gastrochart-award.png" class="img-fluid" alt="GastroChart award">
									</a>
								</li>
							</ul>
						</div>
						<div class="glide__arrows" data-glide-el="controls">
							<button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/prev.png" class="img-fluid" alt="Back arrow" /></button>
							<button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/next.png" class="img-fluid" alt="Next arrow" /></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer('');