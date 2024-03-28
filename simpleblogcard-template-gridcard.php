<?php
/**
 * Simple Blog Card Template File
 *
 * @package WordPress
 * @subpackage Simple Blog Card
 * @since Simple Blog Card 2.00
 */

/**
 * Grid Card template for Simple Blog Card plugin.
 *
 * Note: Image size ($imgsize) parameter not support.
 *
 * @version 1.0.4
 *
 * @since 1.0.2
 * @since 1.0.3 Modified CSS and split common CSS into file.
 * @since 1.0.4 Modified CSS.
 */
?>
<?php $hash = md5( $url ); ?>
<style>
.simpleblogcard-template-gridcard-<?php echo esc_html( $hash ); ?> {
	border-<?php echo esc_attr( $settings['border_pos'] ); ?>: solid <?php echo esc_attr( $settings['color_width'] ); ?>px <?php echo esc_attr( $settings['color'] ); ?>;
}
.simpleblogcard-template-gridcard-<?php echo esc_html( $hash ); ?> .card-image {
	grid-column: <?php echo ( 'left' === $settings['img_pos'] ) ? '1 / span 2' : '4 / span 2'; ?>;
	order: <?php echo ( 'left' === $settings['img_pos'] ) ? '1' : '2'; ?>;
}
.simpleblogcard-template-gridcard-<?php echo esc_html( $hash ); ?> .card-content {
	grid-column: <?php echo $img ? ( 'left' === $settings['img_pos'] ? '3 / span 3' : '1 / span 3' ) : '1 / 5'; ?>;
	order: <?php echo ( 'left' === $settings['img_pos'] ) ? '2' : '1'; ?>;
}
.simpleblogcard-template-gridcard-<?php echo esc_html( $hash ); ?> .card-title {
	line-height: <?php echo esc_attr( $settings['t_line_height'] ); ?>%;
}
.simpleblogcard-template-gridcard-<?php echo esc_html( $hash ); ?> .card-description {
	line-height: <?php echo esc_attr( $settings['d_line_height'] ); ?>%;
}
</style>
<div class="simpleblogcard-template-gridcard">
	<?php if ( $settings['target_blank'] ) : ?>
		<a style="text-decoration: none;" href=<?php echo esc_url( $url ); ?> target="_blank" rel="noopener">
	<?php else : ?>
		<a style="text-decoration: none;" href=<?php echo esc_url( $url ); ?>>
	<?php endif; ?>
		<div class="card simpleblogcard-template-gridcard-<?php echo esc_html( $hash ); ?>">
			<?php if ( $img ) : ?>
				<figure class="card-image">
					<img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
				</figure>
			<?php endif; ?>
			<div class="card-content">
				<p class="card-host"><?php echo esc_html( $host ); ?></p>
				<p class="card-title"><?php echo esc_html( $title ); ?></p>
				<?php if ( $settings['dessize'] > 0 ) : ?>
					<div class="card-description">
						<?php echo esc_html( $description ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</a>
</div><!-- /.simpleblogcard-template-gridcard -->
