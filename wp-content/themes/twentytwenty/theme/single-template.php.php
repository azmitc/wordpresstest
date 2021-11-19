<?php



/** Template Name: New Release */


get_header();
?>


<?php



$args = array(



'post_type'=> 'auto'



);



$the_query = new WP_Query($args); ?>







<div class="new-release-page">

	<?php if ( $the_query->have_posts() ) : ?>



		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		

			<div class="card">
			

              <span>  Name : <?php the_field('name'); ?> </span><br>
			  <span> Vorname : <?php the_field('vorname'); ?> </span><br>
                <span>Telephon : <?php the_field('telephon'); ?> </span><br>
               <span> Mail :  <?php the_field('mail'); ?></span>
				<div class="item">
      <img src="<?php the_field('bildurl'); ?>">
    </div>
			</div>

		

		

		<?php endwhile; ?>







	<?php endif; ?>

</div>

<style>
	.new-release-page{

		display:flex;
		flex-direction: column;
		justify-content: space-between;
		align-items : center ;
	}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


</style>



<?php get_footer(); ?>