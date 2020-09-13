<?php
/**
 * Loads and enables the widgets for the plugin.
 *
 * @package    user_roles
 * @subpackage Includes
 * @author     Atozsites <admin@Atozsites.com>
 * @copyright  Copyright (c) 2009 - 2018, Atozsites
 * @link       https://Atozsites.com/

 */

# Hook widget registration to the 'widgets_init' hook.
add_action( 'widgets_init', 'user_roles_register_widgets' );

/**
 * Registers widgets for the plugin.
 *
 * @since  0.2.0
 * @access public
 * @return void
 */
function user_roles_register_widgets() {

	// If the login form widget is enabled.
	if ( user_roles_login_widget_enabled() ) {

		require_once( user_roles_plugin()->dir . 'inc/class-widget-login.php' );

		register_widget( '\user_roles\Widget_Login' );
	}

	// If the users widget is enabled.
	if ( user_roles_users_widget_enabled() ) {

		require_once( user_roles_plugin()->dir . 'inc/class-widget-users.php' );

		register_widget( '\user_roles\Widget_Users' );
	}
}
