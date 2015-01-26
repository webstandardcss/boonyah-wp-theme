<footer class="each-row"> 
<!-- Footer Starts -->
    
    <section class="footer-contents">
    <!-- Footer Contents Starts -->
    
    	<article class="">
        <!-- Address Starts -->
        	<p>
        		<strong>Address</strong>
        	</p>
            <img src="<?php bloginfo('template_url'); ?>/images/logo-footer.png" alt="Boonyah" class="img-responsive" /><br />
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-one') ) : ?>
        	<?php endif; ?>
        <!-- Address Ends -->
        </article>
        
    	<article class="">
        <!-- Blog Starts -->
        	<p>
        		<strong>Blog</strong>
        	</p>
            <?php query_posts('cat=4&posts_per_page=4'); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <p>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?><br />
                    <?php the_date('m-d-y', '', ''); ?>
                    </a>
                </p>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        <!-- Blog Ends -->           
        </article>
        
    	<article class="">
        <!-- Links Starts -->
        	
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-two') ) : ?>
        	<?php endif; ?>
        <!-- Links Ends -->
        </article>
        
    	<article class="">
        <!-- Support Starts -->
        	<p>
        		<strong>Support</strong>
        	</p>
            <form action="#">
            	<ul>
            		<li>
                    	<label for="Name">Full Name</label>
                    	<input type="text" class="form-control" required />
                    </li>
            		<li>
                    	<label for="Business">Business</label>
                    	<input type="text" class="form-control" required />
                    </li>
            		<li>
                    	<label for="Email">Email Address</label>
                    	<input type="email" class="form-control" required />
                    </li>
            		<li>
                    	<label for="Phone">Phone</label>
                    	<input type="tel" class="form-control" required />
                    </li>
            		<li>
                    	<label for="Name">Questions</label>
                    	<textarea rows="6" type="text" class="form-control" ></textarea>
                    </li>
                    <li>
                    	<input type="submit" value="Submit" class="btn btn-info btn-lg" /></input> 
                    </li>
            	</ul>
            </form>
        <!-- Support Ends -->
        </article>
        
        <div class="clearfix"></div>
    
    <!-- Footer Contents Ends -->
    </section>

<!-- Footer Ends -->
</footer>

<a href="#" class="top-arrow">
	<span class="glyphicon glyphicon-upload" aria-hidden="true"></span>
</a>

<?php wp_footer(); ?>
</body>
</html>
