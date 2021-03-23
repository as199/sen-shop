<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Storer
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('twp-archive-post twp-post'); ?>>
	<div class="twp-wrapper">
		<div class="twp-image-section image-350 twp-bg-hover-effect">
			<?php if (has_post_thumbnail()) {
				$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
				$url = $thumb['0']; ?>
					<a href="<?php the_permalink(); ?>"></a>
					<div class="twp-image bg-image" style="background-image:url('<?php echo esc_url($url); ?>')">
					</div>
			<?php } ?>
			<div class="twp-category">
				<?php storer_posted_categories(); ?>
			</div>
		</div>
		<div class="twp-desc">
			<header class="entry-header">
				<?php the_title( '<h3 class="entry-title twp-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div>
			<div class="entry-meta twp-meta-tag twp-meta-tag-secondary twp-d-flex">
				<?php
				storer_posted_on();
				storer_posted_by();
				?>
			</div><!-- .entry-meta -->
		</div><!-- .twp-desc -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->