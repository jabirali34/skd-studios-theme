<?php if( have_rows('pricing') ): 
    $pricingCount = 0;
    $pricingCount2 = 0;
    ?>
<section id="pricing" class="py-75" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-4 price-item-col">
                <h2 class="mt-0">Pricing</h2>
                <?php while( have_rows('pricing') ): the_row(); ?>
                    <p onclick="openPricing(event, '<?php echo $pricingCount; ?>')" class="tablinks pricing-item <?php if (!$pricingCount) {echo 'active';}?>"><?php echo get_sub_field('service_name'); ?></p>
                <?php 
                $pricingCount++;
                endwhile ?>
                <div class="mobile-border"></div>
            </div>

            <div class="col-md-8 price-description-col">
                <?php while( have_rows('pricing') ): the_row(); ?>
                <div id="<?php echo $pricingCount2; ?>" class="price-description tabcontent fade <?php if (!$pricingCount2) {echo 'active';}?>">
                    <?php
                        if(get_sub_field('service_text')){
                            echo get_sub_field('service_text');
                        }
                        if(get_sub_field('asterisk_note')){
                            echo '<p class="asterisk-note">'.get_sub_field('asterisk_note').'</p>';
                        }
                        $pricingCount2++;
                    ?>
                </div>

                <?php 
                
                endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<script>
function openPricing(evt, pricingID) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(pricingID).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>