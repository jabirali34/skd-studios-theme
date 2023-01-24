<?php
    $paddingClass = "";
    // Section Padding checkbox
    if (get_sub_field('three_col_add_space') == 'Above'){
    $paddingClass = " pb-0";
    }
    elseif(get_sub_field('three_col_add_space') == 'Below'){
    $paddingClass = " pt-0";
    }
    elseif(get_sub_field('three_col_add_space') == 'Neither'){
        $paddingClass = " py-0";
    }
    $design_services_title = get_sub_field('title');
    $design_services_btn = get_sub_field('button');
    $design_services_logo = get_sub_field('enable_logo_display');
?>

<section id="design-services" class="py-75 <?php echo $paddingClass; ?>" data-aos="fade-up">
    <div class="container">
        <div class="row">
            
                <div class="col-12 text-center">
                    <?php if($design_services_logo == 'Enable'){ ?>
                        <img class="heading-logo" src="/wp-content/themes/skdstudios_custom/img/skd-logo-black.png"
                            alt="SKD Studios Logo">
                    <?php } ?>
                    <h2 class="section-heading mt-0"><?php if($design_services_title){
                        echo $design_services_title;
                    } else{
                        //do nothing
                    }?></h2>
                </div>
            <?php
            // Check value exists.
            if( have_rows('images') ):

                // Loop through rows.
                while ( have_rows('images') ) : the_row();
                $design_services_image = get_sub_field('image');
                $url = $design_services_image['url'];
                $alt = $design_services_image['alt'];

                echo '<div class="col-md-4 service-img-square"><img src="'.$url.'" alt="'.$alt.'" ></div>';
            ?>
        
            <?php
                endwhile;
            endif;

            ?>

            
            <div class="col-12 text-center design-services-btn">
                <a href="<?php echo $design_services_btn['button_link']; ?>" class="btn large"><?php echo $design_services_btn['button_text']; ?></a>
            </div>
        </div>
    </div>
    </div>
</section>
