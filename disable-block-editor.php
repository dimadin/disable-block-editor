<?php
/**
 * Plugin Name: Disable Block Editor
 * Plugin URI:  https://milandinic.com/wordpress/plugins/disable-block-editor/
 * Description: Disable block editor for all post types and all users.
 * Author:      Milan Dinić
 * Author URI:  https://milandinic.com/
 * Version:     1.0.0
 * Text Domain: disable-block-editor
 * Domain Path: /languages/
 * License:     GPL
 *
 * @package Disable_Block_Editor
 */

// Yes, it’s literally one single line that we need.
add_filter( 'use_block_editor_for_post', '__return_false', 666 );
