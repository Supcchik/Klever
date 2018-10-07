<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kleveragro
 */

?>

			<!-- footer start -->
				<footer>
					<div class="container">
						<div class="footer_logo"><img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt=""></div>
						<div class="footer_caption">Designed and prodused by <a href="#">@Supcchik</a></div>
						<div class="footer_social">
							<img src="<?php echo bloginfo('template_url'); ?>/img/twitter.png" alt="" class="social_ico">
							<img src="<?php echo bloginfo('template_url'); ?>/img/facebook.png" alt="" class="social_ico">
							<img src="<?php echo bloginfo('template_url'); ?>/img/google.png" alt="" class="social_ico">
						</div>
					</div>
				</footer>
			<!-- footer end -->
		</main>
		<!-- Main page contetn end -->
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
$('#best_offer_slick').slick({
  dots: false,
  infinite: true,
  speed: 600,
  slidesToShow: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 1000,
  arrows : false,
});
	});
	</script>
	<script>
		$(document).ready(function(){
		$('#partners_slick').slick({
  		infinite: true,
  		slidesToShow: 3,
  		slidesToScroll: 1,
  		 autoplay: true,
  autoplaySpeed: 1000,
  arrows : false,


});
});

	</script>

<?php wp_footer(); ?>

</body>
</html>
