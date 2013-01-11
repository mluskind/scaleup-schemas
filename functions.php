<?php
if ( !function_exists( 'register_scaleup_schema' ) ) {

  /**
   * Registers schema by name $type with $classname from $path
   *
   * @param $type
   * @param $args
   */
  function register_scaleup_schema( $type, $args ) {
    ScaleUp_Schemas::register( $type, $args );
  }

}

