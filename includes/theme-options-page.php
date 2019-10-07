<?php
/**
 * Theme options page output
 *
 * @package    IntegratePress
 * @subpackage StaticTemp
 * @since      1.0.0
 */

namespace StaticTemp\Includes\Options;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Page title.
$title = sprintf(
	'<h1 class="wp-heading-inline">%1s %2s</h1>',
	get_bloginfo( 'name' ),
	__( 'Display Options', 'statictemp' )
);

// Page description.
$description = sprintf(
	'<p class="description">%1s</p>',
	__( 'This is a starter/example page. Use it or remove it.', 'statictemp' )
);

// Begin page output.
?>

<div class="wrap statictemp-options-page">
	<?php echo $title; ?>
	<?php echo $description; ?>
	<hr />
</div><!-- End .wrap -->