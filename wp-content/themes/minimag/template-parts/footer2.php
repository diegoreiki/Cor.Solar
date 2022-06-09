<!-- Footer Main -->
<footer class="container-fluid no-left-padding no-right-padding footer-main footer-section1 footer-dark">
	<?php
	//get_template_part("template-parts/instagram-gallery");
	
	if( is_active_sidebar("sidebar-7") ||
		is_active_sidebar("sidebar-8") ||
		is_active_sidebar("sidebar-9") ||
		is_active_sidebar("sidebar-10")
	) {
		?>
		<!-- Footer Widget -->
		<div class="container-fluid no-left-padding no-right-padding footer-widget">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<?php
					if(is_active_sidebar("sidebar-7") ) {
						?>
						<div class="col-lg-3 col-sm-6">
							<?php dynamic_sidebar("sidebar-7") ?>
						</div>
						<?php
					}
					if(is_active_sidebar("sidebar-8") ) {
						?>
						<div class="col-lg-3 col-sm-6">
							<?php dynamic_sidebar("sidebar-8") ?>
						</div>
						<?php
					}
					if(is_active_sidebar("sidebar-9") ) {
						?>
						<div class="col-lg-3 col-sm-6">
							<?php dynamic_sidebar("sidebar-9") ?>
						</div>
						<?php
					}
					if(is_active_sidebar("sidebar-10") ) {
						?>
						<div class="col-lg-3 col-sm-6">
							<?php dynamic_sidebar("sidebar-10") ?>
						</div>
						<?php
					}
					?>
				</div>
			</div><!-- Container -->
		</div><!-- Footer Widget -->
		<?php
	}
	?>

	<!-- Container -->
	<div class="container">
		
		<?php		
		get_template_part("template-parts/footersocial_icons");

		if( has_nav_menu('minimag_footer') ) {
			?>
			<nav class="navbar ownavigation footer-menu navbar-expand-lg">
				<div class="navheader">
					<button class="navbar-toggler navbar-toggler-center" type="button" data-toggle="collapse" data-target="#navbar-footer" aria-controls="navbar-footer" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-footer">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'minimag_footer',
						'container' => false,
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth' => 10,
						'menu_class' => 'navbar-nav',
						'walker' => new minimag_nav_walker
					));
					?>
				</div>
			</nav>
			<?php
		}
		?>
		<div class="copyright">
			<?php
			if( minimag_options("opt_footer_copyright") != "" && function_exists('minimag_copyright') ) {
				echo minimag_copyright();
			}
			else {
				?><p>
					<?php esc_html_e('Copyright &copy;',"minimag"); ?>
					<?php echo date('Y '); ?>
					<?php esc_html_e('MINIMAG',"minimag"); ?>
				</p>
				<?php
			}
			?>
		</div>
	</div><!-- Container /- -->
</footer><!-- Footer Main /- -->