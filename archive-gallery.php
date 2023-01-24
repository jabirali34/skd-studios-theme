<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skdstudios_custom
 */

get_header('white');
?>

	<div class="hero-section">
        <div id="posts-portfolio" class="pt-0 pb-0">
            <h1 class="mt-0 portfolio-archive-heading">Portfolio</h1>
            <div class="portfolio-posts-container">

            <?php
                echo do_shortcode('[ajax_load_more id="portfolio-archive" container_type="div" post_type="gallery" posts_per_page="12" order="ASC" orderby="menu_order"]'); 
            ?>
            </div>
        </div>
    </div>


<?php
get_footer();
