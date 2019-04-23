<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-shortcode-bottom_block',
	$shortcodes_extension->get_declared_URI('/shortcodes/bottom_block/static/css/styles.css'),
	array('font-awesome')
);

