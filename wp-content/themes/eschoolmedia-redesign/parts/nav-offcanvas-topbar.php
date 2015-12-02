<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="fixed">

<div class="top-bar" id="top-bar-menu" data-magellan>
	<div class="row">
		<div class="medium-4 columns">
				<a href="<?php site_url(); ?>"><img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>"/></a>
		</div>
		<div class="medium-8 columns">
			<?php joints_top_nav(); ?>
		</div>
	</div>
</div>



<div class="top-bar-right float-right show-for-small-only">
	<ul class="menu">
		<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
		<li><a data-toggle="off-canvas">Menu</a></li>
	</ul>
</div>

</div>

