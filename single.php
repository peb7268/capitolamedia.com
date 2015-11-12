<?php
/**
 *
 * Description: Standard Blog (Single Article) template.
 *
 */


get_header( 'menuonly' ); ?>

	<div id="main">
			
		<section id="content" class="menu-only">
		
			<div class="container">
			
				<div class="twelve columns centered">
					
					<section id="post-content" class="twelve columns centered">
										
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<article <?php post_class("single-article"); ?>>
											
							<h1 class="post-title"><?php the_title(); ?></h1>

							<?php the_post_thumbnail('single-post'); ?>
							
							<?php the_content(); ?>
							
							<span class="tags"><i class="icon-tags"></i> <?php the_tags(' ',' '); ?></span>
												
						</article><!-- end #single-article -->
						
					<?php endwhile; endif; ?>
					
					<?php comments_template(); ?>
					
					<?php gt_content_nav('nav-below');?>
						
					</section><!-- end #post-content -->
			
				</div><!-- end .sixteen columns -->
		
			</div><!-- end .container -->
		
		</section><!-- end #content -->
	
	</div><!-- end #main -->
		
<?php get_footer(); ?>
