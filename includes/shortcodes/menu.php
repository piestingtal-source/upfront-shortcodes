<?php

su_add_shortcode( array(
		'id' => 'menu',
		'callback' => 'su_shortcode_menu',
		'image' => su_get_plugin_url() . 'admin/images/shortcodes/menu.svg',
		'name' => __( 'Menu', 'upfront-shortcodes' ),
		'type' => 'single',
		'group' => 'other',
		'atts' => array(
			'name' => array(
				'values' => array( ),
				'default' => '',
				'name' => __( 'Menu name', 'upfront-shortcodes' ), 'desc' => __( 'Custom menu name. Ex: Main menu', 'upfront-shortcodes' )
			),
			'class' => array(
				'type' => 'extra_css_class',
				'name' => __( 'Extra CSS class', 'upfront-shortcodes' ),
				'desc' => __( 'Additional CSS class name(s) separated by space(s)', 'upfront-shortcodes' ),
				'default' => '',
			),
		),
		'desc' => __( 'Custom menu by name', 'upfront-shortcodes' ),
		'icon' => 'bars',
	) );

function su_shortcode_menu( $atts = null, $content = null ) {
	$atts = shortcode_atts( array(
			'name' => false,
			'class' => ''
		), $atts, 'menu' );
	$return = wp_nav_menu( array(
			'echo'        => false,
			'menu'        => $atts['name'],
			'container'   => false,
			'fallback_cb' => 'su_shortcode_menu_fallback',
			'items_wrap'  => '<ul id="%1$s" class="%2$s' . su_get_css_class( $atts ) . '">%3$s</ul>'
		) );
	return ( $atts['name'] ) ? $return : false;
}

function su_shortcode_menu_fallback() {
	return __( 'This menu doesn\'t exists, or has no elements', 'upfront-shortcodes' );
}
