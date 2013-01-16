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
   * Return array of fields for a schema
   *
   * @param $schema
   * @param bool $from_reference bool
   * @return array
   */
  function get_schema_fields( $schema, $from_reference = false ) {
    return ScaleUp_Schemas::get_schema_fields( $schema, $from_reference );
  }
}

if ( !function_exists( 'get_schema_field' ) ) {

  function get_schema_field( $field, $from_reference = false ) {
    return ScaleUp_Schemas::get_schema_field( $field, $from_reference );
  }
}

if ( !function_exists( 'has_schema' ) ) {
  /**
   * Return true if post has schema loaded into it
   *
   * @return bool
   */
  function has_schema() {
    global $post;
    return isset( $post->schema );
  }
}