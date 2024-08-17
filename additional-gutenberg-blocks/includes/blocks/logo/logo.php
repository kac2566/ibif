<?php
/**
 * Theme-switcher Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$logo = get_field( 'logo' );
$width = get_field( 'width' );
$height = get_field( 'height' );
$logoUrl = get_field( 'logo_url');

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'website-logo';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>">
    <a href="<?= $logoUrl ?>">
        <img src="<?php echo $logo['url'] ?>" alt="<?= $logo['alt'] ?>" height="<?= $height ?>" width="<?= $width ?>" />
    </a>
</div>