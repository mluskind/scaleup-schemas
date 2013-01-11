<?php
if ( !function_exists( 'register_scaleup_schema' ) ) {

  /**
   * Registers schema by name $type with $classname from $path
   *
   * @param $type
   * @param $classname
   * @param $path
   */
  function register_scaleup_schema( $type, $classname, $path ) {
    ScaleUp_Schemas::register( $type, $classname, $path );
  }

}

