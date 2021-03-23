<?php
/**
 * The template for displaying home page.
 * @package Storer
 */

get_header();
		$storer_default = storer_get_default_theme_options();
		$home_section_reorder_value = get_theme_mod( 'home_section_reorder_value', $storer_default['home_section_reorder_value'] );
		$home_section_reorder_value = explode(",",$home_section_reorder_value );
		
		$paged_active = false;
		if ( !is_paged() ) {
			$paged_active = true;
		}

		foreach( $home_section_reorder_value as $home_section_reorder ){


			switch( $home_section_reorder ){

				case 'full_width_banner_section_settings':

					if( $paged_active ){
						do_action( 'storer_action_full_width_page_slider' );
					}

		        break;

		        case 'storer_featured_categories_section_settings':

		        	if( $paged_active ){
						do_action( 'storer_action_featured_category' );
					}

		        break;


				case 'storer_latest_product_section_settings':

					if( $paged_active ){
						do_action( 'storer_action_featured_product' );
					}

		        break;


				case 'storer_latest_blog_section_settings':

					if( $paged_active ){
						do_action( 'storer_action_latest_blog' );
					}

		        break;


		        case 'storer_features_section_settings':

		        	if( $paged_active ){
						do_action( 'storer_action_featrure_section' );
					}

		        break;

		        case 'storer_advertise_section_settings':

		        	if( $paged_active ){
						do_action( 'storer_action_featrure_advertise_section' );
					}

		        break;

		        case 'sidebar-widgets-front-page-fullwidth-sidebar':

					if ( $paged_active && is_active_sidebar('front-page-fullwidth-sidebar') ) { ?>
					    <div class=" ">
					        <?php dynamic_sidebar('front-page-fullwidth-sidebar'); ?>
					    </div>
					<?php }

		        break;

			}

		}
		
get_footer();