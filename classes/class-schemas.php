<?php
/**
 * Provides access and acts as repository for available schemas
 */
class ScaleUp_Schemas {

  private static $_schemas;

  private static $_this;

  private static $_storage_transient = 'scaleup_schemas_storage';

  public static function this() {
    return self::$_this;
  }

  function __construct() {
    self::$_schemas = $this->_load_schemas();
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