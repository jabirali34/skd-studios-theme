<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skdstudios_custom
 */

get_header('white');

?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<section class="hero-section" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="mt-0 mb-0">SKD Studios Blog</h1>
			</div>
		</div>
	</div>
</section>

<main id="primary" class="site-main">
	<section class="blog-archive" data-aos="fade-up">
		<div class="container">
			<div class="row">
			<div class="col-12">
			<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
 
			<?php
			$args = array(
				'show_option_none' => __( 'CATEGORY', 'textdomain' ),
				'show_count'       => 1,
				'orderby'          => 'name',
				'echo'             => 0,
			);
			?>

			<?php $select  = wp_dropdown_categories( $args ); ?>
			<?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
			<?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>

			<?php echo $select; ?>

			<noscript>
				<input type="submit" value="View" />
			</noscript>

			</form>
			</div>
			</div>
			

			<?php
			echo do_shortcode('[ajax_load_more container_type="div" repeater="template_1" post_type="post" posts_per_page="6" transition_container_classes="row"]');
			 ?>

			<!-- <div class="blog-post-spacer"></div> -->
			
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();