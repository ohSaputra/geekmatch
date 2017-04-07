<?php
/**
 *
 * Plugin Name: Github Matcher
 * Plugin URI: github-matcher.com
 * Authot: ohendra
 * Version: 1.0
 * License: MIT
 *
 */

function ghm_show_github_data() {
	return '<div id="github-matcher"></div>';
}
add_shortcode('show_github_user', 'ghm_show_github_data');

function ghm_enqueue_script() {
	wp_enqueue_script( 'ghm-match-js', plugins_url( 'js/github-match.js', __FILE__ ), array( 'jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'ghm_enqueue_script' );