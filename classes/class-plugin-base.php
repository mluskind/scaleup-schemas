<?php
class ScaleUp_Schemas_Plugin {

  function __construct() {
    add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
    add_filter( 'debug_bar_panels', array( $this, 'debug_bar_panels') );
  }

  static function plugins_loaded() {
    add_action( 'admin_bar_init', array( self, 'admin_bar_init' ) );
  }

  static function admin_bar_init() {
    if ( class_exists( 'Debug_Bar') ) {

    }
  }

}