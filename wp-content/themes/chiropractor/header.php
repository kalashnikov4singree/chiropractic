<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/includes/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/includes/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/includes/owl-carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/css/main.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="menu">
	<div class="hamburger">
		<button type="button" class="btn btn-open-menu">
            <span class="bars">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </span>
		</button>
        <span class="open-menu">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/line-open-menu.png" alt="">
            open-menu
        </span>
	</div>
	<?php //wp_nav_menu('menu=main-menu&menu_class=nav nav-tabs main-menu'); ?>
	<ul class="nav nav-tabs main-menu">
		<li><hr></li>
		<li role="presentation"><a href="#">Home</a></li>
		<li role="presentation"><a href="#">WHO WE ARE</a></li>
		<li role="presentation" class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				WHAT WE TREAT<span class="caret"></span>
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
		<li role="presentation"><a href="#">blog</a></li>
		<li role="presentation"><a href="#">contac us</a></li>
	</ul>
</div>
