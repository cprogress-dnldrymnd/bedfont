<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bedfont_Scientific_Ltd.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="p-0 position-relative">
		<div class="container-fluid news-overlay-holder">
			<div class="news-overlay">
				<div class="col-12">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif; 

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							bedfont_posted_on();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="30px" viewBox="0 0 1280 140" preserveAspectRatio="none" style="position: absolute;bottom: 0;"><g fill="#fff"><path d="M1280 86c-19.9-17.21-40.08-39.69-79.89-39.69-57.49 0-56.93 46.59-115 46.59-53.61 0-59.76-39.62-115.6-39.62C923.7 53.27 924.26 87 853.89 87c-89.35 0-78.74-87-188.2-87C554 0 543.95 121.8 423.32 121.8c-100.52 0-117.84-54.88-191.56-54.88-77.06 0-100 48.57-151.75 48.57-40 0-60-12.21-80-29.51v54H1280z"></path></g></svg>
	</section>
	<section >
		<div class="container">
			<div class="entry-content">
			<?php bedfont_post_thumbnail(); ?>
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bedfont' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bedfont' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
