<?php
//partners section
$partner_title          = get_field('partner_title');
$partner_desc           = get_field('partner_desc');
?>
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
            <?php endwhile;  wp_reset_query(); ?>
        </div>
        <!-- /.row -->
    </div>
</section> <!--End Partners -->