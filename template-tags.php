<?php

if ( !function_exists( 'get_schema_url' ) ) {
  /**
   * Return uri of the schema
   */
  function get_schema_url( $schema = false ) {

    if ( false === $schema ) {
      if ( has_schema() ) {
        global $post;
        return ScaleUp_Schemas::get_schema_url( $post->schema->name );
      }
    } else {
      return ScaleUp_Schemas::get_schema_url( $schema );
    }
  }
}