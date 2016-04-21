<?php
/**
 * Template Name: Home-page
 *
 * @package WordPress
 * @subpackage chiropractor
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<div class="main-screen">
    <div class="container-fluid">
        <div class="row">
            <div class="img-bg">
                <a href="/">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/background.png" alt="" style="width: 100%;">
                </a>
            </div>
            <div class="content-main-screen">
                <div class="awards-content pull-right">
                    <div class="img-awards pull-left">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/award-img.png" alt="">
                    </div>
                    <div class="awards-text pull-left">
                        <div class="top-text">
                            A New York, NY Chiropractor winner of the Patients' Choice Awards.
                        </div>
                        <div class="bottom-text">
                            Verified by .Opencare.com
                        </div>
                    </div>
                </div>
                <div class="logo-block">
                    <div class="img-logo">
                        <a href="/">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="slogan">
                        <?php echo the_field('slogan-header'); ?>
                    </div>
                </div>
                <div class="social-buttons">
                    <a href="#" class="facebook" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="twitter" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="google-plus" target="_blank">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="youtube" target="_blank">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="yelp" target="_blank">
                        <i class="fa fa-yelp" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section about-block">
    <div class="container-fluid">
        <div class="row">
            <div class="img-about">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/background-stairs.png" alt="" style="width: 100%">
            </div>
            <div class="title-about">
                What is
                Chiropractic
                Medicine?
            </div>
            <div class="container">
                <div class="row">
                    <div class="text-about col-xs-12">
                        <?php echo the_field('text_about_chiropractic'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="what-we-treat-block">
    <div class="container">
        <div class="row">
            <div class="title-block text-center">
                WHAT WE TREAT
            </div>
            <div class="col-sm-7">
                <ul class="nav navigation-what-we-treat">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Head
                        <span class="dot-active">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a datatype="neckPain" href="#">Neck pain</a>
                            </li>
                            <li>
                                <a datatype="headache" href="#">Headache</a>
                            </li>
                            <li>
                                <a href="#">Shoulder Pain</a>
                            </li>
                            <li>
                                <a href="#">TMJ</a>
                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Body
                        <span class="dot-active">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Low back pain</a>
                            </li>
                            <li>
                                <a href="">Sciatica</a>
                            </li>
                            <li>
                                <a href="#">Lumber herniated disk</a>
                            </li>
                            <li>
                                <a href="#">Sacroiliac joint pain</a>
                            </li>
                            <li>
                                <a href="#">Hip pain</a>
                            </li>
                            <li>
                                <a href="#">Knee pain</a>
                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Arms
                        <span class="dot-active">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Low back pain</a>
                            </li>
                            <li>
                                <a href="">Sciatica</a>
                            </li>
                            <li>
                                <a href="#">Lumber herniated disk</a>
                            </li>
                            <li>
                                <a href="#">Sacroiliac joint pain</a>
                            </li>
                            <li>
                                <a href="#">Hip pain</a>
                            </li>
                            <li>
                                <a href="#">Knee pain</a>
                            </li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Legs
                        <span class="dot-active">
                            <i class="fa fa-circle" aria-hidden="true"></i>
                        </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Low back pain</a>
                            </li>
                            <li>
                                <a href="">Sciatica</a>
                            </li>
                            <li>
                                <a href="#">Lumber herniated disk</a>
                            </li>
                            <li>
                                <a href="#">Sacroiliac joint pain</a>
                            </li>
                            <li>
                                <a href="#">Hip pain</a>
                            </li>
                            <li>
                                <a href="#">Knee pain</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-sm-5 text-center ">
                <div id="neckPain" class="dance-girl-dots" style="top: 197px; left: 273px; display: none; "></div>
                <div id="headache" class="dance-girl-dots" style="top: 155px; left: 275px; display: none; "></div>
                <div id="headache" class="dance-girl-dots" style="top: 155px; left: 275px; display: none;"></div>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/dancer.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="testimonials-block" >
    <div class="container-fluid">
        <div class="row">
            <div class="title-block text-center">
                We have more than
            </div>
            <div class="col-sm-6 nopadding left-side">

            </div>
            <div class="col-sm-6 nopadding">
                <div class="year">
                    16 YEARS
                </div>
                <div class="word">
                    experience
                </div>
                <div class="link-testimonials">
                    <a href="#">Testimonials</a>
                </div>
            </div>
            <div class="col-xs-12 nopadding">
                <div class="testimonial-carousel">
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 avatar-testimonial">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/avatar-testimonial.png" alt="">
                                </div>
                                <div class="col-xs-12 col-sm-9 content-testimonial">
                                    <div class="name">
                                        IBRA MORALES
                                    </div>
                                    <div class="title">
                                        THIRTY TIME NYC MARATHON PARTICIPANT
                                    </div>
                                    <div class="text">
                                        Dr. Kalika, I just want to thank you and your
                                        incredible team for helping me recover and run the NYC marathon
                                        for the 30th time this coming Nov. 7th. As you can see in the
                                        attached poster, the NYRRC had selected me as one of the runners
                                        in this year’s marketing campaign. When I got injured in June and
                                        visited various Dr. with no improvement , I was referred to you.
                                        When I came in, I could hardly walk, never mind running.
                                        Now I’m ready to tackle the NYC marathon for the 30th time!
                                        Thanks to Nick, Gregg, Sunny and Anna!!
                                        Your team is great and thanks to “your incredible personal
                                        attention” to my injuries! I’m ready!!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 avatar-testimonial">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/avatar-testimonial.png" alt="">
                                </div>
                                <div class="col-xs-12 col-sm-9 content-testimonial">
                                    <div class="name">
                                        IBRA MORALES
                                    </div>
                                    <div class="title">
                                        THIRTY TIME NYC MARATHON PARTICIPANT
                                    </div>
                                    <div class="text">
                                        Dr. Kalika, I just want to thank you and your
                                        incredible team for helping me recover and run the NYC marathon
                                        for the 30th time this coming Nov. 7th. As you can see in the
                                        attached poster, the NYRRC had selected me as one of the runners
                                        in this year’s marketing campaign. When I got injured in June and
                                        visited various Dr. with no improvement , I was referred to you.
                                        When I came in, I could hardly walk, never mind running.
                                        Now I’m ready to tackle the NYC marathon for the 30th time!
                                        Thanks to Nick, Gregg, Sunny and Anna!!
                                        Your team is great and thanks to “your incredible personal
                                        attention” to my injuries! I’m ready!!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 avatar-testimonial">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/avatar-testimonial.png" alt="">
                                </div>
                                <div class="col-xs-12 col-sm-9 content-testimonial">
                                    <div class="name">
                                        IBRA MORALES
                                    </div>
                                    <div class="title">
                                        THIRTY TIME NYC MARATHON PARTICIPANT
                                    </div>
                                    <div class="text">
                                        Dr. Kalika, I just want to thank you and your
                                        incredible team for helping me recover and run the NYC marathon
                                        for the 30th time this coming Nov. 7th. As you can see in the
                                        attached poster, the NYRRC had selected me as one of the runners
                                        in this year’s marketing campaign. When I got injured in June and
                                        visited various Dr. with no improvement , I was referred to you.
                                        When I came in, I could hardly walk, never mind running.
                                        Now I’m ready to tackle the NYC marathon for the 30th time!
                                        Thanks to Nick, Gregg, Sunny and Anna!!
                                        Your team is great and thanks to “your incredible personal
                                        attention” to my injuries! I’m ready!!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="certification-block text-center">
    <div class="title-block">
        Certifications
    </div>
    <div class="container">
        <div class="row">
            <div class="logos-certification">
                <div class="item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/armds-logo.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/neurodynamic-logo.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/sport-injuries-logo.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/dns-logo.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/aimg-logo.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/gcmas-logo.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/movement-prefomance.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-clinics">
    <div class="what-we-make text-center">
        <div class="container">
            <div class="row">
                <div class="text col-xs-12">
                    Please feel free to look over our website and call
                    us to schedule an appointment with the best chiropractor in NYC.
                </div>
                <div class="item">
                    <div class="img-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/head-logo.png" alt="">
                    </div>
                    <div class="name-item">
                        Head
                    </div>
                </div>
                <div class="item">
                    <div class="img-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/spine.png" alt="">
                    </div>
                    <div class="name-item">
                        Spine
                    </div>
                </div>
                <div class="item">
                    <div class="img-item">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/joints.png" alt="">
                    </div>
                    <div class="name-item">
                        Joints
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slogan-footer text-center">
    <p>
        It is our mission here at New York Dynamic Neuromuscular Rehabilitation
        to help you live a healthy and pain-free life.
    </p>
</div>

<div class="block-feedback">
    <div class="container">
        <div class="row">
            <div class="form">
                <form>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email (Required)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Telephone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-default btn-block btn-sent">Submit</button>
                    </div>
                </form>
            </div>
            <div class="contact-data col-xs-12">
                <ul>
                    <li>
                        <b>phone:</b> 1-866-938-7779
                    </li>
                    <li>
                        <b>e-mail:</b> info@nydnrehab.com
                    </li>
                    <li>
                        <b>address</b> 130 West 42 Street, Suite 1055, New York, NY 10036
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.331047088169!2d-73.98610704871335!3d40.75474304283435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzE3LjEiTiA3M8KwNTknMDIuMSJX!5e0!3m2!1sen!2sua!4v1461070700851"  style="border:0;pointer-events:none" allowfullscreen></iframe>
</div>

<?php get_footer(); ?>