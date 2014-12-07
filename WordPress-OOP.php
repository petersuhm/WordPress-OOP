<?php

/**
 * Plugin Name: WordPress OOP
 * Plugin URI: http://petersuhm.com
 * Description: An example plugin showcasing object-oriented practices in a WordPress context.
 * Version: 0.0.0
 * Author: Peter Suhm
 * Author URI: http://petersuhm.com
 * License: GNU GENERAL PUBLIC LICENSE
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// PSR-4 autoloading: http://www.php-fig.org/psr/psr-4/
require 'autoload.php';

use WordPressOOP\WordPressOOP;

// Create main plugin instance, which will also serve as the service container.
$wordPressOOP = new WordPressOOP;

// Plugin life time hooks.
register_activation_hook(__FILE__, array($wordPressOOP, 'activate'));
register_deactivation_hook(__FILE__, array($wordPressOOP, 'deactivate'));
// register_uninstall_hook(__FILE__, array($wordPressOOP, 'uninstall'));

?>
