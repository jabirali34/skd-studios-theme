<section id="" class="py-75" data-aos="fade-up">
    <div class="container">
        <div class="row">
			<div class="col-12 text-center">
				<h2 class="section-heading mt-0">SKD Studios Blog</h2>
			</div>

			<?php
			// The Query
			$args = array(
				'post_type' => 'post',
				'orderby' => 'date',
				'order'   => 'DESC',
				'posts_per_page' => 3
			);
			$the_query = new WP_Query( $args );
			// The Loop
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<div class="col-md-4">
				<a class="recent-blog-post" href="<?php echo the_permalink(); ?>">
					<div class="recent-blog-post-image" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size:cover; background-position: center;">
						<div class="recent-blog-post-hover-text">
							View Post
						</div>
					</div>
					<h3 class="recent-blog-post-text mb-0"><?php echo get_the_title(); ?></h3>
				</a>
			</div>
			<?php
					
				endwhile;
			} else {
					// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>

			<div class="col-12 text-center">
				<a href="/blog" class="btn large">View More Posts</a>
			</div>


        </div>
    </div>
    
</section>