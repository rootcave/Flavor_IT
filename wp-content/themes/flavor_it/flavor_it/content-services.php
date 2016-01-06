<?php
//services section
$service_title          = get_field('service_title');
$service_desc           = get_field('service_desc');
?>
<section id="services" >
    <div class="container">

        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?php echo $service_title;?></h2>
            <?php if(!empty($service_desc)){?><p class="text-center wow fadeInDown"><?php echo $service_desc;?></p><?php }?>
        </div>

        <div class="row">
            <div class="features">
                <?php $loop = new WP_Query(array("post_type" => "service", "orderby" => "post_id", "order" => "ASC"));
                $timeService =0;
                while ($loop->have_posts()) : $loop->the_post();?>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="<?php echo $timeService;?>ms">
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
                    <?php $timeService = $timeService +100;?>
                <?php endwhile;  wp_reset_query();?>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->