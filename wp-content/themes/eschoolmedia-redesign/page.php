<?php get_header(); ?>
	
	<div id="content">	

		<?php
			if (has_post_thumbnail()) {
				$background = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
				$background_url = $background[0];
			}
			?>

		<section id="<?php the_ID(); ?>">
			<header style="background-image: url('<?php echo $background_url ?>');">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
			<article class="row">
					<div class="medium-12 columns">

					</div>
			</article>

		</section>
			
	</div> <!-- end #content -->

<?php get_footer(); ?>