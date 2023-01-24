<?php
/**
 * The template for displaying pages that use flexible layouts
 * Template Name: Flexible Layout Page
 *
 * @package start-theme
 */

 
if(get_field('homepage_hero_enabled') == 'Enable'){
    get_template_part( 'flex-layout/header-home' ); 
} else {
    if(get_field('hero_background_color') == 'White'){
        get_template_part( 'flex-layout/header-white' );

        $hero_title = get_field('hero_section');
        $hero_text = get_field('hero_text');
        $hero_link_text = get_field('hero_button');
        $hero_link = get_field('hero_button_link');
        ?>

        <div class="hero-section <?php if(!$hero_text){echo 'reduce-padding';}?>">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="mt-0 <?php if(!$hero_text){echo 'mb-0';}?>"><?php echo $hero_title; ?></h1>
                        <?php if($hero_text){ echo $hero_text; } ?>
                        <?php if($hero_link){  ?>
                            <a href="<?php echo $hero_link; ?>" class="btn large black"><?php echo $hero_link_text; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
   <?php } else {
        get_template_part( 'flex-layout/header-black' );

        $hero_title = get_field('hero_section');
        $hero_text = get_field('hero_text');
        $hero_link_text = get_field('hero_button');
        $hero_link = get_field('hero_button_link');
        ?>

        <section class="hero-section black <?php if(!$hero_text){echo 'reduce-padding';}?>" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="mt-0 <?php if(!$hero_text){echo 'mb-0';}?>"><?php echo $hero_title; ?></h1>
                        <?php if($hero_text){ echo $hero_text; } ?>
                        <?php if($hero_link){  ?>
                            <a href="<?php echo $hero_link; ?>" class="btn large white"><?php echo $hero_link_text; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

    <?php }
}
?>

<main id="primary" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>

    <?php

        // Check value exists.
        if( have_rows('content_section') ):

            // Loop through rows.
            while ( have_rows('content_section') ) : the_row();

                
                if( get_row_layout() == 'three_column_image_display' ):
                get_template_part( 'flex-layout/three-col-img-display' ); 

                elseif( get_row_layout() == 'testimonials' ):
                get_template_part( 'flex-layout/fw-testimonials' ); 

                elseif( get_row_layout() == 'featured_blog_posts' ):
                get_template_part( 'template-parts/content', 'recent-blog-posts' ); 

                elseif( get_row_layout() == 'spacer' ):
                get_template_part( 'flex-layout/content-5050-text-image' ); 

                
                elseif( get_row_layout() == 'pricing_section' ):
                get_template_part( 'flex-layout/pricing-section' ); 
                
                
                elseif( get_row_layout() == '6030_image_&_text' ):
                get_template_part( 'flex-layout/6030-image-text' ); 

                elseif( get_row_layout() == 'full_width_text_editor' ):
                get_template_part( 'flex-layout/fw-text-editor' ); 

                elseif( get_row_layout() == 'press_magazines' ):
                get_template_part( 'flex-layout/fw-press-magazine' );  
                
                elseif( get_row_layout() == '5050_text_editors' ):
                get_template_part( 'flex-layout/5050-text-editors' );
                
                elseif( get_row_layout() == 'shop_categories' ):
                get_template_part( 'flex-layout/shop-categories' );  

            endif;

        // End loop.
        endwhile;

    // No value.
    else :

    endif;
    ?>


    <?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>