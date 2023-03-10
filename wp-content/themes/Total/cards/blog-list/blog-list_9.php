<?php
/**
 * Card: Blog List 9
 *
 * @package Total WordPress Theme
 * @subpackage Cards
 * @version 5.0.5
 */

defined( 'ABSPATH' ) || exit;

$output = '';

$bk = $this->get_breakpoint();

$output .= '<div class="wpex-card-inner wpex-' . $bk . '-flex wpex-bg-white wpex-border-2 wpex-border-solid wpex-border-gray-200">';

	// Media
	$output .= $this->get_media( array(
		'class' => 'wpex-' . $bk . '-w-50 wpex-' . $bk . '-flex-shrink-0',
	) );

	$output .= '<div class="wpex-card-details wpex-' . $bk . '-flex-grow wpex-p-25 wpex-last-mb-0">';

		// Title
		$output .= $this->get_title( array(
			'link'  => true,
			'class' => 'wpex-heading wpex-text-lg wpex-font-bold wpex-mb-15',
		) );

		// Excerpt
		$output .= $this->get_excerpt( array(
			'class' => 'wpex-mb-15',
		) );

		// More Link
		$output .= $this->get_more_link( array(
			'class'  => 'wpex-font-semibold',
			'text'   => esc_html__( 'Continue reading', 'total' ),
			'suffix' => ' &rarr;',
		) );

	$output .= '</div>';

$output .= '</div>';

return $output;