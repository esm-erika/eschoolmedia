<?php get_header(); ?>
			
	<div id="content">

		<?php

		$args = array(
			'post_type' => 'sections',
			'order' => 'ASC'

		);

		$the_query = new WP_Query($args); 
			?>


		<?php // The Loop
		while ( $the_query->have_posts() ) :
			$the_query->the_post(); ?>

		<?php
			if (has_post_thumbnail()) {
				$background = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
				$background_url = $background[0];
			}
			?>

			<section id="<?php the_ID(); ?>" style="background-image: url('<?php echo $background_url ?>');">

				<div class="content">
					<div class="row">
						<div class="medium-12 columns">
							<h1 class="section-title text-center"><?php the_title(); ?></h1>
							<h4 class="sub-title text-center"><?php the_field('sub_header'); ?></h4>
						</div>
					</div>

					<?php get_template_part( 'parts/icons' ); ?>

				</div>

			</section>

		<?php endwhile; 
		wp_reset_postdata(); ?>
	
	</div> <!-- end #content -->

<?php get_footer(); ?>