<?php
/**
 * @package tookoo
 * @since tookoo 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			$thumbnail_media_id = get_post_meta( $post->ID, 'tookoo_img_detail_1', true );
			echo wp_get_attachment_image( $thumbnail_media_id, array( 138, 138 ) );  
		?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tookoo' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<p class="entry-price"><?php echo get_post_meta( $post->ID, 'tookoo_harga', true ); ?></p>
		<p class="entry-description"><?php echo get_post_meta( $post->ID, 'tookoo_deskripsi', true ); ?></p>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
