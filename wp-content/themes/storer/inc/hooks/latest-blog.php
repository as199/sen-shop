<?php
if (!function_exists('storer_latest_blog_section')) :
    /**
     * Latest Blog
     *
     * @since Storer 1.0.0
     *
     */
    
    function storer_latest_blog_section()
    {
    	if (1 != storer_get_option('show_latest_blog_section')) {
    	    return null;
    	} ?>
    	
		<div class="twp-latest-post-section">
			<div class="twp-container">
				<?php if (!empty(storer_get_option('latest_blog_title'))) { ?>
					<h2 class="twp-section-title  twp-text-center">
						<?php echo esc_html(storer_get_option('latest_blog_title'));?>
					</h2>
				<?php } ?>
				<?php
					$storer_latest_post_categories = absint(storer_get_option('latest_blog_categories'));
					$storer_latesT_post_args = array(
						'post_type' => 'post',
						'posts_per_page' =>  6,
						'ignore_sticky_posts' => 1,
						'orderby' => 'date',
						'cat' => absint($storer_latest_post_categories),
					);
				$storer_latest_posts = new WP_Query($storer_latesT_post_args); ?>
				<div class="twp-post-list">
					<div class="twp-row twp-c-row">
						<?php if($storer_latest_posts->have_posts()):?>
							<?php while ($storer_latest_posts->have_posts()):$storer_latest_posts->the_post();?>
								<div class="twp-col twp-col-6 twp-col-lg-4">
									<div class="twp-post twp-post-style-3">
										<div class="twp-image-section image-250 twp-bg-hover-effect">
											<?php if(has_post_thumbnail()){
												$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
												$url = $thumb['0'];
											}
											else{
												$url = '';
											}
											?>
											<a href="<?php the_permalink(); ?>"></a>
											<div class="twp-image bg-image" style="background-image:url('<?php echo esc_url($url); ?>')">
											</div>
										</div>
										<div class="twp-desc">
											<h3 class="twp-post-title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h3>
											<?php the_excerpt();?>
											<div class="twp-meta-tag twp-d-flex twp-font-weight-semi-bold">
												<?php
													storer_posted_by();
													storer_posted_on();
												?>
											</div>
										</div>
										<div>
										</div>
									</div>
								</div>
							<?php endwhile;wp_reset_postdata();?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
    <?php }
endif;

add_action('storer_action_latest_blog', 'storer_latest_blog_section', 10);	