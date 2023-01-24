<?php echo $loopFile; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<a class="portfolio-post-link" href="<?php echo the_permalink(); ?>"
                style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size:cover; background-position: center;">
                <div class="portfolio-post-text"><?php echo get_the_title(); ?><span>VIEW</span></div>
            </a>
<?php endwhile; ?>
<?php endif; ?>

