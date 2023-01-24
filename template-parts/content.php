<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skdstudios_custom
 */

?>
<section class="hero-section black" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<?php if ( is_singular() ) :
			the_title( '<h1 class="entry-title mt-0">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
				<?php
				if ( 'post' === get_post_type() ) :
					?>
				<div class="entry-meta">
					<?php
						skdstudios_custom_posted_on();
						// skdstudios_custom_posted_by();
						?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="blog-post-content-section py-75" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php skdstudios_custom_post_thumbnail(); ?>

					<div class="entry-content">
						<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'skdstudios_custom' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
			</div>
</section>
</div>
</div>