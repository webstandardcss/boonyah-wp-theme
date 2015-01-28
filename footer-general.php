<footer class="each-row footer-general">
<!-- Footer Starts -->

	<?php /* Primary navigation */
	wp_nav_menu( array(
		'menu' => 'footer-menu',
		'depth' => 2,
		'container' => false,
		'menu_class' => 'footer-links')
	);
	?>
    
    <p>© Copyright 2014 BoonYah</p>

<!-- Footer Ends -->
</footer>

<a href="#" class="top-arrow">
	<span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
</a>

<?php wp_footer(); ?>
</body>
</html>
