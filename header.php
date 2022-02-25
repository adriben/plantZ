<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plantZ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'plantz'); ?></a>

		<div class="announcement-bar pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<ul class="announcement-bar__list">
							<li>
								<i class="bi bi-telephone rounded-circle"></i>
								<a href="tel: +81 070 5665 8997">+81 070 5665 8997</a>

							</li>
							<li>
								<i class="bi bi-envelope rounded-circle"></i>
								<a href="mailto: plantz@info.com">plantz@info.com</a>

							</li>
						</ul>

					</div>
					<div class="col-md-8 d-flex justify-content-end col-sm-12">
						<ul class="announcement-bar__list">
							<li>
								<i class="bi bi-truck rounded-circle"></i> FREE SHIPPING

							</li>
							<li>
								<i class="bi bi-clock-history rounded-circle"></i> 40 DAYS GUARANTEE

							</li>
							<li>
								<i class="bi bi-person rounded-circle"></i> 24/7 CUSTOMER SUPPORT

							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>




		<header id="masthead" class="site-header">

			<div class="container pt-2 pb-2">
				<div class="row">

					<div class="col site-header__logo">
						<?php the_custom_logo(); ?>

					</div>
					<div class="col-md-5">
						strea
					</div>
					<div class="col cart">
						Cart
					</div>
				</div>


			</div>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'plantz'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->