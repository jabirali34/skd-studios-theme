<?php
/**
 * The template for displaying the service page
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skdstudios_custom
 */

get_header('white');
?>

    <div class="hero-section">
        <div id="posts-portfolio" class="pt-0 pb-0">
            <h1 class="my-0">Contact</h1>
        </div>
    </div>

    <section id="contact-form" class="py-75 pt-0">
        
        <div class="container">
        <div class="row pt-0 py-75" style="">
            <div class="col-12">
                <?php echo get_field('google_map'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 order-2 order-md-1">
            <h4 class="mt-0 mb-0">Newport Beach</h4>
            <p class="mt-0"><i>Conveniently located and servicing All of Orange County</i></p>
            
            <?php
                // Phone Numbere
                if(get_field('phone_number','option')){echo '<h4 class="mb-0">Phone:</h4><p class="mt-0">'.get_field('phone_number','option').'</p>';}

                // Fax Number
                if(get_field('fax_number','option')){echo '<h4 class="mb-0">Fax:</h4><p class="mt-0">'.get_field('fax_number','option').'</p>';}

                // Address
                if(get_field('address','option')){echo '<h4 class="mb-0">Address:</h4><p class="mt-0">'.get_field('address','option').'<br>(Convenient parking behind the building)</p>';}
            ?>
            </div>
            <div class="col-12 col-md-8 order-1 order-md-2 py-75 pt-0 pb-md-0" id="wpc7-contact-page">
                <?php echo do_shortcode('[contact-form-7 id="91" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
    </section>
   <?php get_footer(); ?>