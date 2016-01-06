<?php
/*
  Template Name: Home Page
*/
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

// Advanced Custom Fields
// about section
$about_title            = get_field('section_title1');
$about_desc             = get_field('section_desc1');
$mission_title          = get_field('section_title2');
$mission_desc           = get_field('section_desc2');
$mission_feature1       = get_field('tab_1_feature_1');
$mission_feature2       = get_field('tab_1_feature_2');
$mission_feature3       = get_field('tab_1_feature_3');
$mission_feature4       = get_field('tab_1_feature_4');
$vission_title          = get_field('section_title3');
$vission_desc           = get_field('section_desc3');
$vission_feature1       = get_field('tab_2_feature_1');
$vission_feature2       = get_field('tab_2_feature_2');
$vission_feature3       = get_field('tab_2_feature_3');
$vission_feature4       = get_field('tab_2_feature_4');
$mission_url            = get_field('tab1_url');
$vission_url            = get_field('tab2_url');
//meet team section
$meet_team_title        = get_field('meet_team_field');
$meet_team_desc         = get_field('meet_team_desc');
//clients section
$client_title           = get_field('client_title');
$client_desc            = get_field('client_desc');
//services section
$service_title          = get_field('service_title');
$service_desc           = get_field('service_desc');
//solutions section
$solution_title         = get_field('solution_title');
$solution_desc          = get_field('solution_desc');
//partners section
$partner_title          = get_field('partner_title');
$partner_desc           = get_field('partner_desc');
//Announcements
$announcements_title    = get_field(16,'announcements_title', true);
// history
$history_title    = get_field(16,'history_title', true);
//fun facts
$fact_title             = get_field('fact_title');
$fact_desc              = get_field('fact_desc');
//get in touch section
$in_touch_title         = get_field('in_touch_title');
$in_touch_desc          = get_field('in_touch_desc');
get_header();?>



    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(<?php echo $img_url1?>);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span><?php echo $website_name;?></span><?php echo $first_title; ?></h2>
                                    <p><?php echo $first_desc;?></p>
                                    <a class="btn btn-primary btn-lg" href="<?php echo $more_first_desc_url?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo $img_url1?>);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><?php echo $second_title; ?><span><?php echo $producer_name; ?></span></h2>
                                    <p><?php echo $second_desc; ?></p>
                                    <a class="btn btn-primary btn-lg" href="<?php echo $more_second_desc_url; ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $fact_title; ?></h2>
                <?php if(!empty($fact_desc))?><p class="text-center wow fadeInDown"><?php echo $fact_desc; ?></p>
            </div>
            <div class="row text-center">
            <?php $loop = new WP_Query(array("post_type" => "fun_fact", "orderby" => "post_id", "order" => "ASC"));
            while ($loop->have_posts()) : $loop->the_post();?>

                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="<?php the_title(); ?>" data-duration="1000"></div>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section><!--/#animated-number-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $about_title;?></h2>
                <p class="text-center wow fadeInDown"><?php echo $about_desc; ?></p>
            </div>

            <div class="row">


                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title"><?php echo $mission_title; ?></h3>
                    <?php echo $mission_desc; ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <?php if(!empty($mission_feature1))?><li><i class="fa fa-check-square"></i> <?php echo $mission_feature1; ?></li>
                                <?php if(!empty($mission_feature2))?><li><i class="fa fa-check-square"></i><?php echo $mission_feature2; ?></li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <?php if(!empty($mission_feature3))?><li><i class="fa fa-check-square"></i><?php echo $mission_feature3; ?></li>
                                <?php if(!empty($mission_feature4))?><li><i class="fa fa-check-square"></i><?php echo $mission_feature4; ?></li>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="<?php echo $vission_url;?>">Learn More</a>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title"><?php echo $vission_title; ?></h3>
                    <?php echo $vission_desc; ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <?php if(!empty($vission_feature1))?><li><i class="fa fa-check-square"></i><?php echo $vission_feature1; ?></li>
                                <?php if(!empty($vission_feature2))?><li><i class="fa fa-check-square"></i><?php if(!empty($vission_feature2)) echo $vission_feature2; ?></li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <?php if(!empty($vission_feature3))?><li><i class="fa fa-check-square"></i><?php if(!empty($vission_feature3)) echo $vission_feature3; ?></li>
                                <?php if(!empty($vission_feature4))?><li><i class="fa fa-check-square"></i><?php if(!empty($vission_feature4)) echo $vission_feature4; ?></li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="<?php echo $vission_url;?>">Learn More</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <?php $loop = new WP_Query(array("post_type" => "member", "orderby" => "post_id", "order" => "ASC"));
                while ($loop->have_posts()) : $loop->the_post();?>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }?>
                        </div>
                        <div class="team-info">
                            <?php the_content();?>
                        </div>
                        <?php the_excerpt();?>
                        <ul class="social-icons">
                            <li><a href="<?php the_field('facebook_url'); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php the_field('twitter_url'); ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php the_field('google_url'); ?>"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="<?php the_field('linkedin_url'); ?>"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

            <div class="divider"></div>

            <div class="row">


                <div class="col-sm-6">
                    <h3 class="column-title"><?php echo $history_title; ?></h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">2011</a>

                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">2012</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">2013</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">2014</a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <!--Start Timeline -->
                                <div class="timeline"><div class="row timeline-movement timeline-movement-top">
                                        <div class="timeline-badge timeline-future-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </div>
                                        <div class="timeline-badge timeline-filter-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="row timeline-movement">

                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">18</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>


                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 6 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--due -->

                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">13</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                </div>
                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">10</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div> <!--End Timeline -->

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <!--Start Timeline -->
                                <div class="timeline"><div class="row timeline-movement timeline-movement-top">
                                        <div class="timeline-badge timeline-future-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </div>
                                        <div class="timeline-badge timeline-filter-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="row timeline-movement">

                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">18</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>


                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--due -->

                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">13</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">10</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div> <!--End Timeline --> </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <!--Start Timeline -->
                                <div class="timeline"><div class="row timeline-movement timeline-movement-top">
                                        <div class="timeline-badge timeline-future-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </div>
                                        <div class="timeline-badge timeline-filter-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="row timeline-movement">

                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">18</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>


                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--due -->

                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">13</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">10</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div> <!--End Timeline -->  </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                                <!--Start Timeline -->
                                <div class="timeline"><div class="row timeline-movement timeline-movement-top">
                                        <div class="timeline-badge timeline-future-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </div>
                                        <div class="timeline-badge timeline-filter-movement">
                                            <a href="#">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="row timeline-movement">

                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">18</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>


                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--due -->

                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">13</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 days</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row timeline-movement">


                                        <div class="timeline-badge">
                                            <span class="timeline-balloon-date-day">10</span>
                                            <span class="timeline-balloon-date-month">APR</span>
                                        </div>

                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo">Mussum ipsum cacilds</span></li>
                                                            <li><span class="causale">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 day</small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div> <!--End Timeline -->  </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 class="column-title"><?php echo $announcements_title;?></h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php $loop = new WP_Query(array("post_type" => "announcement", "orderby" => "post_id", "order" => "ASC"));
                    $ann_count=1;
                    $bool_var;
                    $in_var;
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php
                            $collapseVar = "collapse".get_the_title();
                            $headingVar = 'heading'.get_the_title();
                            if($ann_count == 1){
                                $bool_var = "true";
                                $in_var = "in";
                                $ann_count = $ann_count +1;
                            }else {
                                $bool_var = "false";
                                $in_var = "";
                            }
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="<?php echo $headingVar;?>">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $collapseVar;?>" aria-expanded="<?php echo $bool_var;?>" aria-controls="<?php echo $collapseVar;?>">
                                        <?php the_content();?>
                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo $collapseVar;?>" class="panel-collapse collapse <?php echo $in_var;?>" role="tabpanel" aria-labelledby="<?php echo $headingVar;?>">
                                <div class="panel-body">
                                    <?php the_excerpt();?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#meet-team-->

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $service_title;?></h2>
                <?php if(!empty($service_desc)){?><p class="text-center wow fadeInDown"><?php echo $service_desc;?></p><?php }?>
             </div>

            <div class="row">
                <div class="features">
                    <?php $loop = new WP_Query(array("post_type" => "service", "orderby" => "post_id", "order" => "ASC"));
                    while ($loop->have_posts()) : $loop->the_post();?>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="<?php the_title();?>" ></i>
                                <!--<i class="fa fa-bar-chart" ></i>-->
                            </div>
                            <div class="media-body">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <?php endwhile; ?>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $solution_title;?></h2>
                <?php if(!empty($solution_desc)){?><p class="text-center wow fadeInDown"><?php echo $solution_desc;?></p><?php }?>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">All Solutions</a></li>
                    <li><a href="#" data-filter=".networks">Networking & Infrastructure</a></li>
                    <li><a href="#" data-filter=".software-licenses ">Software Licenses </a></li>
                    <li><a href="#" data-filter=".hardware-products">Hardware products</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item networks ">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/images/portfolio/01.jpg" alt="">
                        <div class="portfolio-info">
                            <?php $values = get_post_custom_values('solutions_categories');?>
                            <h3>CISCO</h3>
                            <?php echo $values[0];?>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->


    <section id="clients">

        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $client_title;?></h2>
                <?php if(!empty($client_desc)){?><p class="text-center wow fadeInDown"><?php echo $client_desc;?></p><?php }?>
            </div>
            <!-- Our Customers -->
            <div class="row">
                <div class="col-lg-12">
                </div>
                <?php $loop = new WP_Query(array("post_type" => "client", "orderby" => "post_id", "order" => "ASC"));
                while ($loop->have_posts()) : $loop->the_post();?>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail(array(200,200));
                    }?>

                </div>
                <?php endwhile; ?>
            </div><!-- /.row -->
        </div>
    </section>
    <br><br>

    <section id="partners">

        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $partner_title?></h2>
                <?php if(!empty($partner_desc)){?><p class="text-center wow fadeInDown"><?php echo $partner_desc;?></p><?php }?>
            </div>
            <!-- Our Partner -->
            <div class="row">
                <div class="col-lg-12">
                </div>
                <?php $loop = new WP_Query(array("post_type" => "partner", "orderby" => "post_id", "order" => "ASC"));
                while ($loop->have_posts()) : $loop->the_post();?>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img class="img-responsive customer-img" src="<?php the_title();?>" alt=""/>
                    </div>
                <?php endwhile; ?>
           </div>
            <!-- /.row -->
        </div>
    </section> <!--End Partners -->
    <br>




    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php $loop = new WP_Query(array("post_type" => "testimonial", "orderby" => "post_id", "order" => "ASC"));
                            $interval = 1;
                            while ($loop->have_posts()) : $loop->the_post();

                                if($interval == 1){ ?>
                                    <div class="item active">
                                <?php $interval = $interval +1;}
                                else{?>
                                    <div class="item">
                                <?php } ?>
                                        <?php if (has_post_thumbnail())?><p><img class="img-circle img-thumbnail" src="<?php the_post_thumbnail_url();?>" alt=""></p>
                                        <h4><?php the_title();?></h4>
                                        <?php the_content()?>
                                    </div>
                            <?php endwhile; ?>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->



    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $in_touch_title; ?></h2>
                <?php if (!empty($in_touch_desc))?><p class="text-center wow fadeInDown"><?php echo $in_touch_desc;?></p>
            </div>
        </div>
    </section><!--/#get-in-touch-->


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                                <strong>IT Flavor, LLC.</strong><br>
                                <li class="fa fa-map-marker"></li> 6 Selooly St.<br>
                                Dokki, Giza , Egypt 12366<br>
                                <li class="fa fa-mobile"></li> (+2001) 0053-98098 <br>
                                <li class="fa fa-envelope"></li> info@it-flavor.com
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

<?php
get_footer();
?>