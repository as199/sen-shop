<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Storer
 */

get_header();
?>

	<div id="content" class="site-content">
		<main id="primary" class="site-main">
	
			<?php
			while ( have_posts() ) :
				the_post();
	
				get_template_part( 'template-parts/content', 'single' );
	
				the_post_navigation(
					array(
						'prev_text' =>'<span class="twp-icon"><i class="fa fa-arrow-left"></i></span> <span class="twp-caption">' . esc_html__( 'Previous Post', 'storer' ) . '</span>',
						'next_text' => '<span class="twp-caption">' . esc_html__( 'Next Post', 'storer' ) . '</span> <span class="twp-icon"><i class="fa fa-arrow-right"></i></span>',
					)
				);
	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
	
			endwhile; // End of the loop.
			?>
	
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>

<?php
get_footer();
