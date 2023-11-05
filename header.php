<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PingPassion
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/f66cb7be42.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pingpassion' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<p>LA PASSION DU PING!</p>

			<div class="right-box-sup-nav">
				<div class="nav-sup">
					<a href="#">Notre Boutique</a>
					<a href="#">Contact</a>
					<a href="#">CGV</a>
				</div>
				<div class="social-nav-sup">
					<a href="#"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></a>
					<a href="#"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i></a>
					<a href="#"><i class="fa-solid fa-phone" style="color: #ffffff;"></i></a>
				</div>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="left-box-nav">
				<h1 class="logo">Ping-Passion</h1>

				<div class="menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</div>
			</div>
			<div class="right-box-nav">
				<a href="#" class="account">SE CONNECTER <i class="fa-solid fa-heart fa-xl" style="color: #c0c0c0;"></i></a>
				<a href="#" class="account">PANNIER/0,00€ <i class="fa-solid fa-cart-shopping fa-xl" style="color: #446484;"></i></a>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
