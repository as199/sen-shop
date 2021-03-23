<?php
/**
* Typography Settings.
*
* @package Storer
*/
$body_fonts = Storer_Fonts::storer_get_fonts();
$headings_fonts = Storer_Fonts::storer_get_fonts( $font_type = true );
$default = storer_get_default_theme_options();
$storer_heading_font = storer_get_option( 'storer_heading_font',$default['storer_heading_font'] );
$headings_fonts_property = Storer_Fonts::storer_get_fonts_property( $storer_heading_font );

// Typography Section.
$wp_customize->add_section( 'typography_setting',
	array(
	'title'      => esc_html__( 'Typography Settings', 'storer' ),
	'priority'   => 150,
	'capability' => 'edit_theme_options',
	'panel'      => 'general_setting',
	)
);

$wp_customize->add_setting( 'storer_heading_font',
	array(
		'default'           => $default['storer_heading_font'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'storer_sanitize_select',
	)
);
$wp_customize->add_control( 'storer_heading_font',
	array(
	'label'       => esc_html__( 'Title Font family', 'storer' ),
	'section'     => 'typography_setting',
	'type'        => 'select',
	'choices'     => $headings_fonts
	)
);

$wp_customize->add_setting( 'storer_heading_weight',
	array(
		'default'           => $default['storer_heading_weight'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'storer_sanitize_select',
	)
);
$wp_customize->add_control( 'storer_heading_weight',
	array(
		'label'       => esc_html__( 'Title Weight', 'storer' ),
		'section'     => 'typography_setting',
		'type'        => 'select',
		'choices'     => $headings_fonts_property['weight'],
	)
);

$wp_customize->add_setting( 'storer_heading_case',
	array(
		'default'           => $default['storer_heading_case'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'storer_sanitize_select',
	)
);
$wp_customize->add_control( 'storer_heading_case',
	array(
	'label'       => esc_html__( 'Section title case', 'storer' ),
	'section'     => 'typography_setting',
	'type'        => 'select',
	'choices'               => array(
		'normal'  	=> esc_html__( 'Normal', 'storer' ),
		'uppercase' => esc_html__( 'Uppercase', 'storer' ),
		'lowercase' => esc_html__( 'Lowercase', 'storer' ),
	    ),
	)
);


$wp_customize->add_setting( 'storer_content_font',
	array(
	'default'           => $default['storer_content_font'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'storer_sanitize_select',
	)
);
$wp_customize->add_control( 'storer_content_font',
	array(
	'label'       => esc_html__( 'Content Font Family', 'storer' ),
	'section'     => 'typography_setting',
	'type'        => 'select',
	'choices'     => $body_fonts 
	)
);


// font Section.
$wp_customize->add_section( 'colors',
	array(
		'title'      => __( 'Color Options', 'storer' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'general_setting',
	)
);

// Setting - header_color.
$wp_customize->add_setting( 'header_color',
	array(
		'default'           => $default['header_color'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize, 'header_color',
	array(
		'label'    => __( 'Header Color', 'storer' ),
		'section'  => 'colors',
		'type'     => 'color',
		'priority' => 100,
	)
) );

$wp_customize->add_setting( 'header_text_color',
	array(
		'default'           => $default['header_text_color'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize, 'header_text_color',
	array(
		'label'    => __( 'Header Text Color', 'storer' ),
		'section'  => 'colors',
		'type'     => 'color',
		'priority' => 1,
	)
) );

// Setting - primary_color.
$wp_customize->add_setting( 'primary_color',
	array(
		'default'           => $default['primary_color'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize, 'primary_color',
	array(
		'label'    => __( 'Primary Color', 'storer' ),
		'section'  => 'colors',
		'type'     => 'color',
		'priority' => 100,
	)
) );

// Setting - primary_bg_text_color.
$wp_customize->add_setting( 'primary_bg_text_color',
	array(
		'default'           => $default['primary_bg_text_color'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize, 'primary_bg_text_color',
	array(
		'label'    => __( 'Primary BG Text Color', 'storer' ),
		'section'  => 'colors',
		'type'     => 'color',
		'priority' => 100,
	)
) );

// Setting - secondary_color.
$wp_customize->add_setting( 'secondary_color',
	array(
		'default'           => $default['secondary_color'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize, 'secondary_color',
	array(
		'label'    => __( 'Secondary Color', 'storer' ),
		'section'  => 'colors',
		'type'     => 'color',
		'priority' => 100,
	)
) );

// Setting - secondary_bg_text_color.
$wp_customize->add_setting( 'secondary_bg_text_color',
	array(
		'default'           => $default['secondary_bg_text_color'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize, 'secondary_bg_text_color',
	array(
		'label'    => __( 'Secondary BG Text Color', 'storer' ),
		'section'  => 'colors',
		'type'     => 'color',
		'priority' => 100,
	)
) );
