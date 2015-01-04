<?php
/**
 * Plugin Name: PenserClasser.fr's special features
 * Plugin URI: https://github.com/elifsu/PluginElifsuForWordPress
 * Description: Specific features pour penserclasser.fr website (to avoid editing the theme)
 * Version: 0.1
 * Author: Samy Rabih
 * Author URI: http://lahaut.info
 * Text Domain: 
 * Domain Path: 
 * Network: 
 * License: 
 */
 
 /*  Copyright 2015  Samy Rabih  (email : contact@lahaut.info)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function add_search_to_wp_menu ( $items, $args ) {
	if( 'primary' === $args -> theme_location ) {
$items .= '<li class="menu-item menu-item-search">';
$items .= get_search_form(false);
$items .= '</li>';
	}
return $items;
}
add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);