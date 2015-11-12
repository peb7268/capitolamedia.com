<?php
/**
 *
 * Description: Category
 *
 */

get_header( 'menuonly' ); ?>

	<div id="main">
	
		<section id="content" class="menu-only">
	
			<div class="container">
					
				<div class="twelve columns centered">
				
					<section id="post-content" class="twelve columns centered">
					
					<?php if (is_category()) { ?>
						<h1 class="archive-title"><?php single_cat_title(); ?></h1>
								
					<?php } ?>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article <?php post_class("post-excerpt"); ?>>
											
							<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							
							<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('archive-post'); ?>
							</a>
							
							<?php the_content(); ?>
											
						</article><!-- end .post-excerpt -->
						
					<?php endwhile; endif; ?>
						
				    <?php if(function_exists('wp_pagenavi')) { ?>
				    <?php wp_pagenavi(); ?>   
				    <?php } else { ?>      
				      <div class="post-navigation"><p><?php posts_nav_link('&#8734;','&laquo;&laquo; Previous Posts','Older Posts &raquo;&raquo;'); ?></p></div>
				    <?php } ?>
						
					</section><!-- end #post-content -->
	
					<?php get_sidebar(); ?>
				
				</div><!-- end .sixteen columns -->
				
			</div><!-- end .container -->
		
		</section><!-- end #content -->
			
	</div><!-- end #main -->

<?php get_footer(); ?>