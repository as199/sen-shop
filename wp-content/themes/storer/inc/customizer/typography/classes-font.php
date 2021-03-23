<?php
/**
* Fonts Classes.
*
* @package Storer
*/

if ( ! class_exists( 'Storer_Fonts' ) ) :
	class Storer_Fonts {


		/**
		 * Font Lists
		 */
		public static function storer_get_fonts( $font_type = false ){

			$font_lists = array(
				'Alegreya Sans' => 'Alegreya Sans',
				'Alegreya' => 'Alegreya',
				'Archivo' => 'Archivo',
				'Arial' => 'Arial',
				'Cabin' => 'Cabin',
				'DM Sans' => 'DM Sans',
				'EB Garamond' => 'EB Garamond',
				'Exo 2' => 'Exo 2',
				'Fira Sans' => 'Fira Sans',
				'Georgia' => 'Georgia',
				'Heebo' => 'Heebo',
				'Helvetica' => 'Helvetica',
				'IBM Plex Sans' => 'IBM Plex Sans',
				'IBM Plex Serif' => 'IBM Plex Serif',
				'Josefin Sans' => 'Josefin Sans',
				'Lato' => 'Lato',
				'Libre Baskerville' => 'Libre Baskerville',
				'Libre Franklin',
				'Literata' => 'Literata',
				'Lora' => 'Lora',
				'Merriweather Sans' => 'Merriweather Sans',
				'Merriweather' => 'Merriweather',
				'Montserrat' => 'Montserrat',
				'Muli' => 'Muli',
				'Neuton' => 'Neuton',
				'Noto Sans' => 'Noto Sans',
				'Nunito Sans' => 'Nunito Sans',
				'Nunito' => 'Nunito',
				'Open Sans' => 'Open Sans',
				'Poppins' => 'Poppins',
				'PT Sans Caption' => 'PT Sans Caption',
				'PT Sans' => 'PT Sans',
				'PT Serif Caption' => 'PT Serif Caption',
				'PT Serif' => 'PT Serif',
				'Playfair Display' => 'Playfair Display',
				'Quattrocento Sans' => 'Quattrocento Sans',
				'Quattrocento' => 'Quattrocento',
				'Roboto Condensed' => 'Roboto Condensed',
				'Roboto Mono' => 'Roboto Mono',
				'Roboto Slab' => 'Roboto Slab',
				'Roboto' => 'Roboto',
				'Rubik' => 'Rubik',
				'Source Sans Pro' => 'Source Sans Pro',
				'Source Serif Pro' => 'Source Serif Pro',
				'Titillium Web' => 'Titillium Web',
				'Ubuntu' => 'Ubuntu',
				'Vollkorn' => 'Vollkorn',
				'Work Sans' => 'Work Sans',
				
			);

			if( $font_type ){

				$font_lists = array_merge( $font_lists, array(
					'Abril Fatface' => 'Abril Fatface',
					'Anton' => 'Anton',
					'Bitter' => 'Bitter',
					'Bree Serif' => 'Bree Serif',
					'Domine' => 'Domine',
					'Fjalla One' => 'Fjalla One',
					'Josefin Slab' => 'Josefin Slab',
					'Patua One' => 'Patua One',
					'Playfair Display SC' => 'Playfair Display SC',
					'Playfair Display' => 'Playfair Display',
					'Questrial' => 'Questrial',
					'Righteous' => 'Righteous',
					'Teko' => 'Teko',
					'Zilla Slab' => 'Zilla Slab',
				) );

			}

			return $font_lists;

		}

		/**
		 * Font Lists Wigh Property
		 */
		public static function storer_get_fonts_property( $font ) {

			$fonts = array(

					'Alegreya Sans' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
						),
						'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Alegreya' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Archivo' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Arial' => array(
						'weight' => array(
					   	),
					   	'languages' => array(
						),
					),
					'Cabin' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Cabin' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'DM Sans' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'EB Garamond' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Exo 2' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Fira Sans' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Georgia' => array(
						'weight' => array(
					   	),
					   	'languages' => array(
						),
					),
					'Heebo' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
						),
					   	'languages' => array(
					   		'hebrew' => 'Hebrew',
							'latin' => 'Latin',
						),
					),
					'Helvetica' => array(
						'weight' => array(
					   	),
					   	'languages' => array(
						),
					),
					'IBM Plex Sans' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
						),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'IBM Plex Serif' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
						),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Josefin Sans' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Lato' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Libre Baskerville' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Libre Franklin' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Literata' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Lora' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Merriweather Sans' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Merriweather' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Montserrat' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Muli' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Neuton' => array(
						'weight' => array(
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Noto Sans' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'devanagari' => 'Devanagari',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Nunito Sans' => array(
						'weight' => array(
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Nunito' => array(
						'weight' => array(
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Open Sans' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
                    'Poppins' => array(
						'weight' => array(
                            '100'  => esc_html__( 'Thin 100', 'storer' ),
                            '100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
                            '200'  => esc_html__( 'Extra Light 200', 'storer' ),
                            '200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
                            '300'  => esc_html__( 'Light 300', 'storer' ),
                            '300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
                            '500'  => esc_html__( 'Medium 500', 'storer' ),
                            '500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
                            '900'  => esc_html__( 'Black 900', 'storer' ),
                            '900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
                            'devanagari' => 'Devanagari',
						),
					),
					'PT Sans Caption' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'PT Sans' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'PT Serif Caption' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'PT Serif' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Playfair Display' => array(
						'weight' => array(				
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Quattrocento Sans' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Quattrocento' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Roboto Condensed' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Roboto Mono' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Roboto Slab' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Roboto' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
						),
						'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Rubik' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'hebrew' => 'Hebrew',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Source Sans Pro' => array(
						'weight' => array(
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Source Serif Pro' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Titillium Web' => array(
						'weight' => array(
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'200i' => esc_html__( 'Extra Light 200 Italic', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Ubuntu' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Vollkorn' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'cyrillic-ext' => 'Cyrillic Extended',
							'greek' => 'Greek',
							'greek-ext' => 'Greek Extended',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Work Sans' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'200'  => esc_html__( 'Extra Light 200', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Abril Fatface' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Anton' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Bitter' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Bree Serif' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Domine' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Fjalla One' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Josefin Slab' => array(
						'weight' => array(
							'100'  => esc_html__( 'Thin 100', 'storer' ),
							'100i' => esc_html__( 'Thin 100 Italic ', 'storer' ),
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
						),
					),
					'Patua One' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
						),
					),
					'Playfair Display SC' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Playfair Display' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'800i' => esc_html__( 'Extra Bold 800 Italic', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
							'900i' => esc_html__( 'Black 900 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'cyrillic' => 'Cyrillic',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
							'vietnamese' => 'Vietnamese',
						),
					),
					'Questrial' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
						),
					),
					'Righteous' => array(
						'weight' => array(
							'400'  => esc_html__( 'Regular 400', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Teko' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'800'  => esc_html__( 'Extra Bold 800', 'storer' ),
							'900'  => esc_html__( 'Black 900', 'storer' ),
					   	),
					   	'languages' => array(
							'devanagari' => 'Devanagari',
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
					'Zilla Slab' => array(
						'weight' => array(
							'300'  => esc_html__( 'Light 300', 'storer' ),
							'300i' => esc_html__( 'Light 300 Italic', 'storer' ),
							'400'  => esc_html__( 'Regular 400', 'storer' ),
							'400i' => esc_html__( 'Regular 400 Italic', 'storer' ),
							'500'  => esc_html__( 'Medium 500', 'storer' ),
							'500i' => esc_html__( 'Medium 500 Italic', 'storer' ),
							'600'  => esc_html__( 'Semi Bold 600', 'storer' ),
							'600i' => esc_html__( 'Semi Bold 600 Italic', 'storer' ),
							'700'  => esc_html__( 'Bold 700', 'storer' ),
							'700i' => esc_html__( 'Bold 700 Italic', 'storer' ),
					   	),
					   	'languages' => array(
							'latin' => 'Latin',
							'latin-ext' => 'Latin Extended',
						),
					),
			);

			return $fonts[$font];

		}

		/**
		 * Font URL Return
		 */
		public static function storer_get_fonts_url( $font_type = false ){

			$storer_default = storer_get_default_theme_options();
			$storer_content_font = storer_get_option( 'storer_content_font',$storer_default['storer_content_font'] );
			$storer_heading_font = storer_get_option( 'storer_heading_font',$storer_default['storer_heading_font'] );

			$body_fonts_property = Storer_Fonts::storer_get_fonts_property( $storer_content_font );
			$headings_fonts_property = Storer_Fonts::storer_get_fonts_property( $storer_heading_font );

			$body_font_weight_lists = '';
			if( $body_fonts_property['weight'] ){
				foreach( $body_fonts_property['weight'] as $key => $weight ){

					$body_font_weight_lists .= $key.',';

				}
			}
			if( $body_font_weight_lists ){
				$body_font_weight_lists = rtrim( $body_font_weight_lists,',' );
			}

			$headings_font_weight_lists = '';
			if( $headings_fonts_property['weight'] ){
				foreach( $headings_fonts_property['weight'] as $key => $weight ){

					$headings_font_weight_lists .= $key.',';

				}
			}

			if( $headings_font_weight_lists ){
				$headings_font_weight_lists = rtrim( $headings_font_weight_lists,',' );
			}

			$body_font_language_lists = '';
			if( $body_fonts_property['weight'] ){
				foreach( $body_fonts_property['languages'] as $key => $languages ){

					$body_font_language_lists .= $key.',';

				}
			}

			if( $body_font_language_lists ){
				$body_font_language_lists = rtrim( $body_font_language_lists,',' );
			}

			$headings_font_language_lists = '';
			if( $headings_fonts_property['weight'] ){
				foreach( $headings_fonts_property['languages'] as $key => $languages ){

					if( !array_key_exists( $key, $body_fonts_property['languages'] ) ){
						$headings_font_language_lists .= $key.',';
					}

				}
			}

			$languages = $body_font_language_lists.','.$headings_font_language_lists;

			if( $languages ){
				$languages = rtrim( $languages,',' );
				$languages = ltrim( $languages,',' );
			}

			$fonts_url = '';
	        $fonts = array();

	        if( $storer_content_font != 'Georgia' && $storer_content_font != 'Helvetica' && $storer_content_font != 'Arial' ){

		        if( $storer_content_font == $storer_heading_font ){
			        $storer_font_1 = $storer_content_font.':'.$body_font_weight_lists.'&display=swap'.'&subset='.$languages;
			    }else{
			    	$storer_font_1 = $storer_content_font.':'.$body_font_weight_lists;
			    }

		        
			}

			if( $storer_content_font != $storer_heading_font && $storer_heading_font != 'Georgia' && $storer_heading_font != 'Helvetica' && $storer_content_font != 'Arial' ){
		        $storer_font_2 = $storer_heading_font.':'.$headings_font_weight_lists;
		    }

	        $storer_fonts = array();
	        if( $storer_content_font != 'Georgia' && $storer_content_font != 'Helvetica' && $storer_content_font != 'Arial' ){
		        $storer_fonts[] = $storer_font_1;
		    }

		    if( $storer_heading_font != 'Georgia' && $storer_heading_font != 'Helvetica' && $storer_content_font != 'Arial' ){
		        if( $storer_content_font != $storer_heading_font ){
			        $storer_fonts[] = $storer_font_2.'&display=swap'.'&subset='.$languages;
			    }
			}

	        $storer_fonts_stylesheet = '//fonts.googleapis.com/css?family=';

	        $i = 0;
	        for ( $i = 0; $i < count( $storer_fonts ); $i++ ) {

	            if ( 'off' !== sprintf( _x( 'on', '%s font: on or off', 'storer' ), $storer_fonts[$i] ) ) {
	                $fonts[] = $storer_fonts[$i];
	            }

	        }

	        if ( $fonts ) {
	            $fonts_url = add_query_arg( array(
	                'family' => urldecode( implode( '|', $fonts ) ),
	            ), 'https://fonts.googleapis.com/css' );
	        }

	        return esc_url_raw($fonts_url);

		}

	}
endif;