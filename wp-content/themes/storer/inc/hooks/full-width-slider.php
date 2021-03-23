<?php
if (!function_exists('storer_full_width_slider')) :
    /**
     * Full Width Slider
     *
     * @since Storer 1.0.0
     *
     */
    function storer_full_width_slider()
    {
        if (1 != storer_get_option('show_full_width_slider_section')) {
            return null;
        }

        $storer_full_width_slider_page_list_array = array();
        for ($i = 1; $i <= 3 ; $i++) {
            $storer_full_width_slider_page_list = storer_get_option('storer_slider_page' . $i);
            if (!empty($storer_full_width_slider_page_list)) {
                $storer_full_width_slider_page_list_array[] = absint($storer_full_width_slider_page_list);
            }
        }
        
        // Bail if no valid pages are selected.
        if (empty($storer_full_width_slider_page_list_array)) {
            return;
        }
        /*page query*/
        $storer_full_width_slider_slider_args = array(
            'posts_per_page' => 3,
            'orderby' => 'post__in',
            'post_type' => 'page',
            'post__in' => $storer_full_width_slider_page_list_array,
        );

        $storer_full_width_slider_slider_query = new WP_Query($storer_full_width_slider_slider_args); ?>
        <div class="twp-banner-section">
            <div class="twp-banner-slider twp-slick">
                <?php 
                    $count = 1;
                    if ($storer_full_width_slider_slider_query->have_posts()) :
                        while ($storer_full_width_slider_slider_query->have_posts()) : $storer_full_width_slider_slider_query->the_post(); 
                            if (has_post_thumbnail()) {
                                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                                $url = $thumb['0'];
                            } else {
                                $url = NULL;
                            }?>
                            <div class="twp-wrapper">
                                <div class="twp-post twp-post-style-1">
                                    <div class="twp-image-section">
                                        <a href="#"></a>
                                        <div class="twp-image bg-image twp-overlay" style="background-image:url('<?php echo esc_url($url); ?>')">
                                        </div>
                                        <div class="twp-desc twp-text-<?php echo esc_html(storer_get_option('storer_page_caption_position'.$count)); ?>">
                                            <h2 class="twp-post-title"><a class=" "href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                                            <?php if (!empty (storer_get_option('storer_button_text' . $count))) { ?>
                                                <div class="twp-btn-section">
                                                    <a class="twp-btn twp-btn-with-icon twp-primary-btn" href="<?php echo esc_url(storer_get_option('storer_button_link' . $count)); ?>">
                                                        <span class="twp-caption"><?php echo esc_html(storer_get_option('storer_button_text' . $count)); ?></span>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $count++;
                        endwhile;
                        wp_reset_postdata();
                    endif; 
                ?>
            </div>
	    </div><!--/banner-section-->

        <?php
    }
endif;

add_action('storer_action_full_width_page_slider', 'storer_full_width_slider', 10);