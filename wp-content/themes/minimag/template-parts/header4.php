<?php
if( minimag_options("opt_sticky_menu") != "0" ){
	$header_css = " header-fix";
}
else {
	$header_css = "";
}

$sicons = minimag_options("opt_social_icons");
if( $sicons != "" && $sicons[0]['textOne'] != "" ) {
	$md_css = "col-lg-4 col-6";
}
else {
	$md_css = "col-lg-6 no-social col-12";
}

?>
<!-- Header Section -->
<header class="container-fluid no-left-padding no-right-padding header_s header_s6<?php echo esc_attr($header_css); ?>">
	<!-- SidePanel -->
	<div id="slidepanel-1" class="slidepanel">
		<!-- Top Header -->
		<div class="container-fluid no-right-padding no-left-padding top-header">
			<!-- Container -->
			<div class="container">	
				<div class="row">
					<?php
					if( $sicons != "" && $sicons[0]['textOne'] != "" ) {
						?>
						<div class="col-lg-4 col-6">
							<ul class="top-social">
								<?php get_template_part("template-parts/social_icons"); ?>
							</ul>
						</div>
						<?php
					} ?>
					<div class="<?php echo esc_attr($md_css); ?> logo-block">
						<?php get_template_part("template-parts/topheaderlogo"); ?>
					</div>
					<div class="<?php echo esc_attr($md_css); ?>">
						<ul class="top-right user-info">
							<li>
								<a href="#search-box8" data-toggle="collapse" class="search collapsed" title="<?php esc_html_e('Search',"minimag"); ?>">
									<i class="pe-7s-search sr-ic-open"></i><i class="pe-7s-close sr-ic-close"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Top Header /- -->				
	</div><!-- SidePanel /- -->
	
	<!-- Container -->
	<div class="container">	
		<!-- Menu Block -->
		<div class="container-fluid no-left-padding no-right-padding menu-block">
			<div class="nav-wrapper"><!-- Nav Wrapper -->
				<nav class="navbar ownavigation stickywrapper navbar-expand-lg">
					<div class="navheader">
						<?php get_template_part("template-parts/sitelogo"); ?>
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar8" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars"></i>
						</button>
						<div id="loginpanel-1" class="desktop-hide">
							<div class="right toggle" id="toggle-1">
								<a id="slideit-1" class="slideit" href="#slidepanel"><i class="fo-icons fa fa-briefcase"></i></a>
								<a id="closeit-1" class="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
							</div>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="navbar8">
						<?php
						if( has_nav_menu('minimag_primary') ) {
							wp_nav_menu( array(
								'theme_location' => 'minimag_primary',
								'container' => false,
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth' => 10,
								'menu_class' => 'navbar-nav',
								'walker' => new minimag_nav_walker
							));
						}
						else {
							?>
							<h3 class="menu-setting-info">
								<a href="<?php echo esc_url( admin_url("/nav-menus.php") ); ?>"><?php esc_html_e( 'Set The Menu', "minimag" );?></a>
							</h3>
							<?php
						}
						?>
					</div>
				</nav>
			</div><!-- Nav Wrapper /- -->
		</div><!-- Menu Block /- -->
	</div><!-- Container /- -->
	<!-- Search Box -->
	<div class="search-box collapse" id="search-box8">
		<div class="container">
			<?php get_search_form(); ?>
		</div>
	</div><!-- Search Box /- -->
</header><!-- Header Section /- -->