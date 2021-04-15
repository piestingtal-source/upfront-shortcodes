<?php

su_add_shortcode(
	array(
		'id'       => 'note',
		'callback' => 'su_shortcode_note',
		'image'    => su_get_plugin_url() . 'admin/images/shortcodes/note.svg',
		'name'     => __( 'Note', 'upfront-shortcodes' ),
		'type'     => 'wrap',
		'group'    => 'box',
		'atts'     => array(
			'note_color' => array(
				'type'    => 'color',
				'values'  => array(),
				'default' => '#FFFF66',
				'name'    => __( 'Background', 'upfront-shortcodes' ),
				'desc'    => __( 'Note background color', 'upfront-shortcodes' ),
			),
			'text_color' => array(
				'type'    => 'color',
				'values'  => array(),
				'default' => '#333333',
				'name'    => __( 'Text color', 'upfront-shortcodes' ),
				'desc'    => __( 'Note text color', 'upfront-shortcodes' ),
			),
			'radius'     => array(
				'type'    => 'slider',
				'min'     => 0,
				'max'     => 20,
				'step'    => 1,
				'default' => 3,
				'name'    => __( 'Radius', 'upfront-shortcodes' ),
				'desc'    => __( 'Note corners radius', 'upfront-shortcodes' ),
			),
			'class'      => array(
				'type'    => 'extra_css_class',
				'name'    => __( 'Extra CSS class', 'upfront-shortcodes' ),
				'desc'    => __( 'Additional CSS class name(s) separated by space(s)', 'upfront-shortcodes' ),
				'default' => '',
			),
			'id'         => array(
				'name'    => __( 'HTML Anchor', 'upfront-shortcodes' ),
				'desc'    => __( 'Enter a word or two, without spaces, to make a unique web address just for this element. Then, you\'ll be able to link directly to this section of your page.', 'upfront-shortcodes' ),
				'default' => '',
			),
		),
		'content'  => __( 'Note text', 'upfront-shortcodes' ),
		'desc'     => __( 'Colored box', 'upfront-shortcodes' ),
		'icon'     => 'list-alt',
	)
);

function su_shortcode_note( $atts = null, $content = null ) {

	$atts = shortcode_atts(
		array(
			'note_color' => '#FFFF66',
			'text_color' => '#333333',
			'background' => null, // 3.x
			'color'      => null, // 3.x
			'radius'     => '3',
			'class'      => '',
			'id'         => '',
		),
		$atts,
		'note'
	);

	if ( null !== $atts['color'] ) {
		$atts['note_color'] = $atts['color'];
	}

	if ( null !== $atts['background'] ) {
		$atts['note_color'] = $atts['background'];
	}

	// Prepare border-radius
	$radius = '0' !== $atts['radius']
		? 'border-radius:' . $atts['radius'] . 'px;-moz-border-radius:' . $atts['radius'] . 'px;-webkit-border-radius:' . $atts['radius'] . 'px;'
		: '';

	su_query_asset( 'css', 'su-shortcodes' );

	return '<div class="su-note' . su_get_css_class( $atts ) . '" id="' . sanitize_html_class( $atts['id'] ) . '" style="border-color:' . su_adjust_brightness( $atts['note_color'], -10 ) . ';' . $radius . '"><div class="su-note-inner su-u-clearfix su-u-trim" style="background-color:' . $atts['note_color'] . ';border-color:' . su_adjust_brightness( $atts['note_color'], 80 ) . ';color:' . $atts['text_color'] . ';' . $radius . '">' . su_do_nested_shortcodes( $content, 'note' ) . '</div></div>';

}
