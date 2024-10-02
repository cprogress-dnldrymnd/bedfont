<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bedfont_Scientific_Ltd.
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
		
		<section class="pt-0">
			<div class="container">
				<div class="row">
					<div class="col-6 news-previous-col">
						<?php

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle"> <i class="fa fa-arrow-left"></i> ' . esc_html__( 'Previous', 'bedfont' ) . '</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							// if ( comments_open() || get_comments_number() ) :
								// comments_template();
							// endif;

						?>
					</div>
					<div class="col-6 news-next-col">
						<?php

						the_post_navigation(
							array(
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'bedfont' ) . '</span> <i class="fa fa-arrow-right"></i>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
							// comments_template();
						// endif;

						?>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
