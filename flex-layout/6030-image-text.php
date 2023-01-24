<?php
$paddingClass = "";
$section6030Title = get_sub_field('6030_section_title');
$section6030Logo =  get_sub_field('add_logo');
// Section Padding checkbox
if (get_sub_field('add_space') == 'Above'){
  $paddingClass = " pb-0";
}
elseif(get_sub_field('add_space') == 'Below'){
  $paddingClass = " pt-0";
}
elseif(get_sub_field('add_space') == 'Neither'){
    $paddingClass = " py-0";
  }
$reverse = "";
if(get_sub_field('reverse_layout') == 'No'){
  $reverse = "No";
}
// vertical align checkbox
$vertical_align_class = "";
if(get_sub_field('6030_text_image_vertical_align') == 'Yes'){
  $vertical_align_class = "d-flex align-items-center";
}

?>

<section class="py-75 <?php echo $paddingClass; ?>" data-aos="fade-up">
    <div class="container alternating-page-layout">

      <?php if($section6030Title){?>
      <div class="row heading-row pb-0">
        <div class="col-12 text-center">
          <?php
          if($section6030Logo == 'Yes'){
            echo '<img class="heading-logo" src="/wp-content/themes/skdstudios_custom/img/skd-logo-black.png"
            alt="SKD Studios Logo">';
          }
          echo '<h2 class="my-0">'.$section6030Title.'</h2>';
          ?>
        </div>
      </div>
      <?php } ?>


    
        <?php
    //Repeater
    if( have_rows('text_and_image_row') ):
      while( have_rows('text_and_image_row') ): the_row();

      if($reverse == "No"){
        if( get_row_index() % 2 == 0 ){
          // this is an even row
    ?>
        <div class="row <?php echo $vertical_align_class; ?>">
            <div class="col-md-4  img-col text-center text-md-left">
                <div class="img-frame-container">
                    <div class="img-frame left">
                        <?php
                            $image_text_image_element = get_sub_field('image');
                            $url = $image_text_image_element['url'];
                            $alt = $image_text_image_element['alt'];
                            

                            echo '<img src="'.$url.'" alt="'.$alt.'" >';
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7 offset-md-1">
                <?php echo the_sub_field('text'); ?>
            </div>
        </div>
        <?php    
          } else{
          // this is an odd row
        ?>
        <div class="row <?php echo $vertical_align_class; ?>">
            <div class="col-md-7 order-2 order-md-1">
                <?php echo the_sub_field('text'); ?>
            </div>
            <div class="col-md-4 offset-md-1 img-col text-center text-md-right order-1 order-md-2">
                <div class="img-frame-container">
                    <div class="img-frame right">
                        <?php
                    $image_text_image_element = get_sub_field('image');
                    $url = $image_text_image_element['url'];
                    $alt = $image_text_image_element['alt'];
                    

                    echo '<img src="'.$url.'" alt="'.$alt.'" >';
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } //end IF ELSE STATEMENT FOR ALTERNATING ROWS
      }// end if of reverse layout
      else {
        if( get_row_index() % 2 == 0 ){
          // this is an even row
    ?>
        <div class="row <?php echo $vertical_align_class; ?>">
            <div class="col-md-7 order-2 order-md-1">
                <?php echo the_sub_field('text'); ?>
            </div>
            <div class="col-md-4 offset-md-1 img-col text-center text-md-right order-1 order-md-2">
                <div class="img-frame-container">
                    <div class="img-frame right">
                        <?php
                $image_text_image_element = get_sub_field('image');
                $url = $image_text_image_element['url'];
                $alt = $image_text_image_element['alt'];
                

                echo '<img src="'.$url.'" alt="'.$alt.'" >';
              ?>
                    </div>
                </div>
            </div>
        </div>
        <?php    
          } else{
          // this is an odd row
        ?>
        <div class="row <?php echo $vertical_align_class; ?>">
            <div class="col-md-4 img-col text-center text-md-left">
                <div class="img-frame-container">
                    <div class="img-frame left">
                        <?php
                $image_text_image_element = get_sub_field('image');
                $url = $image_text_image_element['url'];
                $alt = $image_text_image_element['alt'];
                

                echo '<img src="'.$url.'" alt="'.$alt.'" >';
              ?>
                    </div>
                </div>
            </div>
            <div class="col-md-7 offset-md-1">
                <?php echo the_sub_field('text'); ?>
            </div>
        </div>
        <?php
      }}
       
      endwhile;
    endif;
    ?>
    </div>
</section>