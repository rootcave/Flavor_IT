<?php
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
?>

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
                <a class="btn btn-primary" href="<?php echo $mission_url;?>">Learn More</a>
            </div>

            <div class="col-sm-6 wow fadeInRight">
                <h3 class="column-title"><?php echo $vission_title; ?></h3>
                <?php echo $vission_desc; ?>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="nostyle">
                            <?php if(!empty($vission_feature1))?><li><i class="fa fa-check-square"></i><?php echo $vission_feature1; ?></li>
                            <?php if(!empty($vission_feature2))?><li><i class="fa fa-check-square"></i><?php echo $vission_feature2; ?></li>
                        </ul>
                    </div>

                    <div class="col-sm-6">
                        <ul class="nostyle">
                            <?php if(!empty($vission_feature3))?><li><i class="fa fa-check-square"></i><?php echo $vission_feature3; ?></li>
                            <?php if(!empty($vission_feature4))?><li><i class="fa fa-check-square"></i><?php echo $vission_feature4; ?></li>
                        </ul>
                    </div>
                </div>

                <a class="btn btn-primary" href="<?php echo $vission_url;?>">Learn More</a>

            </div>
        </div>
    </div>
</section><!--/#about-->