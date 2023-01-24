<section id="testimonials" class="text-center py-75" style="background:url('/wp-content/uploads/testimonial-bg-img-scaled.jpg');"  data-aos="fade-up">
    <div class="bg-filter"></div>
    <h2 class="mt-0"><span><?php  if(get_sub_field('sub-title')){echo the_sub_field('sub-title');} ?></span><?php if(get_sub_field('title')){ echo the_sub_field('title');} ?></h2>
    <div id="testimonial-container">
        <a class="testPrev" onclick="plusSlides(-1)"><img src="/wp-content/themes/skdstudios_custom/img/arrow-icon-left.svg"></a>
        <?php
        //Repeater
        if( have_rows('testimonial_slides') ):
            while( have_rows('testimonial_slides') ): the_row();
        ?>
            <div class="testimonial-slide fade">
                <p class="text-white mt-0">"<?php echo get_sub_field('testimonial_text'); ?>"</p>
                <p class="client-name text-white mt-0 mb-0"><?php echo get_sub_field('testimonial_name'); ?></p>
            </div>
        <?php endwhile;
        endif; ?>

        <a class="testNext" onclick="plusSlides(1)"><img src="/wp-content/themes/skdstudios_custom/img/arrow-icon-right.svg"></a>
    </div>
</section>

<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("testimonial-slide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>