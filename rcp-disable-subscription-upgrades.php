<?php
/**
Plugin Name: Restrict Content Pro - Disable Subscription Upgrades
Plugin URI:  https://wordpress.org/plugins/rcp-disable-subscription-upgrades/
Description: Don't allow your users to upgrade their current RCP subscription level.
Version:     1.0
Author:      Rami Yushuvaev
Author URI:  https://GenerateWP.com/
Text Domain: rcp-disable-subscription-upgrades
*/



/**
 * Security check
 *
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Disable subscription upgrades
 *
 * Don't allow your users to upgrade their current subscriptions.
 *
 * @since 1.0
 */
add_filter( 'rcp_can_upgrade_subscription', '__return_false' );
