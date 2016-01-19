<?php 
/**
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="content">	

	<?php
	if (has_post_thumbnail()) {
		$background = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
		$background_url = $background[0];
	}
	?>

	<section>
		<header style="background-image: url('<?php echo $background_url ?>');">
			<h1 class="page-title"><?php the_title(); ?></h1>

		</header>
		<?php get_template_part( 'parts/icons' ); ?>



		<?php

						// check if the repeater field has rows of data
		if( have_rows('page_sections') ):

						 	// loop through the rows of data
			while ( have_rows('page_sections') ) : the_row(); ?>


		<article id="<?php the_sub_field('section_slug'); ?>">

			<?php 
			$image = get_sub_field('section_photo'); 
			 if( !empty($image)) { ?>

			<header style="background-image: url('<?php echo $image['url']; ?>');"></header>

			<?php } else { ?>

			<header class="empty"></header>

			<?php } ?>

			<div class="row">
				<div class="small-12 medium-10 medium-centered columns">

					<div class="content">

						<?php if(get_sub_field('page_section_title')) {
							echo '<h2>';
							the_sub_field('page_section_title'); 
							echo '</h2>';
						} ?>

					
						<?php if (get_sub_field('page_section_content') {
							
							the_sub_field('page_section_content'); 

						?>

						<?php if(get_field('pick_articles')) { 

							$posts = get_field('pick_articles');

						if( $posts ): ?>
						    
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <article>
						            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						            <p><?php the_excerpt();?></p>
						        </article>
						    <?php endforeach; ?>
						    
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>

						<?php } elseif(get_field('external_title')){ ?>

							<article>
								<h4>
									<a target="new" href="<?php the_field('external_link');?>">
										<?php the_field('external_title'); ?>
									</a>
								</h4>

								<p><?php the_field('external_summary') ?></p>
							</article>

						<?php } else {
							
						} ?>
					

				<?php 
					if(get_sub_field('read_more')){ ?> 

					<a class="button small" href="<?php the_sub_field('read_more'); ?>">Read More</a>

				<?php } elseif(get_sub_field('external_link')) { ?>

					<a target="new" href="<?php the_sub_field('external_link'); ?>"><?php the_sub_field('external_link_text') ?></a>

				<?php } elseif(get_sub_field('upload')) { ?>

				<a href="<?php the_sub_field('upload'); ?>"><i clas="fi-download"></i> <?php the_sub_field('external_link_text') ?></a>

				<?php } else { ?>

				<?php } ?>
				</div>

				

			</div>

			<nav class="top small-12 columns"><a href="#top"><i class="fi-arrow-up"></i> <small>Back To Top</small></a></nav>
		</div>

	</article>

	<?php endwhile;

	else :

						    // no rows found

		endif;

	?>


	<?php if(is_page('about')) { ?>


	<article id="team">

		<div class="row">
			<div class="small-12 medium-10 medium-centered columns">
				<div class="content">

				<h2>Team</h2>
				<p>Our dedicated team of experts at eSchool Media comprise over 325 years combined education industry experience!

</p>

	<?php

						// check if the repeater field has rows of data
	if( have_rows('team_sections') ):

						 	// loop through the rows of data
		while ( have_rows('team_sections') ) : the_row(); ?>


		
	

				
				<h4><?php the_sub_field('team_section_title'); ?></h4>

				

					<?php 

					$posts = get_sub_field('team_members');

					if( $posts ): ?>

						<div class="row medium-up-3">
						 <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						 <?php setup_postdata($post); ?>
						    <div class="column">
						    	<h5><?php the_title(); ?></h5>

						    	<h6><?php the_field('staff_title') ?></h6>

						    	<a class="button small" href="mailto:<?php the_sub_field('staff_email'); ?>"><i class="fi-mail"></i> Send Email</a>
						    </div>

						<?php endforeach; ?>
						</div>

						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>

				

					


	

<?php endwhile;

else :

						    // no rows found

	endif;

?>
</div>

			<nav class="top small-12 columns"><a href="#top"><i class="fi-arrow-up"></i> <small>Back To Top</small></a></nav>


	</div>

</article>

<article id="partners">
	<div class="row">
	<div class="small-12 medium-10 medium-centered columns">

		<div class="content">
	  <h2>Partners</h2>
	
	<div class="logo-slider">
	  <?php if( have_rows('logos', 'option') ): ?>


			<?php while( have_rows('logos', 'option') ): the_row(); ?>

			    <?php 

				$image = get_sub_field('logo_image');

				if( !empty($image) ): ?>

					<div>
						<div class="dummy"></div>

						<div class="image">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					</div>

					<?php endif; endwhile; ?>    

				<?php endif; ?>
			</div>
		</div>
	</div>
	</article>



</div>
</div>

</div>
</div>



<?php } ?>







</section>

</div> <!-- end #content -->

<?php get_footer(); ?>