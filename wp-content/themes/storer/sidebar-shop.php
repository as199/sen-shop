<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storer
 */

if ( ! is_active_sidebar( 'shop-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'shop-sidebar' ); ?>
</aside><!-- #secondary -->