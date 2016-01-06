<?php
/*
  Template Name: Home Page
*/

get_header();
?>


<?php get_template_part('content', 'main');?>
<?php get_template_part('content', 'facts');?>
<?php get_template_part('content', 'about');?>
<?php get_template_part('content', 'team');?>
<?php get_template_part('content', 'services');?>
<?php get_template_part('content', 'solutions');?>
<br/>
<?php get_template_part('content', 'clients');?>
<br/>
<?php get_template_part('content', 'partners');?>
<br/><br/>
<?php get_template_part('content', 'testimonial');?>
<?php get_template_part('content', 'touch');?>
<?php get_template_part('content', 'info');?>





<?php
get_footer();
?>