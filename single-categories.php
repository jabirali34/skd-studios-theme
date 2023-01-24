<?php
/**
 * The template for displaying all single categories posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skdstudios_custom
 */

get_header('white');
?>

	<div class="hero-section">
        <div id="posts-categories" class="pt-0 pb-0">
			<div class="container">
				<h1 class="mt-0 category-post-heading"><?php the_title() ?></h1>
				<div class="sub-categories">
					<div class="categories-tabs">
						<ul>
								
							<?php
							//Repeater
								if( have_rows('categories_list') ):
									while( have_rows('categories_list') ): the_row();

									$name = explode('/', get_sub_field('name')); 
									if(count($name)>1){
										$new_name = $name[1];
									}else{
										$new_name = $name[0];
									}
									?>

									<li><a href="#<?php echo str_replace(' ', '', $new_name);?>" class="btn"><?php echo $new_name ?></a></li>
																			
								<?php
									endwhile;
								endif;
							?>
					
						</ul>	
					</div>
					<?php
					//Repeater
						if( have_rows('categories_list') ):
							while( have_rows('categories_list') ): the_row();
							
							$name = explode('/', get_sub_field('name')); 
							if(count($name)>1){
								$new_name = $name[1];
							}else{
								$new_name = $name[0];
							} 
							?>
							<div id="<?php echo str_replace(' ', '', $new_name);?>" class="sub-category-wrapper">
								<h2 class="category-post-sub-heading text-center"> <?php the_sub_field('name') ?></h2>
								<?php the_sub_field('iframe_link') ?>
							</div>
								
						<?php
							endwhile;
						endif;
					?>
				</div>
			</div>           
        </div>
    </div>


<?php
get_footer();
