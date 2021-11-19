<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h3 class="entry-title"><?php _e( 'Error 404 Page Not Found', 'twentytwenty' ); ?></h3>

		<div class="intro-text"><p><?php _e( '', 'twentytwenty' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'aria_label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
