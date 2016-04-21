<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer class="footer-block">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="logo-footer">
					<a href="/">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/images/footer-logo.png" alt="">
					</a>
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
				<div class="copyright">
					ALL MATERIAL PROVIDED ON THIS WEBSITE IS FOR INFORMATIVE PURPOSES ONLY.
					<br>
					IF YOU NEED SPECIFIC MEDICAL ADVICE, PLEASE SCHEDULE AN ONLINE APPOINTMENT WITH DR. Kalika or CALL DR. Kalika's OFFICE AT 1-866-311-5889
				</div>
			</div>
			<div class="col-sm-3">
				<div class="work-day">
					<ul>
						<li><b>Monday		10am - 7pm</b></li>
						<li><b>Tuesday		10am - 7pm</b></li>
						<li><b>Wednesday	10am - 7pm</b></li>
						<li><b>Thursday		10am - 7pm</b></li>
						<li><b>Friday		10am - 7pm</b></li>
						<li>Saturday	- Closed</li>
						<li>Sunday	- Closed</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/includes/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/includes/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/page-templates/assets/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
