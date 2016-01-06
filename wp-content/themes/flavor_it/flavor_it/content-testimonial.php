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
                        <?php endwhile;  wp_reset_query(); ?>
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