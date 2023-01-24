<script type="text/javascript">
 jQuery(document).ready(function ($) {
   var count = 2;
   var total = <?php echo $wp_query->max_num_pages; ?>;
   $(window).scroll(function () {
     if ($(window).scrollTop() == $(document).height() - $(window).height()) {
       if (count > total) {
         return false;
       } else {
         loadArticle(count);
       }
       count++;
     }
   });

   function loadArticle(pageNumber) {
     $('a#inifiniteLoader').show('fast');
     $.ajax({
       url: "<?php echo admin_url(); ?>admin-ajax.php",
       type: 'POST',
       data: "action=infinite_scroll&page_no=" + pageNumber + '&loop_file=loop&what=category_name&value=<?php echo $yourcat->slug; ?>',
       success: function (html) {
         $('li#inifiniteLoader').hide('1000');
         $("ul.timeline").append(html);
       }
     });
     return false;
   }
 });
</script>