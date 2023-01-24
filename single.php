<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package skdstudios_custom
 */

get_header('black');

?>


	<main id="single-blog-post">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		?>
		
		<section class="blog-post-content-section py-75 pt-0" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="mb-0">Want to Read More?</p>
					<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'skdstudios_custom' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'skdstudios_custom' ) . '</span> <span class="nav-title">%title</span>',
				)

			);?></div></div></div>
		</section>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
