<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $image = get_field('background'); ?>
        <div class="header-post">
            <div class="bg-post">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
            <div class="content-header-post">
                <div class="logo-inner-page">
                    <a href="/">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/logo-inner-page.png" alt="">
                    </a>
                </div>
                <div class="phone-number pull-right">
                    1-866-311-5889
                </div>
                <div class="bottom-header">
                    <div class="container">
                        <div class="title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="awards-content pull-right">
                        <div class="img-awards pull-left">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/award-img.png" alt="">
                        </div>
                        <div class="awards-text">
                            <div class="top-text">
                                A New York, NY Chiropractor winner of the Patients' Choice Awards.
                            </div>
                            <div class="bottom-text">
                                Verified by .Opencare.com
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

    
    <div class="container content-post">
        <?php the_content(); ?>
    </div>
<?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.331047088169!2d-73.98610704871335!3d40.75474304283435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzE3LjEiTiA3M8KwNTknMDIuMSJX!5e0!3m2!1sen!2sua!4v1461070700851" style="border:0;pointer-events:none" allowfullscreen></iframe>
</div>
<?php get_footer(); ?>
