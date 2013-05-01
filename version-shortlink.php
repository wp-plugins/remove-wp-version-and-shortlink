<?php
/*
PLUGIN NAME: Remove WP version and shortlink
PLUGIN URL:http://wordpress.org/extend/plugins/remove-wp-version-and-shortlink/
DESCRIPTION: Removes Wordpress and version and short link
AUTHOR: Naganandhini
AUTHOR EMAIL: me@naganandhini.com
AUTHOR URI:http://www.naganandhini.com/
VERSION: 1.0
*/
/*To remove RSD Link*/
remove_action('wp_head', 'rsd_link');
/*To remove WLW Link*/
remove_action('wp_head', 'wlwmanifest_link');
/*To remove wordpress version*/
remove_action('wp_head', 'wp_generator');
/*To remove shortlink*/
remove_action('wp_head', 'wp_shortlink_wp_head');
?>