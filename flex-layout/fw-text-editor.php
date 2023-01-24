<?php
$paddingClass = "";
// Section Padding checkbox
if (get_sub_field('fw_text_editor_add_space') == 'Above'){
  $paddingClass = " pb-0";
}
elseif(get_sub_field('fw_text_editor_add_space') == 'Below'){
  $paddingClass = " pt-0";
}
elseif(get_sub_field('fw_text_editor_add_space') == 'Neither'){
    $paddingClass = " py-0";
  }

?>

<section class="py-75 <?php echo $paddingClass; ?>" data-aos="fade-up">
<div class="container">
<div class="row">
            <div class="col-12">
                <?php echo get_sub_field('text');?>
</div>
</div>
</div>
</section>