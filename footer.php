	<footer id="footer-global" role="contentinfo" class="clearfix">
		
		<section id="contact">
		
			<div class="container">
			
				<div class="row">
		
					<div class="sixteen columns">
<div class="social-media-icons">
<a href="https://plus.google.com/u/0/110015692769843488823/posts" target="_blank" >
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1411115303_square-google-plus.svg" width="32" height="32">
</a>
<a href="https://www.youtube.com/user/CapitolaMedia" target="_blank" >
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube-icon.svg" width="32" height="32">
</a>
<a href="https://twitter.com/CapitolaMedia" target="_blank" >
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1411115334_square-twitter.svg" width="32" height="32">
</a>
<a href="https://www.facebook.com/CapitolaMediaLLC?ref=hl" target="_blank" >
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1411115321_square-facebook.svg" width="32" height="32">
</a>
</div>

<p id="copyright-details">&copy; <?php echo date('Y') ?> <?php echo bloginfo('name'); ?> LLC. <?php global $data; echo $data['textarea_footer_text']; ?></p>
</div>
		
			  	</div><!-- end .row -->	  
		  	
			</div><!-- end .container -->
		
		</section><!-- end #contact -->
		
	</footer><!-- end #footer-global -->
		
<script type="text/javascript">
function scrollTo(target) {
    var myArray = target.split('#');
    var targetPosition = jQuery('#' + myArray[1]).offset().top;
    jQuery('html,body').animate({
        scrollTop: targetPosition
    }, 'slow');
}

jQuery(document).ready(function () {
	    jQuery('nav ul').mobileMenu({
	        defaultText: '<?php _e("Navigation", "nash");?>',
	        className: 'mobile-menu',
	        subMenuDash: '&ndash;'
	    });
});
</script>



	
<?php echo $data['google_analytics']; ?>
	
<?php wp_footer(); ?>
		
</body>
	
</html>