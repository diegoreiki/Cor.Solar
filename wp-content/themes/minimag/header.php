<?php
/**
 * The Header for our theme
 *
 *
 * @package WordPress
 * @subpackage Minimag
 * @since Minimag 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css?v=3">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php	
	if( minimag_options('opt_siteloader') == 1 ) {
		get_template_part('template-parts/siteloader');
	}
	$pheader_type = get_post_meta( minimag_get_the_ID(), 'minimag_cf_header_layout', true );
	$header_type = minimag_options('opt_headertype');
	if( $pheader_type != '' ) {
		$hdr_type = $pheader_type;
	}
	elseif( $header_type != '' ) {
		$hdr_type = $header_type;
	}
	else {
		$hdr_type = '1';
	}
	get_template_part('template-parts/header' . $hdr_type );

	/* Page Header */
	$pagetitle = '';
	$pagetitle = get_post_meta( minimag_get_the_ID(), 'minimag_cf_pageheader_onoff', true );

	if( minimag_options('opt_pageheader_onoff') != 'disable' && $pagetitle != "disable" ) {

		$headerimage = '';
		$category_terms = get_the_category();
		$term_id = '';
		if ( ! empty( $category_terms ) ) {
			$term_id = $category_terms[0]->term_id;
		}
		if( is_category() && $term_id != '' && get_term_meta( $term_id, 'minimag_term_cat_image', true ) != '' ) {
			$headerimage = get_term_meta( $term_id, 'minimag_term_cat_image', true );
		}
		elseif( get_post_meta( minimag_get_the_ID(), 'minimag_cf_pageheader_img', true ) != '' ) {
			$headerimage = get_post_meta( minimag_get_the_ID(), 'minimag_cf_pageheader_img', true );
		}
		elseif( minimag_options('opt_pageheader_img') != '' ) {
			$headerimage = minimag_options('opt_pageheader_img','url');
		}

		$bannerimage = '';
		if( $headerimage != '' ) {
			$bannerimage = ' style="background-image: url('.$headerimage.');"';
		}
		?>
		<div class="container-fluid custombg_overlay page-banner"<?php echo html_entity_decode( $bannerimage ); ?>>
			<div class="container">
				<h1 class="bannertitle">
					<?php
					if( is_home() ) {
						esc_html_e( 'Blog', "minimag" );
					}
					elseif( is_404() ) {
						esc_html_e( 'Page Not Found', "minimag" );
					}
					elseif( is_search() ) {
						printf( esc_html__( 'Search Results for: %s', "minimag" ), get_search_query() );
					}
					elseif( is_category() || is_tag() ) {
						single_tag_title();
					}
					elseif( is_archive() ) {
						the_archive_title();
					}
					else {
						the_title();
					}
					?>
				</h1>
				<?php
				if( function_exists( 'bcn_display' ) ) {
					?>
					<div class="breadcrumb">
						<?php bcn_display(); ?>
					</div>
					<?php
				} ?>
			</div>
		</div>
		<?php
	}
	?>