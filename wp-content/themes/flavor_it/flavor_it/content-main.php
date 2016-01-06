<?php
// Custom Fields
$first_title            = get_post_meta(16, 'first_title', true);
$first_desc             = get_post_meta(16, 'first_desc', true);
$second_title           = get_post_meta(16, 'second_title', true);
$second_desc            = get_post_meta(16, 'second_desc', true);
$website_name           = get_post_meta(16, 'website_name', true);
$company_name           = get_post_meta(16, 'company_name', true);
$more_first_desc_url    = get_post_meta(16, 'more_first_desc_url', true);
$more_second_desc_url   = get_post_meta(16, 'more_second_desc_url', true);
$img_url1               = bloginfo('stylesheet_directory')+ "/assets/images/slider/bg1.jpg";
$img_url2               = bloginfo('stylesheet_directory')+ "/assets/images/slider/bg2.jpg";
?>
<section id="main-slider">
    <div class="owl-carousel">
        <div class="item" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/assets/images/slider/bg1.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2><span>It Flavor</span> is the best IT Company </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                <a class="btn btn-primary btn-lg" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item" style="background-image: url(<?php bloginfo('stylesheet_directory')?>/assets/images/slider/bg2.jpg);">
            <div class="slider-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2>Beautifully designed  one page website from <span>Root Cave</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                <a class="btn btn-primary btn-lg" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
    </div><!--/.owl-carousel-->
</section><!--/#main-slider-->