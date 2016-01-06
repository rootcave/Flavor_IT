<?php
$contact_title = get_field('contact_title');
$company_title = get_field('company_title');
$address       = get_field('address');
$phone_number  = get_field('phone_number');
$email         = get_field('e-mail');
$lat           = get_field(latitude);
$long          = get_field(longitude);

?>
<section id="contact">
    <div id="google-map" style="height:650px" data-latitude="<?php echo $lat;?>" data-longitude="<?php echo $Long;?>"></div>
    <div class="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <div class="contact-form">
                        <h3><?php echo $contact_title;?></h3>

                        <address>
                            <strong><?php echo $company_title;?></strong><br>
                            <li class="fa fa-map-marker"></li><?php echo $address;?><br>
                            <li class="fa fa-mobile"></li><?php echo $phone_number;?><br>
                            <li class="fa fa-envelope"></li><?php echo $email;?>
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
