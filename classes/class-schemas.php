<?php
/**
 * Provides access and acts as repository for available schemas
 */
class ScaleUp_Schemas {

  private static $_schemas;

  private static $_this;

  private static $_storage_transient = 'scaleup_schemas_storage';

  private static $_debug = array();

  private static $_available = array();

  public static function this() {
    return self::$_this;
  }

  function __construct() {
    self::$_schemas = $this->_load_schemas();
    add_action( 'init', array( $this, 'init') );
  }

  function init() {
    do_action( 'register_schemas' );
  }

  /**
   * Register a post_type with fields available for specific schema
   *
   * @param $schema
   * @param $post_type
   * @param $fields
   */
  function register( $schema, $post_type, $fields ) {
    self::$_available[ $schema ][ $post_type ] = $fields ;
  }

  /**
   * Return array of field names for a schema
   * @param $schema_name
   * @return array
   */
  public static function get_schema_fields( $schema_name ) {
    return self::$_schemas['types'][ $schema_name ]['properties'];
  }

  /**
   * Return array of available schemas with their post types
   *
   * @return array
   */
  public static function get_available_schemas(){
    return self::$_available;
  }

  private static function _load_schemas() {

    if ( false === ( $schemas = get_transient( self::$_storage_transient ) ) ) {
      $json = file_get_contents( SCALEUP_SCHEMAS_DIR . '/all.json' );
      $schemas = json_decode( $json, true );
      set_transient( self::$_storage_transient, $schemas );
    }

    return $schemas;
  }

}