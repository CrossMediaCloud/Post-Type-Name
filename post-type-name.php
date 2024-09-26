<?php
/**
 * Plugin Name:       Post Type Name
 * Description:       Display post type name as a block with styling options.
 * Requires at least: 6.6
 * Requires PHP:      7.4
 * Version:           0.1.0
 * Author:            Drivingralle
 * Plugin URI:        https://github.com/CrossMediaCloud/Post-Type-Name/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       post-type-name
 *
 * @package CrossMediaCloud
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function cross_media_cloud_post_type_name_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'cross_media_cloud_post_type_name_block_init' );
