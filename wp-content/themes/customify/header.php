<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PR8RKCR');</script>
<!-- End Google Tag Manager -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR8RKCR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
<div id="page" <?php customify_site_classes(); ?>>
	<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'customify' ); ?></a>
	<?php
	do_action( 'customify/site-start/before' );
	if ( ! customify_is_e_theme_location( 'header' ) ) {
		/**
		 * Site start
		 *
		 * Hooked
		 *
		 * @see customify_customize_render_header - 10
		 * @see Customify_Page_Header::render - 35
		 */
		do_action( 'customify/site-start' );
	}
	do_action( 'customify/site-start/after' );

	/**
	 * Hook before main content
	 *
	 * @since 0.2.1
	 */
	do_action( 'customify/before-site-content' );
	?>
	<div id="site-content" <?php customify_site_content_class(); ?>>
		<div <?php customify_site_content_container_class(); ?>>
			<div <?php customify_site_content_grid_class(); ?>>
				<main id="main" <?php customify_main_content_class(); ?>>
					<?php do_action( 'customify/main/before' ); ?>
