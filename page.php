<?php get_header(); ?>

<!-- Header Ends -->
</header>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/general.css" />

<section class="main-contents container">
<div class="row">
<!-- Main Contents Starts -->

	<aside class="col-sm-3">
    <!-- Sidebar Starts -->
    	<?php include_once('sidebar.php'); ?>
    <!-- Sidebar Ends -->
    </aside>

	<section class="contents col-sm-9 pull-right">
    <!-- Contents Starts -->
        
        <?php while ( have_posts() ) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        <?php endwhile; ?>  
                
    <!-- Contents Ends -->
    </section>
	
    <div class="clearfix"></div>

<!-- Main Contents Ends -->
</div>
</section>

<?php get_footer('general'); ?>
