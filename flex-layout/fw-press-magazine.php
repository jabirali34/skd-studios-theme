

<section class="py-75 pt-0" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-12   d-flex flex-wrap justify-content-center">
                <?php if( have_rows('magazine') ):
                    while( have_rows('magazine') ): the_row(); ?>

                        <a class="magazine-picture" href="">
                            <?php
                            $press_magazine_img = get_sub_field('press_magazine_image');
                            $url = $press_magazine_img['url'];
                            $alt = $press_magazine_img['alt'];
                            

                            echo '<img src="'.$url.'" alt="'.$alt.'" >';
                            ?>
                        </a>
                <?php 
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>