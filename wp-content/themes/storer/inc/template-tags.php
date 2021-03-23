<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Storer
 */

if ( ! function_exists( 'storer_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function storer_posted_on() { ?>
		<div class="item-metadata posts-date">
            <span class="twp-icon"><i class="fa fa-calendar-o"></i></span>
            <span class="twp-caption"><?php the_time(get_option('date_format')); ?></span>
        </div>
	<?php }
endif;

if ( ! function_exists( 'storer_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function storer_posted_by() {
		global $post;
		$author_id = $post->post_author; ?>
		<div class="item-metadata posts-author byline">
			<span class="twp-icon"><i class="fa fa-user"></i></span>
			<span class="twp-caption">
				<a href="<?php echo esc_url(get_author_posts_url($author_id)) ?>">
					<?php echo esc_html(get_the_author_meta('display_name', $author_id)); ?>
				</a>
			</span>
		</div>
	<?php }
endif;

if (!function_exists('storer_posted_categories')) :
    function storer_posted_categories($separator = '&nbsp')
    {

        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {

            global $post;

            $post_categories = get_the_category($post->ID);
            if ($post_categories) {
                $output = '<ul class="meta-cat-links">';
                foreach ($post_categories as $post_category) {

                    // retrieve the existing value(s) for this meta field. This returns an array

                    $output .= '<li class="meta-category">
                             <a class="twp-categories" href="' . esc_url(get_category_link($post_category)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'storer'), $post_category->name)) . '"> 
                                 ' . esc_html($post_category->name) . '
                             </a>
                        </li>';
                }
                $output .= '</ul>';
                echo $output;

            }
        }
    }
endif;

if ( ! function_exists( 'storer_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function storer_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'storer' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links twp-links"><span class="twp-icon"><i class="fa fa-folder"></i></span>' . esc_html__( '%1$s', 'storer' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'storer' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links twp-links"><span class="twp-icon"><i class="fa fa-tag"></i></span>' . esc_html__( '%1$s', 'storer' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link twp-links"><span class="twp-icon"><i class="fa fa-comments"></i></span>';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'storer' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'storer' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link twp-links"><span class="twp-icon"><i class="fa fa-pencil"></i></span>',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'storer_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function storer_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
