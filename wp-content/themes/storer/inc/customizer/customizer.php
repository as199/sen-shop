<?php
/**
 * Storer Theme Customizer
 *
 * @package Storer
 */

/** Custom theme mode. **/
require get_template_directory().'/inc/customizer/core/theme-mode.php';

/** Custom customizer default values. **/
require get_template_directory().'/inc/customizer/core/default-value.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function storer_customize_register( $wp_customize ) {

/** Custom control theme mode. **/
require get_template_directory().'/inc/customizer/core/customizer-control.php';
/** Custom sanitizer theme mode. **/
require get_template_directory().'/inc/customizer/core/customizer-sanitize.php';


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->get_section( 'title_tagline' )->panel = 'general_setting';

	$wp_customize->get_section( 'header_image' )->panel = 'general_setting';
    $wp_customize->get_section( 'header_image' )->priority = '20';  

	$wp_customize->get_section( 'background_image' )->panel = 'general_setting';
	$wp_customize->get_section( 'header_image' )->priority = '25';  

	// homepage options
	require get_template_directory().'/inc/customizer/homepage-options.php';
	require get_template_directory().'/inc/customizer/woocommerce-option.php';
	require get_template_directory().'/inc/customizer/typography/typography.php';


	// Register custom section types.
	$wp_customize->register_section_type( 'Storer_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new Storer_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Storer Pro', 'storer' ),
				'pro_text' => esc_html__( 'Upgrade To Pro', 'storer' ),
				'pro_url'  => esc_url('https://www.themeinwp.com/theme/storer-pro/'),
				'priority'  => 1,
			)
		)
	);

}
add_action( 'customize_register', 'storer_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function storer_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function storer_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


add_action('wp_ajax_storer_customizer_font_weight', 'storer_customizer_font_weight_callback');

// Recommendec Post Ajax Call Function.
function storer_customizer_font_weight_callback() {

    if ( isset( $_POST['_wpnonce'] ) && wp_verify_nonce( wp_unslash( $_POST['_wpnonce'] ), 'storer_ajax_nonce' ) && isset( $_POST['currentfont'] ) && wp_unslash( $_POST['currentfont'] )  ) {

       $currentfont = wp_unslash( $_POST['currentfont'] );
       $headings_fonts_property = Storer_Fonts::storer_get_fonts_property( $currentfont );

       foreach( $headings_fonts_property['weight'] as $key => $value ){
       		echo '<option value="'.esc_attr( $key ).'">'.esc_html( $value ).'</option>';
       }
    }
    wp_die();
}


add_action( 'wp_ajax_storer_reorder_home_section', 'storer_reorder_home_section' );
function storer_reorder_home_section() {

	if ( isset( $_POST['sections'] ) ) {

		set_theme_mod( 'home_section_reorder_value', wp_unslash( $_POST['sections'] ) );
		
	}
	wp_die(); // this is required to terminate immediately and return a proper response
}

/**
 * Customizer Enqueue scripts and styles.
 */

if (!function_exists('storer_customizer_scripts')) :

    function storer_customizer_scripts(){   
    	
    	wp_enqueue_script('jquery-ui-button');
        wp_enqueue_script('storer-customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery','customize-controls'), '', 1);
    	
    	wp_enqueue_style('storer-customizer', get_template_directory_uri() . '/assets/css/customizer.css');

        $home_section_reorder_value = get_theme_mod( 'home_section_reorder_value' );
        $home_section_reorder_value = explode(",",$home_section_reorder_value );
        $key_sidebar = array_search ('sidebar-widgets-front-page-fullwidth-sidebar', $home_section_reorder_value);
        $home_url = esc_url( home_url('/') );

        $ajax_nonce = wp_create_nonce('storer_ajax_nonce');
        wp_localize_script( 
		    'storer-customizer', 
		    'storer_customizer',
		    array(
		        'ajax_url'   => esc_url( admin_url( 'admin-ajax.php' ) ),
		        'ajax_nonce' => $ajax_nonce,
		        'key_sidebar' => $key_sidebar,
		        'home_url' => $home_url,
		     )
		);
    }

endif;

add_action('customize_controls_enqueue_scripts', 'storer_customizer_scripts');
add_action('customize_controls_init', 'storer_customizer_scripts');


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function storer_customize_preview_js() {
	wp_enqueue_script( 'storer-customizer', get_template_directory_uri() . '/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'storer_customize_preview_js' );
