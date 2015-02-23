<?php 
/*
	Template Name: Full Width
*/
get_header();
?>

<!-- Header Ends -->
</header>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/general.css" />

<section class="main-contents container">
<div class="row">
<!-- Main Contents Starts -->

	<section class="contents col-sm-12">
    <!-- Contents Starts -->

    	<h3><?php the_title(); ?></h3>
        
        <section class="contact-details">
        <?php while ( have_posts() ) : the_post(); ?>
        	<?php the_content(); ?>
        <?php endwhile; ?> 	
        </section>        

    <!-- Contents Ends -->
    </section>


<!-- Main Contents Ends -->
</div>
</section>

<?php get_footer('general'); ?>
