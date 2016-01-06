<?php
//solutions section
$solution_title         = get_field('solution_title');
$solution_desc          = get_field('solution_desc');
?>
<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?php echo $solution_title;?></h2>
            <?php if(!empty($solution_desc))?><p class="text-center wow fadeInDown"><?php echo $solution_desc;?></p>
        </div>

        <div class="text-center">
            <ul class="portfolio-filter">
                <li><a class="active" href="#" data-filter="*">All Solutions</a></li>
                <?php $loop = new WP_Query(array("post_type" => "solutions_cat", "orderby" => "post_id", "order" => "ASC"));
                while ($loop->have_posts()) : $loop->the_post();?>
                <li><a href="#" data-filter=".<?php the_field('solutions_categories');?>"><?php the_title();?></a></li>
                <?php endwhile;  wp_reset_query();?>
            </ul><!--/#portfolio-filter-->
        </div>

        <div class="portfolio-items">
            <?php $loop = new WP_Query(array("post_type" => "solution", "orderby" => "post_id", "order" => "ASC"));
            while ($loop->have_posts()) : $loop->the_post();?>
                <div class="portfolio-item <?php the_field('solutions_categories');?>">
                    <div class="portfolio-item-inner">
                        <?php if(has_post_thumbnail())
                        the_post_thumbnail(array(260,250));
                        ?>
                        <div class="portfolio-info">
                            <h3><?php the_title();?></h3>
                            <?php the_excerpt();?>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            <?php endwhile;  wp_reset_query();?>
        </div>
    </div><!--/.container-->
</section><!--/#portfolio-->