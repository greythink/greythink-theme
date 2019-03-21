<?php
/**
 * Greythink Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Greythink_Theme
 */

if ( ! function_exists( 'greythink_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function greythink_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Greythink Theme, use a find and replace
		 * to change 'greythink-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'greythink-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary Menu', 'greythink-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'greythink_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'greythink_theme_setup' );

// Require Bootstrap Navwalker file
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greythink_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'greythink_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'greythink_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greythink_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'greythink-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'greythink-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'greythink_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greythink_theme_scripts() {
	wp_enqueue_style('greythink-default-styles', get_stylesheet_uri());

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica|Source+Sans+Pro:300,400,700|Lato:300,400,700|Playfair+Display:900i', array(), '1.0.0', 'all');

	wp_enqueue_script('greythink-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('greythink-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array('greythink-default-styles'), '4.2.1', 'all');

	wp_enqueue_style('greythink-theme-custom-styles', get_template_directory_uri() . '/css/greythink-styles.css', array('bootstrap-css', 'greythink-default-styles'), '1.0.0', 'all');

	wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array('jquery'), '1.14.6', true);

	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery', 'popper-js'), '4.2.1', true);

	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/js/all.js', array(), '5.6.3', true);

	wp_enqueue_script('greythink-custom-script', get_template_directory_uri() . '/js/greythink-script.js', array('jquery', 'popper-js', 'bootstrap-js', 'font-awesome'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'greythink_theme_scripts' );

/* Add additional attributes to styles */
function add_attributes_to_styles($html, $handle, $href, $media)  {
	if('bootstrap-css' === $handle)  {
		return str_replace("media='all'", 'media="all" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"', $html);
	}  else  {
		return $html;
	}
}
add_filter('style_loader_tag', 'add_attributes_to_styles', 10, 4);

/* Add additional attributes to scripts */
function add_attributes_to_scripts($tag, $handle, $src)  {
	if(('bootstrap-js' === $handle) || ('popper-js' === $handle) || ('font-awesome' === $handle))  {

		if('bootstrap-js' === $handle)  {
			return '<script src="' . $src . '" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>' . "\n";
		}  
		
		elseif('popper-js' === $handle)  {
			return '<script src="' . $src . '" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>' . "\n";
		}  
		
		elseif('font-awesome' === $handle)  {
			return '<script defer src="' . $src . '" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>' . "\n";
		}
		 
	}  else {
		return $tag;
	}
}
add_filter('script_loader_tag', 'add_attributes_to_scripts', 10, 3);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function add_gtm_head_code()  {
?>	

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBTGRBT');</script>
<!-- End Google Tag Manager -->

<?php
}
add_filter('wp_head', 'add_gtm_head_code', 1);

function add_gtm_body_code($classes)  {

	$body_code = '<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBTGRBT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->';

	$br = '<br style="display: none; visibility: hidden;';

	$classes[] = '">' . "\n\n" . $body_code . $br;

	return $classes;
}
add_filter('body_class', 'add_gtm_body_code', 10000);


