<?php
/*

Template Name: Request a Quote Page

 */

get_header('');
?>

	<section class="subtle-bg">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/subtle-bg.jpg" class="subtle-bg" alt="Subtle background img">
		<div class="container">
			<div class="col-12 col-md-8 mx-auto text-center">
				<h1>Request a Quote</h1>
				<p>Bedfont<sup>®</sup> operates through a network of carefully selected distributors worldwide, who share our goal of innovating and improving healthcare through rapid and non-invasive breath analysis. To be contacted by your local distributor and receive a personalised quote, please let us know where you are from and which product(s) you are interested in by filling out the form below:</p>
			</div>
		</div>
		<!--<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="30px" viewBox="0 0 1280 140" preserveAspectRatio="none" style="position: absolute;bottom: 0;"><g fill="#fff"><path d="M1280 86c-19.9-17.21-40.08-39.69-79.89-39.69-57.49 0-56.93 46.59-115 46.59-53.61 0-59.76-39.62-115.6-39.62C923.7 53.27 924.26 87 853.89 87c-89.35 0-78.74-87-188.2-87C554 0 543.95 121.8 423.32 121.8c-100.52 0-117.84-54.88-191.56-54.88-77.06 0-100 48.57-151.75 48.57-40 0-60-12.21-80-29.51v54H1280z"></path></g></svg>-->
	</section>
	<section>
		<div class="container request-a-quote">
			<div class="col-12">
				<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
				<script>
				  hbspt.forms.create({
					portalId: "6295439",
					formId: "d9db5ac5-7f86-48d5-aa80-beefcfaa0f27"
				});
				</script>
			</div>
		</div>
	</section>

<?php
get_footer('');