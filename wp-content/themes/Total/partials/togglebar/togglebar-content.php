<?php
/**
 * Togglebar content output
 *
 * @package Total WordPress theme
 * @subpackage Partials
 * @version 5.0
 */

defined( 'ABSPATH' ) || exit;

// Display content if defined
if ( $content = wpex_togglebar_content() ) : ?>

	<div class="entry wpex-clr"><?php echo do_shortcode( wp_kses_post( $content ) ); ?></div>

<?php endif; ?>