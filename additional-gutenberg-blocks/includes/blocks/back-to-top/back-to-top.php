<?php
/**
 * TimeLine Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class_name = 'back-to-top';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
?>

<div class="<?= $class_name ?>">
    <a href="#header-scroll-to-top" aria-label="Powrót do góry"><span>Powrót do góry</span></a>
</div>