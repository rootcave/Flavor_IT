<?php
//meet team section
$meet_team_title        = get_field('meet_team_title');
$meet_team_desc         = get_field('meet_team_desc');
//Announcements
$announcements_title    = get_field('announcements_title');
// history
$history_title    = get_field('history_title');
?>
<section id="meet-team">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?php echo $meet_team_title;?></h2>
            <p class="text-center wow fadeInDown"><?php echo $meet_team_desc;?></p>
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
            <?php endwhile; wp_reset_query(); ?>
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
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>

        </div>
    </div>
</section><!--/#meet-team-->