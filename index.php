<?php get_header(); ?>

<script type="text/javascript">
	$(document).ready(function(e) {
        $(".main-contents").addClass("homepage");
        $("body").addClass("banner-nav");
        $("body").addClass("home-page");
    });
</script>

    <section class="banner">
    <!-- Banner Starts -->

		<?php
			$slide = "index";
			include_once('khan-slider.php');
		?>

    <!-- Banner Ends -->
    </section>

<!-- Header Ends -->
</header>

<section class="main-contents">
<!-- Main Contents Starts -->

	<section class="each-row">
    <div class="container">
    <!-- First Row Starts -->

    	<h1>Winning Is As Easy <span style="white-space: nowrap;">As 1-2-3</span></h1>

        <article class="step col-sm-4">
        <!-- Each Step Starts -->
        	<img src="<?php bloginfo('template_url'); ?>/images/visit-new.png" class="custom-border" alt="Visit" />
            <h2 class="blue"><strong>Visit</strong></h2>
            <p>Visit any of our Boonyah locations to play.</p>
        <!-- Each Step Ends -->
        </article>

        <article class="step col-sm-4">
        <!-- Each Step Starts -->
        	<img src="<?php bloginfo('template_url'); ?>/images/play-new.png" class="custom-border" alt="Play" />
            <h2 class="blue"><strong>Play</strong></h2>
            <p>Play loyalty games each time you come in.</p>
        <!-- Each Step Ends -->
        </article>

        <article class="step col-sm-4">
        <!-- Each Step Starts -->
        	<img src="<?php bloginfo('template_url'); ?>/images/win-new.png" class="custom-border" alt="Win" />
            <h2 class="blue"><strong>Win</strong></h2>
            <p>Win loyalty rewards and get the gifts you want.</p>
        <!-- Each Step Ends -->
        </article>

        <div class="clearfix"></div>

    <!-- First Row Ends -->
    </div>
    </section>

    <section class="each-row stripe">
    <div class="container row-2">
    <!-- Row Two Starts -->

        <h1>Sign Up Once And Get Loyalty Gifts And Rewards At All Of Our BoonYah Locations!</h1>

        <article class="col-sm-3 text-form text-center">
        <!-- Mobile Form Starts -->
        	<form action="http://boonyah.info/wifi/trumpia-api/boonyah.net.php" class="form-inline">
            	<input type="text" placeholder="Mobile Number" name="mobile" class="form-control" required />
                <input type="button" value="Text Me" class="btn btn-info btn-lg" />
                <div class="clearfix"></div>
            </form>
        <!-- Mobile Form Ends -->
        </article>

        <article class="col-sm-6">
        <!-- Mobile Starts -->
        	<img src="<?php bloginfo('template_url'); ?>/images/5-phone-combo.png" alt="Combo" class="img-responsive" />
        <!-- Mobile Ends -->
        </article>

        <article class="col-sm-3 btn-c">
        <!-- Get App Button Starts -->
        	<a href="https://itunes.apple.com/us/app/boonyah/id841216262?mt=8" target="_blank" class="btn btn-info btn-lg"><i class="fa fa-apple"></i> <span class="hide-media">&nbsp;&nbsp;</span>Get The App</a>
        	<a href="coming-soon.php" class="btn btn-info btn-lg"><i class="fa fa-android"></i> <span class="hide-media">&nbsp;&nbsp;</span>Get The App</a>
        <!-- Get App Button Ends -->
        </article>

        <div class="clearfix"></div>

    <!-- Row Two Ends -->
    </div>
    </section>

    <section class="each-row">
    <div class="container">
    <!-- Third Row Starts -->

    	<h1>Only BoonYah Allows You To…</h1>

        <article class="col-md-7 features">
        	<div class="row">

            	<article class="col-sm-4">
                	<img src="<?php bloginfo('template_url'); ?>/images/gifts-icons.png" class="img-responsive" alt="Gift" />
                    <h2 class="blue"><strong>Earn</strong><br />Loyalty Gifts</h2>
                    <p>Earn loyalty gifts from your favorite BoonYah merchants</p>
                </article>

            	<article class="col-sm-4">
                	<img src="<?php bloginfo('template_url'); ?>/images/offers-icons.png" class="img-responsive" alt="Gift" />
                    <h2 class="blue"><strong>Get</strong><br />Free Offers</h2>
                    <p>Check out the latest offers from BoonYah businesses</p>
                </article>

            	<article class="col-sm-4">
                	<img src="<?php bloginfo('template_url'); ?>/images/deals-icons.png" class="img-responsive" alt="Gift" />
                    <h2 class="blue"><strong>Find</strong><br />Great Deals</h2>
                    <p>Discover deals just by passing by a BoonYah member’s store</p>
                </article>

            </div>
        </article>
        <article class="col-sm-5 by-girl">
        	<img src="<?php bloginfo('template_url'); ?>/images/boonyah-mobile-girl.png" alt="Boonyah Mobile Girl" class="img-responsive" width="100%" />
        </article>

    <!-- Third Row Ends -->
    </div>
    </section>

    <section class="each-row stripe">
    <div class="container">
    <!-- Fourth Row Starts -->

    	<h1>Get Loyalty And Extra Perks When You Download The App!</h1>

    	<article class="col-sm-6 text-form2">
        	<form action="#" class="form-inline">
            	<input type="text" placeholder="Mobile Number" class="form-control">
                <input type="button" value="Text Me" class="btn btn-info btn-lg"	 />
            </form>
        </article>

        <article class="col-sm-6 btn-c2">
        	<a href="https://itunes.apple.com/us/app/boonyah/id841216262?mt=8" target="_blank" class="btn btn-info btn-lg pull-left"><i class="fa fa-apple"></i> <span class="hide-media">&nbsp;&nbsp;</span>Get The App</a>
        	<a href="coming-soon.php" class="btn btn-info btn-lg pull-right"><i class="fa fa-android"></i> <span class="hide-media">&nbsp;&nbsp;</span>Get The App</a>
        </article>

    <!-- Fourth Row Ends -->
    </div>
    </section>

<!-- Main Contents Ends -->
</section>

<?php get_footer(); ?>
