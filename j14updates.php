<?php
/*
 Plugin Name: J14 Updates
 Plugin URI: http://www.j14.org.il/j14widget/
 Description: A Wordpress widget for j14
 Version: 1.2
 Author: Edo Frenkel \ Tailor Vijay \ Ido Schacham \ Lior Zur
 Author URI: http://www.lightapps.co.il \ http://www.regularbasic.com \ http://www.idosius.com
 License: GPL2

 Copyright 2011 OU

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

define('j14updates_TEXT_DOMAIN', 'j14updates');
define('j14updates_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
define('j14updates_PLUGIN_URL', plugin_dir_url( __FILE__ ));

require_once(j14updates_PLUGIN_DIR . 'j14updates-widget.php');


if (! class_exists('j14updatesPlugin')) {

	/**
	 * j14updatesPlugin Plugin Class
	 */
	class j14updatesPlugin {

		/**
		 * constructor
		 */
		function j14updatesPlugin() {
			add_action('widgets_init', create_function('', 'return register_widget("j14updatesWidget");'));
		}
		
		
	} // j14updatesPlugin Plugin Class end
	
	
}

// instantiate
if (class_exists("j14updatesPlugin")) {
	$j14updates_plugin = new j14updatesPlugin();
}







?>
