<?php
// Custom Fields
$first_title            = get_post_meta(16, 'first_title', true);
$first_desc             = get_post_meta(16, 'first_desc', true);
$second_title           = get_post_meta(16, 'second_title', true);
$second_desc            = get_post_meta(16, 'second_desc', true);
$website_name           = get_post_meta(16, 'website_name', true);
$company_name           = get_post_meta(16, 'producer_name', true);
$more_first_desc_url    = get_post_meta(16, 'more_first_desc_url', true);
$more_second_desc_url   = get_post_meta(16, 'more_second_desc_url', true);
?>
<section id="main-slider">
    <div class="owl-carousel">
        <div class="item" style="background-image: url(<?php echo bloginfo('stylesheet_directory')?>/assets/images/slider/bg1.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2><span><?php echo $website_name?></span> <?php echo $first_title?> </h2>
                                <p><?php echo $first_desc?></p>
                                <a class="btn btn-primary btn-lg" href="<?php echo $more_first_desc_url?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item" style="background-image: url(<?php echo bloginfo('stylesheet_directory')?>/assets/images/slider/bg2.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2><?php echo $second_title?><span><?php echo $company_name?></span></h2>
                                <p><?php echo $second_desc;?></p>
                                <a class="btn btn-primary btn-lg" href="<?php echo $more_second_desc_url?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
    </div><!--/.owl-carousel-->
</section><!--/#main-slider-->