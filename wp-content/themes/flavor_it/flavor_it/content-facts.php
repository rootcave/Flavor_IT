<?php
//fun facts
$fact_title             = get_field('fact_title');
$fact_desc              = get_field('fact_desc');
?>
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
            <?php endwhile;  wp_reset_query();?>
        </div>
    </div>
</section>