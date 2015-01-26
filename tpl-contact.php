<?php 
/*
	Template Name: Contact
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

    	<h3>Our Office</h3>
        
        <section class="contact-details row">
        
        	<article class="col-sm-7">
        		<p>2703 Market Center Drive<br />
        		Rockwall, TX 75032<br />
        		Email: info@boonyah.org<br />
        		Phone: 877.666.3393<br />
                <div class="social-icons">
                	<a href="https://twitter.com/boonyahapp" target="_blank"><i class="fa fa-twitter"></i></a>
                	<a href="https://www.facebook.com/boonyahapp" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://plus.google.com/u/0/106924430905931654624/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
					<a href="http://boonyah.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
                </div>
                </p>
        		<img src="<?php bloginfo('template_url'); ?>/images/office.jpg" class="img-responsive" alt="" />
        	</article>
            
        	<div class="col-sm-5">
            	<form action="#" class="form">
                	<ul>
                	<li>
                		<label for="Name">Full Name <span>*</span></label>
                		<input type="text" placeholder="Full Name" class="form-control" required />
                	</li>
                	<li>
                		<label for="Business">Business</label>
                		<input type="text" placeholder="Business" class="form-control" />
                	</li>
                	<li>
                		<label for="Email">Email Address <span>*</span></label>
                		<input type="email" placeholder="Email Address" class="form-control" required />
                	</li>
                	<li>
                		<label for="Phone">Phone <span>*</span></label>
                		<input type="tel" placeholder="Phone" class="form-control" required />
                	</li>
                	<li>
                		<label for="Questions">Questions</label>
                		<textarea name="Questions" id="" cols="30" rows="10" class="form-control"></textarea>
                	</li>
                    <li>
                    	<input type="submit" value="Submit" class="btn btn-info btn-lg" />
                    </li>
                    </ul>
                </form>
        	</div>
        	
        </section>        

    <!-- Contents Ends -->
    </section>


<!-- Main Contents Ends -->
</div>
</section>

<?php get_footer('general'); ?>
