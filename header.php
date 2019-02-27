<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Greythink_Theme
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'greythink-theme' ); ?></a>
	<div class="navbar-container container-fluid">
		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light bg-white">
			<a class="navbar-brand custom-logo-link" href="<?php echo get_home_url(); ?>" rel="home" itemprop="url"><img class="greythink-navbar-logo" src="<?php echo wp_get_attachment_image_src(61, 'medium')[0]; ?>" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#greythinkNavbarContent" aria-controls="greythinkNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="greythinkNavbarContent">

			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'menu_id' => 'greythink-primary-menu',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'navbar-nav ml-auto',
					'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
					'walker' => new WP_Bootstrap_Navwalker()
				) );
			?>

			</div>
		</nav>
	</div> <!-- container-nav -->
