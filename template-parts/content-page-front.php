<section id="home-hero" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="home-hero-text-col col-md-6">
                <img src="/wp-content/themes/skdstudios_custom/img/skd-logo-white.png" alt="SKD Studios Logo"
                    class="home-hero-logo">
                <h1>Kitchens ● Baths ● Interior Design</h1>
                <p>“Since the conception of our Newport Beach Interior Design studio, we have had the good fortune of
                    designing award winning spaces across the country. We founded the studio on 3 basic priciples; a
                    product you will love, on a price-point you can attain, in a time frame you can expect.”
                    <br><br>
                    - Anissa</p>
                <a href="" class="btn large white">View Portfolio</a>
            </div>
            <div class="home-hero-slider-col col-md-5 offset-md-1">
                <div class="img-slide-container">
                    <div class="img-slide"  data-aos="fade-left" data-aos-delay="200">
                        <img src="/wp-content/uploads/home-slide-img-1.jpg">
                    </div>
                    <div class="img-slide" data-aos="fade-left" data-aos-delay="400">
                        <img src="/wp-content/uploads/home-slide-img-2.jpg">
                    </div>
                    <div class="img-slide" data-aos="fade-left" data-aos-delay="600">
                        <img src="/wp-content/uploads/home-slide-img-3.jpg">
                    </div>
                </div>
                <div class="img-slide-arrows">
                <a class="slidePrev" onclick="plusSlides(-1)"><img src="/wp-content/themes/skdstudios_custom/img/arrow-icon-left.svg"></a>
                <a class="slideNext" onclick="plusSlides(1)"><img src="/wp-content/themes/skdstudios_custom/img/arrow-icon-right.svg"></a>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="design-services" class="content-section" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img class="heading-logo" src="/wp-content/themes/skdstudios_custom/img/skd-logo-black.png"
                    alt="SKD Studios Logo">
                <h2 class="section-heading">Design Services</h2>
            </div>
            <div class="col-md-4 service-img-square">
                <img src="/wp-content/uploads/design-service-img-1.jpg">
            </div>
            <div class="col-md-4 service-img-square">
                <img src="https://skd2.local/wp-content/uploads/design-service-img-2.jpg" alt="">
            </div>
            <div class="col-md-4 service-img-square">
                <img src="https://skd2.local/wp-content/uploads/design-service-img-3.jpg" alt="">
            </div>
            <div class="col-12 text-center design-services-btn">
                <a href="/services/#pricing" class="btn large">View Our Pricing</a>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="testimonials" class="text-center" style="background:url('/wp-content/uploads/testimonial-bg-img-scaled.jpg');"  data-aos="fade-up">
    <div class="bg-filter"></div>
    <h2 class="mt-0"><span>What They Say About Us</span>Our Happy Clients</h2>
    <div id="testimonial-container">
        <a class="testPrev" onclick="plusSlides(-1)"><img src="/wp-content/themes/skdstudios_custom/img/arrow-icon-left.svg"></a>
        <div class="testimonial-slide fade">
            <p class="text-white mt-0">“I had this company design and remodel my kitchen and master bathroom. I couldn't have made a better choice. Their ideas were right on and Anissa is the best at selecting wall colors! I am extremely pleased with the results.”</p>
            <p class="client-name text-white mt-0 mb-0">Glenda</p>
        </div>
        <div class="testimonial-slide fade">
            <p class="text-white mt-0">"Hello" had this company design and remodel my kitchen and master bathroom. I couldn't have made a better choice. Their ideas were right on and Anissa is the best at selecting wall colors! I am extremely pleased with the results.”</p>
            <p class="client-name text-white mt-0 mb-0">Glenda</p>
        </div>
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

<?php
get_template_part( 'template-parts/content', 'recent-blog-posts' );
?>