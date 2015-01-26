<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    
	<?php 
		if ($slide == "index") {
        	include_once('index-slider.php'); 
		} elseif ($slide == "business") {
        	include_once('business-slider.php'); 
		} elseif ($slide == "wlabel") {
        	include_once('wlabel-slider.php'); 
		}
        
        $obj = json_decode($slider);
        $number = array("one","two","three","four","five","six");
        for ($i = 0; $i < 6; $i++) {
				
    ?>
        <div class="item <?php if ($i == 0) { echo "active"; } ?>">
            <img src="images/<?php print $obj->{$number[$i]}->{'image'}; ?>" alt="BoonYah" />
            <div class="carousel-caption">
                <h1><?php print $obj->{$number[$i]}->{'title'}; ?></h1>
                <?php if ($slide == "index" ) { ?>
                <a href="<?php print $obj->{$number[$i]}->{'url'}; ?>" class="btn btn-info btn-lg"><i class="fa fa-apple"></i> &nbsp;&nbsp;<?php print $obj->{$number[$i]}->{'button'}; ?></a>
                <a href="<?php print $obj->{$number[$i]}->{'url2'}; ?>" class="btn btn-info btn-lg"><i class="fa fa-android"></i> &nbsp;&nbsp;<?php print $obj->{$number[$i]}->{'button'}; ?></a>
                <?php } else { ?>
                <a href="<?php print $obj->{$number[$i]}->{'url'}; ?>" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> &nbsp;&nbsp;<?php print $obj->{$number[$i]}->{'button'}; ?></a>
                <?php } ?>
            </div>
        </div>

	<?php
        }
    ?>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>