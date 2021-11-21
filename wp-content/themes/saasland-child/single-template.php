<?php



/** Template Name: New Release */


get_header();
?>


<?php



$args = array(



'post_type'=> 'Mitarbeiter'



);



$the_query = new WP_Query($args); ?>







<div class="new-release-page">

	<?php if ( $the_query->have_posts() ) : ?>



		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			

			<div class="new-movie">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <h4>Name - <?php the_field('name'); ?> </h4>
                <h4>Vorname - <?php the_field('vorname'); ?> </h4>
                <h4>Telephon- <?php the_field('telephon'); ?> </h4>
                <h4>Mail- <?php the_field('mail'); ?> </h4>
			</div>

		

		

		<?php endwhile; ?>







	<?php endif; ?>

</div>

<?php get_footer(); ?>
