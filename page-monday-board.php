<?php
/*

Template Name: Monday Board Page

 */

get_header('');
?>
	<section class="p-0 position-relative">
		<div class="container-fluid overlay-img-holder">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/products.jpg" class="w-100" alt="Image of front of Bedfont Scientific Ltd">
			<div class="overlay">
				<div class="col-12 col-md-6 mx-auto">
					<h1>Monday Board</h1>
				</div>
			</div>
		</div>
	</section>
	 <section>
	 	<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
		</div>
	</section>

<?php
get_footer('');