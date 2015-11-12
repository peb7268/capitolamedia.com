<?php
/**
 *
 * Template Name: Page (Featured Image)
 * Description: Template for page with Featured Image
 *
 */

get_header('featuredimage'); ?>

	<div id="main">
				
		<section id="content">
		
			<div class="container">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<h1><span><?php the_title(); ?></span></h1>
								
					<?php the_content(); ?>
						
					<?php endwhile; endif; ?>
					
					</div>
			
		
			</div><!-- end .container -->
		
		</section><!-- end #content -->
	
	</div><!-- end #main -->
		
<?php get_footer(); ?>