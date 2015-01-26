<?php /* Primary navigation */
wp_nav_menu( array(
	'menu' => 'sidebar-menu',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'list-custom row',
	//Process nav menu using our custom nav walker
	'walker' => new wp_bootstrap_navwalker())
);
?>