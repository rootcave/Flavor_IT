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
            $timeTeam = 0;
            while ($loop->have_posts()) : $loop->the_post();?>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="<?php echo $timeTeam;?>ms">
                        <div class="team-img">
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail(array(250,225));
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
                <?php $timeTeam = $timeTeam + 100; ?>
            <?php endwhile; wp_reset_query(); ?>
        </div>

        <div class="divider"></div>

        <div class="row">


            <div class="col-sm-6">
                <h3 class="column-title"><?php echo $history_title; ?></h3>
                <div role="tabpanel">
                    <ul class="nav main-tab nav-justified" role="tablist">
                        <?php $loop = new WP_Query(array("post_type" => "history_year", "orderby" => "post_id", "order" => "ASC"));
                        $count = 1;
                        $bool = true;
                        while ($loop->have_posts()) : $loop->the_post();
                           if($count == 1) {?>
                                <li role="presentation" class="active">
                            <?php $count = $count+1;}else{?>
                                <li role="presentation">
                            <?php $bool = false; };?>
                                    <a href="#tab<?php the_title();?>" role="tab" data-toggle="tab" aria-controls="tab<?php the_title();?>" aria-expanded="<?php echo $bool?>"><?php the_title();?></a>
                                </li>
                        <?php endwhile; wp_reset_query();?>
                    </ul>
                    <div id="tab-content" class="tab-content">
                        <?php $loop = new WP_Query(array("post_type" => "history_year", "orderby" => "post_id", "order" => "ASC"));
                        $count = 1;
                        while ($loop->have_posts()) : $loop->the_post();
                        $history_year_title = get_the_title();
                        if($count == 1) {?>
                        <div role="tabpanel" class="tab-pane fade active in" id="tab<?php the_title();?>" aria-labelledby="tab<?php the_title();?>">
                        <?php $count = $count +1;}else{?>
                        <div role="tabpanel" class="tab-pane fade" id="tab<?php the_title();?>" aria-labelledby="tab<?php the_title();?>">
                        <?php }?>
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

                            <?php
                            $nestedloop = new WP_Query(array("post_type" => "history", "meta_key"=>"history_years", "meta_value"=>"$history_year_title", "orderby" => "post_id", "order" => "DESC"));
                            while ($nestedloop->have_posts()) : $nestedloop->the_post();?>
                                <div class="row timeline-movement">


                                    <div class="timeline-badge">
                                        <span class="timeline-balloon-date-day"><?php the_field('date_day');?></span>
                                        <span class="timeline-balloon-date-month"><?php the_field('date_month');?></span>
                                    </div>
                                    <div class="timeline-badge">
                                        <span class="timeline-balloon-date-day"><?php the_field('date_day');?></span>
                                        <span class="timeline-balloon-date-month"><?php the_field('date_month');?></span>
                                    </div>
                                    <?php if(get_the_title()== "credits"){ ?>
                                        <div class="col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo"><?php the_field('memory_title');?></span></li>
                                                            <li><span class="causale"><?php the_field('memory_desc');?></span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php the_field('days_count')?></small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="col-sm-offset-6 col-sm-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-offset-1 col-sm-11">
                                                    <div class="timeline-panel debits">
                                                        <ul class="timeline-panel-ul">
                                                            <li><span class="importo"><?php  the_field('memory_title');?></span></li>
                                                            <li><span class="causale"><?php  the_field('memory_desc');?></span> </li>
                                                            <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i><?php the_field('days_count')?></small></p> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php endwhile; //wp_reset_query();?>
                            </div> <!--End Timeline -->

                        </div>
                        <?php endwhile; wp_reset_query();?>
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