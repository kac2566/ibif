<?php
/**
 * Theme-switcher Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'navigation-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" id="header--to-top">
    <button type="button" class="navigation-block__hamburger" aria-label="Open menu" aria-expanded="false">
        <span></span>
    </button>
    <div class="navigation-block__nav-wrapper">
        <div class="navigation-block__pseudo-element"></div>
        <?php wp_nav_menu(array(
            'menu'              => 'header_menu',
            'theme_location'    => 'header_menu',
            'depth'             => 2,
            'menu_class'        => 'navigation-block__nav',
            'container'         => 'nav',
        )); ?>
    </div>
</div>