					<footer class="footer" role="contentinfo">
						<div id="inner-footer">
							<div class="row">
								<div class="medium-3 columns">
									<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>"/>
								</div>
								<div class="medium-3 columns text-right social">
										<a href="#"><i class="fi-social-facebook"></i></a>
										<a href="#"><i class="fi-social-twitter"></i></a>
										<a href="#"><i class="fi-social-linkedin"></i></a>
								</div>
							</div>
						</div> <!-- end #inner-footer -->

						<div id="copyright">
							<div class="row">					
								<nav class="small-12 medium-6 columns text-left" role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>

								<div class="small-12 medium-6 columns text-right">
									<div class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</div>
								</div>
							</div> 
						</div> <!-- end #copyright -->

					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>

		<script src='<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scripts/jquery.scrollto.js'></script>
		<script>
			$(document).ready(function(){

				$("nav a").click(function(evn){
		            evn.preventDefault();
		            $('html,body').scrollTo(this.hash, this.hash); 
		        });

			});
		</script>
	</body>
</html> <!-- end page -->