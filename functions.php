<?php

if ( !function_exists( 'register_scaleup_schema' ) ) {
  /**
   * Registers schema by name $type with $classname from $path
   *
   * @param $schema
   * @param $post_type
   * @param $fields
   */
  function register_schema( $schema, $post_type, $fields ) {
    ScaleUp_Schemas::register( $schema, $post_type, $fields );
  }
}

if ( !function_exists( 'get_schema_fields' ) ) {
  /**
   * Return array of schema's fields
   *
   * @param $schema
   */
  function get_schema_fields( $schema ) {
    return ScaleUp_Schemas::get_schema_fields( $schema );
  }
}

