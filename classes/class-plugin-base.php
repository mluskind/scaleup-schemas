<?php
class ScaleUp_Schemas_Plugin {

  function __construct() {
    add_filter( 'debug_bar_panels', array( $this, 'debug_bar_panels') );
  }

  function debug_bar_panels( $panels ) {
    include_once( SCALEUP_SCHEMAS_DIR . '/classes/class-debug-bar.php' );
    $panels[] = new ScaleUp_Schemas_Debug_Bar_Panel();
    return $panels;
  }

}