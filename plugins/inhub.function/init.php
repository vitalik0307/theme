<?php
/**
 * Plugin Name: My first plugin
 * Plugin URI: http://test.com
 * Description: my first plugin
 * Version: 1.0.0
 * Author: your name here
 * Author URI: http://test.com
 * License: GPL2
 */


if ( ! defined( 'WPINC' ) ) {
  die;
}

 include 'lib/post_tax.php';

define( 'RF_DIR', dirname( "__FILE__" ) );
?>