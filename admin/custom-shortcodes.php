<?php

// Container Shortcode
function container_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );

	return '<div class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'container', 'container_shortcode' );

// Inner Container Shortcode
function inner_container_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );

	return '<div class="container ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'innerContainer', 'inner_container_shortcode' );

// Row Shortcode
function row_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );

	return '<div class="row ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'row', 'row_shortcode' );

// Column Shortcode
function col_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );

	return '<div class="col ' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'col', 'col_shortcode' );

// Div Shortcode
function div_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'width' => ''
	), $atts );

	return '<div class="' . esc_attr($a['class']) . '">' . do_shortcode($content) . '</div>';
}

add_shortcode( 'div', 'div_shortcode' );

// Accordion Shortcode
function accordion_shortcode( $atts, $content ) {
	$content = wpautop(trim($content));
	$a = shortcode_atts( array(
		'class' => '',
		'title' => ''
	), $atts );

	return '<div class="accordionItem ' . esc_attr($a['class']) . '"><p class="accordionToggle accordionTitle"><strong> ' . esc_attr($a['title']) . ' </strong></p><div class="accordionContent">' . do_shortcode($content) . '</div></div>';
}

add_shortcode( 'accordion', 'accordion_shortcode' );
