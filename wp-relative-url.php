<?php
/**
 * Plugin Name: Relative URLs
 * Plugin URI:  https://www.guglielmopepe.com/#wp-relative-url
 * Description: Convert absolute URLs in relative URLs.
 * Version:     1.0.0
 * Author:      Guglielmo Pepe
 * Author URI:  https://www.guglielmopepe.com
 * License:     GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-relative-url
 * Domain Path: /languages
 *
 * Relative URLs is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Relative URLs is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Relative URLs. If not, see https://www.gnu.org/licenses/gpl-2.0.html}.
 * 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// hooks & filters
add_action( 'registered_taxonomy', 'wp_relative_url_buffer_start' );
add_action( 'shutdown', 'wp_relative_url_buffer_end' );

// functions
function wp_relative_url_buffer_start() { ob_start( 'wp_relative_url_replace' ); }
function wp_relative_url_buffer_end() { @ob_end_flush(); }

function wp_relative_url_replace( $buffer ) {
	$home_url = esc_url( home_url() ) ;
	$home_url_escaped = str_replace( '/', '\/', $home_url );

	return str_replace( array( $home_url, $home_url_escaped), array( '', '' ), $buffer );
}

