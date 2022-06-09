<?php
/* Post Format : Video */
if( get_post_format() == "video" && (
	get_post_meta( get_the_ID(), 'minimag_cf_post_video_link', 1 ) != "" ||
	get_post_meta( get_the_ID(), 'minimag_cf_post_video_local', 1 ) != "" )
) {
	?>
	<div class="entry-cover">
		<?php
		if( get_post_meta( get_the_ID(), 'minimag_cf_post_video_source', 1 ) == "video_link" && get_post_meta( get_the_ID(), 'minimag_cf_post_video_link', 1 ) != "" ) {

			$oembed_width = '770';
			if( get_post_meta( get_the_ID(), 'minimag_cf_post_videowidth',1 ) != '' ) {
				$oembed_width = get_post_meta( get_the_ID(), 'minimag_cf_post_videowidth',1 );			
			}
			$url = esc_url( get_post_meta( get_the_ID(), 'minimag_cf_post_video_link', 1 ) );
			echo wp_oembed_get( $url, array( 'width' => $oembed_width ) );
			
		}
		elseif( get_post_meta( get_the_ID(), 'minimag_cf_post_video_source', 1 ) == "video_upload_local" && get_post_meta( get_the_ID(), 'minimag_cf_post_video_local', 1 ) != "" ) {
			?>
			<video controls>
				<source src="<?php echo esc_url( get_post_meta( get_the_ID(), 'minimag_cf_post_video_local', 1 ) ); ?>" type="video/mp4">
				<?php esc_html_e("Your browser does not support the video tag.","minimag"); ?>
			</video> 
			<?php
		}
		?>
	</div>
	<?php
}
?>