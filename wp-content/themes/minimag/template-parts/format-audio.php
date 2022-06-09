<?php
if( get_post_format() == "audio" && ( get_post_meta( get_the_ID(), 'minimag_cf_post_audio_local', 1 ) != "" ||
		get_post_meta( get_the_ID(), 'minimag_cf_post_soundcloud_iframe',1 ) != ""
	) ) {
	?>
	<div class="entry-cover">
		<?php
		if( get_post_meta( get_the_ID(), 'minimag_cf_post_audio_source', 1 ) == "soundcloud_iframe" && get_post_meta( get_the_ID(), 'minimag_cf_post_soundcloud_iframe', 1 ) != "" ) {
			$oembed_width = '770';
			if( get_post_meta( get_the_ID(), 'minimag_cf_oembed_width',1 ) != '' ) {
				$oembed_width = get_post_meta( get_the_ID(), 'minimag_cf_oembed_width',1 );			
			}		
			$url = esc_url( get_post_meta( get_the_ID(), 'minimag_cf_post_soundcloud_iframe', 1 ) );
			echo wp_oembed_get( $url, array( 'width' => $oembed_width ) );
		}
		elseif( get_post_meta( get_the_ID(), 'minimag_cf_post_audio_source', 1 ) == "audio_upload_local" && get_post_meta( get_the_ID(), 'minimag_cf_post_audio_local', 1 ) != "" ) {
			?>
			<audio controls>
				<source src="<?php echo esc_url( get_post_meta( get_the_ID(), 'minimag_cf_post_audio_local', 1 ) ); ?>" type="audio/mpeg">
				<?php esc_html_e("Your browser does not support the audio element.","minimag"); ?>
			</audio>
			<?php
		}
		?>
	</div>
	<?php
}
?>