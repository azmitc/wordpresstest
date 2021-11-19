<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package saasland
 */

get_header();
$opt = get_option( 'saasland_opt' );
$is_related = !empty($opt['is_related_posts']) ? $opt['is_related_posts'] : '';
$blog_column = is_active_sidebar( 'sidebar_widgets' ) ? '8' : '12';
$elementor_library = isset($_GET['elementor_library']) ? $_GET['elementor_library'] : '';
$is_single_post_date = isset ($opt['is_single_post_date']) ? $opt['is_single_post_date'] : '1';
?>

<?php
if ( isset($_GET['elementor_library']) ) :
    custom_post_types_get_custom_template();
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        </div>
        <?php get_sidebar() ?>

    </div>
    </div>
    </section>

<?php endif; ?>

<?php
get_footer();