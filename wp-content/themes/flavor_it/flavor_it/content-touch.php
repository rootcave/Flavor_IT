<?php
//get in touch section
$in_touch_title         = get_field('in_touch_title');
$in_touch_desc          = get_field('in_touch_desc');
?>
<section id="get-in-touch">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?php echo $in_touch_title; ?></h2>
            <?php if (!empty($in_touch_desc))?><p class="text-center wow fadeInDown"><?php echo $in_touch_desc;?></p>
        </div>
    </div>
</section><!--/#get-in-touch-->