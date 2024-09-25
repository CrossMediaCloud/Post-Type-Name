<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$post      = get_post_type( get_the_ID() );
$post_type = get_post_type_object( $post );
$post_type_name = $post_type->labels->singular_name;
$post_type_slug = $post_type->name;

$prefix = '';
if ( isset( $attributes['prefix'] ) && $attributes['prefix'] ) {
	$prefix = '<span class="wp-block-post-type-name__prefix">' . $attributes['prefix'] . '</span>';
}

$suffix = '';
if ( isset( $attributes['suffix'] ) && $attributes['suffix'] ) {
	$suffix = '<span class="wp-block-post-type-name__suffix">' . $attributes['suffix'] . '</span>' . $suffix;
}

$extra_attributes = array(
	'class' => sanitize_title( 'post-type-' . $post_type_slug ),
);
?>

<p <?php echo get_block_wrapper_attributes( $extra_attributes ); ?>>
	<?php
	echo wp_kses_post( $prefix );
	echo wp_kses_post( $post_type_name );
	echo wp_kses_post( $suffix );
	?>
</p>
