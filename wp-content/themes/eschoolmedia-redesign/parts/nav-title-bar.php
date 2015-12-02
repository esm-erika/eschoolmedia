<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left show-for-<?php echo $breakpoint ?>">
		<div class="row">
		<div class="medium-4 columns">
				<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>"/>
		</div>
		<div class="medium-12 columns">
			<?php joints_top_nav(); ?>
		</div>
	</div>
	</div>
</div>