<?php
/**
 * The template for displaying all single portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package skdstudios_custom
 */

get_header();
?>

<main id="single-portfolio" class="site-main">

	<?php
            get_template_part( 'template-parts/content', 'single-gallery' );
		?>
</main><!-- #main -->
<div id="posts-portfolio" >
	<div data-aos="fade-up">
	<img class="heading-logo" src="/wp-content/themes/skdstudios_custom/img/skd-logo-black.png" alt="SKD Studios Logo">
	<h2>Portfolio</h2>
	</div>

	<div class="portfolio-posts-container" data-aos="fade-up">


	<?php
                echo do_shortcode('[ajax_load_more id="portfolio-archive" container_type="div" paging="true" paging_show_at_most="12" paging_scroll="true:100" paging_controls="false" post_type="gallery" posts_per_page="12" order="ASC" orderby="menu_order"]'); 
			?>
	</div>
</div>

<?php

get_footer();