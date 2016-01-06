<?php
/*
  Template Name: Home Page
*/

get_header();
?>


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



    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                                <strong>IT Flavor, LLC.</strong><br>
                                <li class="fa fa-map-marker"></li> 6 Selooly St.<br>
                                Dokki, Giza , Egypt 12366<br>
                                <li class="fa fa-mobile"></li> (+2001) 0053-98098 <br>
                                <li class="fa fa-envelope"></li> info@it-flavor.com
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

<?php
get_footer();
?>