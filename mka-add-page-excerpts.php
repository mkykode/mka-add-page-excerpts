<?php
/*
Plugin Name: Monkey Kode - Add Excerpts to Pages
Plugin URI:
Description: Adds excerpt functionality to pages.
Version:     1.0.0
Author:      Jull Weber
Author URI:  http://monkeykode.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: mka-add-page-excerpts
Domain Path:
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if(!function_exists('mka_add_page_excerpts')) :
	function mka_add_page_excerpts(){
		add_post_type_support( 'page', 'excerpt' );
	}
	function run() {
		add_action( 'init', 'mka_add_page_excerpts' );

	}
	run();
endif;