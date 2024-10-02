<?php
/*

Template Name: Events Page

 */

get_header('');
?>

	<section class="p-0 position-relative">
		<div class="container-fluid overlay-img-holder">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/who-we-are.jpg" class="w-100" alt="Image of front of Bedfont Scientific Ltd">
			<div class="overlay">
				<div class="col-12 col-md-6 mx-auto">
					<h1><?php single_post_title(); ?></h1>
					<p>Bedfont<sup>®</sup> are always featuring at events all around the world to show off our amazing products. Take a look below at some of the events we have coming up.</p>
				</div>
			</div>
		</div>
		<!--<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="30px" viewBox="0 0 1280 140" preserveAspectRatio="none" style="position: absolute;bottom: 0;"><g fill="#fff"><path d="M1280 86c-19.9-17.21-40.08-39.69-79.89-39.69-57.49 0-56.93 46.59-115 46.59-53.61 0-59.76-39.62-115.6-39.62C923.7 53.27 924.26 87 853.89 87c-89.35 0-78.74-87-188.2-87C554 0 543.95 121.8 423.32 121.8c-100.52 0-117.84-54.88-191.56-54.88-77.06 0-100 48.57-151.75 48.57-40 0-60-12.21-80-29.51v54H1280z"></path></g></svg>-->
	</section>
	<section>
		<div class="container">
			<div class="col-12">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
		</div>
	</section>

<?php
get_footer('');