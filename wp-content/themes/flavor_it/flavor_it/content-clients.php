<?php
//clients section
$client_title           = get_field('client_title');
$client_desc            = get_field('client_desc');
?>
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
            <?php endwhile;  wp_reset_query(); ?>
        </div><!-- /.row -->
    </div>
</section>

