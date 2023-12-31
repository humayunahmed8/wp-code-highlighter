<?php
/**
 * Plugin Name: Code Highlighter
 * Plugin URI: https://github.com/humayunahmed8/code-highlighter
 * Description: Loads HighlightJS and clipboard.js on singular pages for syntax highlighting with a 1-click copy to clipboard button.
 * Version: 1.0
 * Author: Humayun Ahmed
 * Author URI: https://github.com/humayunahmed8
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: humayunahmed8/wp-code-highlighter
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}
add_action( 'wp_enqueue_scripts', 'wphjs_enqueue_wphighlightjs' );


/**
 * Load HighlightJS and clipboard JS on single entries.
 */
function wphjs_enqueue_wphighlightjs() {
	// if this is not a singular post of any post type (post, attachment, page, custom post types), abort.
	if ( ! is_singular() ) {
		return;
	}
	wp_enqueue_style( 'highlight-js-css', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );
	wp_enqueue_script( 'highlight-js-script', plugin_dir_url( __FILE__ ) . 'assets/js/highlight.min.js', '', '11.5.1', true );
	wp_enqueue_script( 'highlight-js-clipboard', plugin_dir_url( __FILE__ ) . 'assets/js/clipboard.min.js', '', '1.0.0', true );
	wp_enqueue_script( 'highlight-js-init', plugin_dir_url( __FILE__ ) . 'assets/js/highlight-init.js', '', '1.0.0', true );
}
