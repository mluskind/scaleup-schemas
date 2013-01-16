<?php
/**
 * Provides access and acts as repository for available schemas
 */
class ScaleUp_Schemas {

  private static $_this;

  private static $_schemas;

  private static $_storage_transient = 'scaleup_schemas_storage';

  private static $_debug = array();

  private static $_available = array();

  private static $_post_type_to_schema = array();

  public static function this() {
    return self::$_this;
  }

  function __construct() {
    self::$_schemas = $this->_load_schemas();
    add_action( 'init', array( $this, 'init') );
    add_action( 'the_post', array( $this, 'the_post') );
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
  public static function register( $schema, $post_type, $fields ) {
    self::$_available[ $schema ][ $post_type ] = $fields;
    self::$_post_type_to_schema[ $post_type ] = $schema;
  }

  /**
   * Return array of field names for a schema
   *
   * @param $schema_name
   * @param $from_reference
   * @return array
   */
  public static function get_schema_fields( $schema_name, $from_reference = false ) {
    if ( $from_reference )
      return self::$_schemas['types'][ $schema_name ]['properties'];
    else
      return self::$_available[ $schema_name ];
  }

  /**
   * Return array of field information from schema fields reference
   *
   * @param $field
   * @param bool $from_reference
   * @return string
   */
  public static function get_schema_field( $field, $from_reference = false ) {
    if ( $from_reference )
      return self::$_schemas['properties'][ $field ];
    else // @todo: Don't know what this does yet
    return '';
  }

  /**
   * Return array of available schemas with their post types
   *
   * @return array
   */
  public static function get_available_schemas(){
    return self::$_available;
  }

  /**
   * Injects schema related information into the post
   *
   * @param $post
   */
  function the_post( $post ) {

    $schema = array();

    if ( isset( self::$_post_type_to_schema[ $post->post_type ] ) ) {
      $schema[ 'name' ]   = self::$_post_type_to_schema[ $post->post_type ];
      $schema[ 'fields' ] = self::get_schema_fields( $schema['name'] );
    }

    if ( is_object( $post ) ) {
      $schema = (object) $schema;
      $post->schema = $schema;
    } else {
      $post['schema'] = $schema;
    }

  }

  public static function get_schema_url( $schema ) {
    return self::$_schemas['types'][$schema]['url'];
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