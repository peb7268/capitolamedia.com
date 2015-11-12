<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta name="google-site-verification" content="EPGhctWuIl6echCd6qBJf_KLElb9LZQqgv-KXckCWPc" />

	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

<link rel="author" href="https://plus.google.com/110015692769843488823/posts" title="Capitola Media LLC" />

<link rel="publisher" href="https://plus.google.com/u/0/+ChrisBunney7/about" title="Chris Bunney" />

<script type="text/javascript">
/*
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-lytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

var pageTracker = _gat._getTracker("UA-3526561-1");
pageTracker._initData();
pageTracker._trackPageview();
*/
</script>
	
	<!-- Meta
	================================================== -->
	
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Favicons
	================================================== -->
	
	<link rel="shortcut icon" href="<?php global $data; echo $data['custom_favicon']; ?>">
	<link rel="apple-touch-icon" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon-114x114.png">
	
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<div class="header-background-image" style="background-image: url('<?php echo $image[0]; ?>')" ></div>
<?php endif; ?>

	<header id="header-global" role="banner">
	
		<div class="logo-icons container">
		
			<div class="row">
			
				<div class="header-logo six columns">

					<?php if ($data['text_logo']) { ?>
						<div id="logo-default"><?php bloginfo('name'); ?></div>
					<?php } elseif ($data['custom_logo']) { ?>
						<div id="logo"><img src="<?php echo $data['custom_logo']; ?>" alt="Header Logo" /></div>
					<?php } ?>
				  	
				</div><!-- end .header-logo -->
				
			</div><!-- end .row -->
			
		</div><!-- end .logo-icons container -->
		
		<div id="header-background-nav">
			
			<nav id="header-navigation" class="sixteen columns" role="navigation">
				<ul id="navigation" class="menu">
					<?php get_template_part('includes/menu'); ?>
				</ul>
			</nav><!-- end #header-navigation -->
		
		</div><!-- end #header-background-nav -->
			
		<?php if (is_front_page()) { ?>
		
		<div class="container">
				
			<div class="row">
			
				<?php if ($data['text_introduction']) { ?>
				<h1 id="uber-statement"><?php echo $data['text_introduction']; ?></h1>
				<?php } ?>
				
			</div>
	
		</div><!-- end .container -->
		
		<?php } else { ?>
		<?php } ?>
	
	</header><!-- end #header-global -->
	