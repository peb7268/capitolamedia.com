
<li itemscope itemtype="http://schema.org/Organization">
	<a href="//capitolamedia.com" itemprop="url">
		<span itemprop="name">
			Capitola Media
		</span>
	</a>
</li>

<?php 
$menu_location 		= (is_front_page()) ? 'Front' : 'Inner';
$header_menu_args 	= array(
    'menu' => 'Header',
    'theme_location' => $menu_location,
    'container' => false,
    'menu_id' => 'navigation'
);

wp_nav_menu($header_menu_args);
?>