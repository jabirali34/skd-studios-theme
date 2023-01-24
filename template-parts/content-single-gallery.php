<?php
/**
 * Template part for displaying single portfolio page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skdstudios_custom
 */

?>


<?php if( have_rows('portfolio_slider') ): ?>
    <div class="slideshow-arrow-container">
        <div class="slideshow-container">
            <div style="display:inline-block;">
            <h1 id="portfolio-title"><?php echo get_the_title(); ?></h1>
            <?php while( have_rows('portfolio_slider') ): the_row(); 
                $image = get_sub_field('portfolio_image');
                $video = get_sub_field('portfolio_video');
                ?>
                <div class="mySlides fade">
                    <?php
                    if(!$video){
                    ?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" >
                    <?php
                    } else {
                    echo '<div class="video-responsive">'.$video.'</div>';
                    }
                    ?>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)"><img src="/wp-content/themes/skdstudios_custom/img/arrow-icon-left.svg"></a>
        <a class="next" onclick="plusSlides(1)"><img src="/wp-content/themes/skdstudios_custom/img/arrow-icon-right.svg"></a>
    </div>
<?php endif; ?>

    <div class="single-portfolio-buttons">
        <a class="btn large white" href="<?php echo get_field('collection_link');?>">View Collection</a>
        <a class="btn large white" href="/contact/">Contact Us</a>
    </div>

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
  var slides = document.getElementsByClassName("mySlides");
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



