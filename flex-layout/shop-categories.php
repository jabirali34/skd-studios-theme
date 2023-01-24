<?php
$paddingClass = "";
// Section Padding checkbox
if (get_sub_field('shop_categories_add_space') == 'Above'){
  $paddingClass = " pb-0";
}
elseif(get_sub_field('shop_categories_add_space') == 'Below'){
  $paddingClass = " pt-0";
}
elseif(get_sub_field('shop_categories_add_space') == 'Neither'){
  $paddingClass = " py-0";
}
$design_services_btn = get_sub_field('button');

?>

<section class="py-75 <?php echo $paddingClass; ?>" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <?php
      // Check value exists.
      if( have_rows('categories') ):

        // Loop through rows.
        while ( have_rows('categories') ) : the_row();
        $design_services_image = get_sub_field('image');
        $url = $design_services_image['url'];
        $alt = $design_services_image['alt'];
        $category_name =  get_sub_field('category_name');
        $category_link =  get_sub_field('category_url');
        ?>
          <div class="col-lg-4 col-md-6 shop-cat">
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" >
            <a href="<?php echo $category_link?>" class="cat-btn"><?php echo $category_name ?></a>
          </div>
    <?php
        endwhile;
    endif;
    ?>

      <div class="col-12 text-center design-shop-btn">
          <a href="<?php echo $design_services_btn['button_link']; ?>" class="btn large"><?php echo $design_services_btn['button_text']; ?></a>
      </div>

    </div>
  </div>
</section>