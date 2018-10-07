<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kleveragro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
<!-- Header start -->
		<header>
			<div class="container">
				<img class="logo_header" src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="">
				<div class="number_header">
					<ul>
						<li><a href="#">+380983298423</a>
							<ul>
								<li><a href="#">+380983298423</a></li>
								<li><a href="#">+380636104496</a></li>
								<li><a href="#">+380501313232</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<!-- Header end -->