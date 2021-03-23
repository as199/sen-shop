<?php
if (!function_exists('storer_featured_advertise_section')) :
    /**
     * storer feature advertise section
     *
     * @since Storer 1.0.0
     *
     */
    function storer_featured_advertise_section() {
        if (1 != storer_get_option('show_advertise_feature_section')) {
            return null;
        }
        
        $advertise = array();

        for ($i = 0; $i <= 3; $i++) {
            $title = storer_get_option('store_features_title_' . $i);
            if (!empty($title)) {
                $advertise['features_' . $i][] = storer_get_option('show_advertise_image_section_' . $i);
                $advertise['features_' . $i][] = storer_get_option('storer_advertise_link_' . $i);
                $advertise['features_' . $i][] = storer_get_option('advertise_section_title_' . $i);

            }
        }

        ?>
            <div class="twp-advertise-section twp-section-border-top">
                <div class="twp-container">
                    <div class="twp-row twp-c-row twp-wrapper">
                        <?php if (isset($advertise)):
                            $col = count($advertise);
                            $count = 1;
                            foreach ($advertise as $advertises):
                                ?>
                                <div class="twp-col twp-col-6 twp-col-md-4">
                                    <div class="twp-post twp-post-style-4">
                                        <div class="twp-image-section image-350 twp-bg-hover-effect">
                                            <a href="<?php echo esc_url($advertises[1]); ?>"></a>
                                            <div class="twp-image bg-image  twp-image-overlay" style="background-image:url('<?php echo esc_url($advertises[0]); ?>')">
                                            </div>
                                            <div class="twp-desc">
                                                <h2 class="twp-text-uppercase"><?php echo esc_html($advertises[2]); ?></h2>
                                            </div>
                                            <div class="twp-arrow">
                                                <span></span>
                                                <i class="fa fa-long-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $count++;
                            endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        <?php
    }
endif;

add_action('storer_action_featrure_advertise_section', 'storer_featured_advertise_section', 10);
