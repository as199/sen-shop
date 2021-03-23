<?php
/**
 * Storer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Storer
 */
if ( ! function_exists( 'storer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function storer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Storer, use a find and replace
		 * to change 'storer' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'storer', get_template_directory() . '/languages' );

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
        add_image_size('storer-medium-product',450, 720, true); // width, height, crop


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary Menu', 'storer' ),
				'social-menu' => esc_html__( 'Social Menu', 'storer' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'storer' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'storer_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'storer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function storer_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'storer_content_width', 640 );
}
add_action( 'after_setup_theme', 'storer_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function storer_scripts() {
		 $fonts_url = Storer_Fonts::storer_get_fonts_url();
    if (!empty($fonts_url)) {
        wp_enqueue_style('storer-google-fonts', $fonts_url, array(), null);
    }
	wp_enqueue_style( 'storer-style', get_stylesheet_uri());
	wp_add_inline_style( 'storer-style', storer_trigger_custom_css_action() );

	wp_enqueue_style('slick', get_template_directory_uri().'/assets/lib/slick/css/slick.css');
	wp_enqueue_style('magnific', get_template_directory_uri().'/assets/lib/magnific/css/magnific-popup.css');
 	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/lib/font-awesome/css/font-awesome.min.css');
 	wp_enqueue_style('select2', get_template_directory_uri() . '/assets/lib/select2/css/select2.min.css');
	wp_enqueue_script( 'storer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/lib/magnific/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
	wp_enqueue_script('theiaStickySidebar', get_template_directory_uri() . '/assets/lib/theiaStickySidebar/theia-sticky-sidebar.min.js', array('jquery'), '', true);
	wp_enqueue_script('select2', get_template_directory_uri() . '/assets/lib/select2/js/select2.min.js');
	wp_enqueue_script( 'storer-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$ajax_nonce = wp_create_nonce('storer_ajax_nonce');

    wp_localize_script( 
        'storer-ajax', 
        'storer_ajax',
        array(
            'ajax_url'   => esc_url( admin_url( 'admin-ajax.php' ) ),
            'ajax_nonce' => $ajax_nonce,
         )
    );
}
add_action( 'wp_enqueue_scripts', 'storer_scripts' );
/**
 * TGM Plugin Recommendation.
 */
require get_template_directory() . '/assets/lib/tgmpa/recommended-plugins.php';

/**
 * Register required sidebar.
 */
require get_template_directory() . '/inc/widgets/sidebar-register.php';

/**
 * Added style.
 */
require get_template_directory() . '/inc/hooks/added-style.php';

/**
 * Register required sidebar.
 */
require get_template_directory() . '/inc/customizer/typography/classes-font.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom function feature.
 */
require get_template_directory() . '/inc/custom-function.php';

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
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * fullwidth-slider-hook.
 */
require get_template_directory() . '/inc/hooks/full-width-slider.php';

/**
 * featured-category-hook.
 */
require get_template_directory() . '/inc/hooks/featured-category.php';

/**
 * featured-product-hook.
 */
require get_template_directory() . '/inc/hooks/featured-product.php';

/**
 * store-feature
 */
require get_template_directory() . '/inc/hooks/store-feature.php';

/**
 * latest-blog
 */
require get_template_directory() . '/inc/hooks/latest-blog.php';

/**
 * fullwidth-3-add
 */
require get_template_directory() . '/inc/hooks/fullwidth-3-add.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
    require get_template_directory() . '/inc/woocommerce-product-loop.php';
}

