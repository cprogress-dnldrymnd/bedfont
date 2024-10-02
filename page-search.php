<?php
/*

Template Name: Search Page

 */

get_header('');
?>

<section id="info_page">
	<div class="container">
		<div class="row m-0">
			<div class="col-12 col-lg-8">
				<h2>Search</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit turpis urna, in viverra mi luctus eget. Integer mauris tellus, scelerisque nec nisl et, bibendum blandit ex.</p>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer('');